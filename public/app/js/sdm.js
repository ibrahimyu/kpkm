angular.module('boilerplate')

.controller('SdmCtrl', function($scope, $http) {
	$scope.app.title = 'SDM';

	$http.get('/sdm').success(function(data) {
		$scope.sdm = data;
	});

	$scope.deleteSDM = function(id) {
		$http.delete('/sdm/' + id).success(function(data) {
			// success.
		});
	};
})

.controller('TambahSdmCtrl', function($scope, $http) {
	$scope.add.title = 'Tambah SDM';

	$scope.simpanSDM = function() {
		$http.post('/sdm', $scope.sdm).success(function(data) {
			// success!
		});
	};
})

.controller('EditSdmCtrl', function($scope, $http) {
	$scope.add.title = 'Edit SDM';

	$scope.simpanSDM = function() {
		$http.put('/sdm/' + $scope.sdm.id, $scope.sdm).success(function(data) {

		});
	};
})
