angular.module('boilerplate', ['ui.router'])

.config(function($stateProvider, $urlRouterProvider) {
	$stateProvider
		.state('home', {
			url: '/',
			templateUrl: 'app/views/home.html',
			controller: 'DashboardCtrl'
		})

		.state('patient', {
			url: '/patient',
			templateUrl: 'app/views/patient.html',
			controller: 'PatientCtrl'
		})

		.state('tambahPasien', {
			url: '/patient/add',
			templateUrl: 'app/views/addPatient.html',
			controller: 'AddPatientCtrl'
		})

		.state('sdm', {
			url: '/sdm',
			templateUrl: 'app/views/sdm.html',
			controller: 'SdmCtrl'
		})

		.state('tambahSdm', {
			url: '/sdm/add',
			templateUrl: 'app/views/addSdm.html',
			controller: 'AddSdmCtrl'
		})

		.state('editSdm', {
			url: '/sdm/edit/:id',
			templateUrl: 'app/views/addSdm.html',
			controller: 'EditSdmCtrl'
		});

		.state('user', {
			url: '/user',
			templateUrl: 'app/views/user.html',
			controller: 'UserCtrl'
		})

	$urlRouterProvider.otherwise('/');
})

.controller('AppCtrl', function($scope, $http) {
	$scope.app = new Object;

	$http.get('/app/config/app.json').success(function(data) {
		$scope.app = data;
	});

	$http.get('/app/data/user.json').success(function(data) {
		$scope.app.user = data;

		$http.get('/app/data/messages.json').success(function(data) {
			$scope.app.user.messages = data;
		});

		$http.get('/app/data/notifications.json').success(function(data) {
			$scope.app.user.notifications = data;
		})
	});
})
//----------- patient----------

.controller('PatientCtrl', function($scope, $http) {
	$scope.app.title = "Data Pasien";
	$scope.isLoading = true;

	$scope.currentPage = 1;

	var getData = function() {
		$http.get('http://localhost:8000/pasien?page=' + $scope.currentPage).success(function(data) {
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

	getData();

	$scope.doSearch = function() {
		$http.get('http://localhost:8000/pasien?page=' + $scope.currentPage + '&q=' + $scope.search).success(function(data) {
			$scope.pasien = data;
			$scope.isLoading = false;
		});
	};
})

.controller('AddPatientCtrl', function($scope, $http, $state) {
	$scope.app.title = "Tambah Pasien";
	$scope.simpanPasien=function(){
<<<<<<< HEAD
<<<<<<< HEAD
	$http.post(prefix + '/simpan_pasien',$scope.pasien).success(function(){
		$state.go('patient');
=======
=======
>>>>>>> parent of 42e7774... pagination + search
	$http.post('http://localhost/kpkm/public/simpan_pasien',$scope.pasien).success(function(){

>>>>>>> parent of 42e7774... pagination + search
	})
	};
})

.controller('UserCtrl', function($scope, $http, $state){
  $scope.app.title="User";
  $http.get(prefix + '/user').success(function(data){
    $scope.user=data;
  });

})

.run();
