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

.controller('AddSdmCtrl', function($scope, $http) {
	$scope.app.title = 'Tambah SDM';

	$scope.simpanSDM = function() {
		$http.post('/sdm', $scope.sdm).success(function(data) {
			// success!
		});
	};
})

.controller('EditSdmCtrl', function($scope, $http, $stateParams) {
	$scope.add.title = 'Edit SDM';

	$http.get('/sdm/' + stateParams.id).success(function(data) {
		$scope.sdm = data;
	});

	$scope.simpanSDM = function() {
		$http.put('/sdm/' + $scope.sdm.id, $scope.sdm).success(function(data) {

		});
	};
})
