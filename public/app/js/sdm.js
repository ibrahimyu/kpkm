angular.module('boilerplate')

.controller('SdmCtrl', function($scope, $http) {
	$scope.app.title = 'SDM';

	$http.get(prefix + '/sdm').success(function(data) {
		$scope.sdm = data;
	});

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
