angular.module('boilerplate')

.controller('SdmCtrl', function($scope, $http) {
	$scope.app.title = 'SDM';
	$scope.currentPage=1;

	var getData=function(){
		$http.get(prefix +'/sdm?page=' +$scope.currentPage).success(function(data){
			$scope.sdm = data;
			$scope.isLoading=false;
		});
	};
	$scope.nextPage=function(){
		if ($scope.currentPage < $scope.sdm.last_page)
		{
			$scope.currentPage ++;
			getData();
		}
	};
	$scope.prevPage=function(){
		if ($scope.currentPage > 1)
		{
			$scope.currentPage --;
			getData();
		}
	};
	$scope.lastPage=function(){
		$scope.currentPage = $scope.sdm.last_page;
		getData();
	};
	$scope.firstPage=function(){
		$scope.currentPage = $scope.sdm.first_page;
		getData();
	};
	
	getData();
	//$http.get(prefix + '/sdm').success(function(data) {
	//	$scope.sdm = data;
	//});
	$scope.doSearch = function() {
		$http.get(prefix + '/sdm?page=' + $scope.currentPage + '&q=' + $scope.search).success(function(data) {
			$scope.sdm = data;
			$scope.isLoading = false;
		});
	};
	$scope.deleteSDM = function(item) {
		$scope.currentItem = item;
	};

	$scope.confirmDelete = function() {
		$http.delete(prefix + '/sdm/' + $scope.currentItem.id).success(function(data) {
			// success.
		});

		alert('Success!');
	};

	$scope.cancelDelete = function() {
		$scope.currentItem = {};
	};
})


.controller('AddSdmCtrl', function($scope, $http, $state) {
	$scope.app.title = "Tambah SDM";
	$scope.simpanSDM=function(){
	$http.post(prefix + '/sdm',$scope.sdm).success(function(){
		$state.go('sdm');
	})
	};
})

.controller('EditSdmCtrl', function($scope, $http, $stateParams) {
	$scope.app.title = 'Edit SDM';

	$http.get(prefix + '/sdm/' + $stateParams.id).success(function(data) {
		$scope.sdm = data;
	});

	$scope.simpanSDM = function() {
		$http.put(prefix + '/sdm/' + $scope.sdm.id, $scope.sdm).success(function(data) {

		});
	};
})
