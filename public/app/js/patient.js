angular.module('boilerplate')
.controller('PatientCtrl', function($scope, $http) {
	$scope.app.title = "Data Pasien";
	$scope.isLoading = true;

	$scope.currentPage = 1;

	var getData = function() {
		$http.get(prefix + '/pasien?page=' + $scope.currentPage).success(function(data) {
			$scope.pasien = data;
			$scope.isLoading = false;
		});
	};

	$scope.nextPage = function() {
		if ($scope.currentPage < $scope.pasien.last_page)
		{
			$scope.currentPage++;
			getData();
		}
	};

	$scope.prevPage = function() {
		if ($scope.currentPage > 1)
		{
			$scope.currentPage--;
			getData();
		}
	};
	$scope.lastPage=function () {
		$scope.currentPage = $scope.pasien.last_page;
		getData();
	}
	$scope.firstPage=function () {
		$scope.currentPage = $scope.pasien.first_page;
		getData();
	}

	getData();

	$scope.doSearch = function() {
		$http.get(prefix +'/pasien?page=' + $scope.currentPage + '&q=' + $scope.search).success(function(data) {
			$scope.pasien = data;
			$scope.isLoading = false;
		});
	};
})

.controller('AddPatientCtrl', function($scope, $http, $state) {
	$scope.app.title = "Tambah Pasien";
	$scope.simpanPasien=function(){
	$http.post(prefix + '/simpan_pasien',$scope.pasien).success(function(){
				$state.go('patient');
	})
};
})
