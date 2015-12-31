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
		})
		.state('detail',{
			url:'/sdm/detail/:id',
			templateUrl: 'app/views/detail.html',
			controller: 'DetailSdmCtrl'
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



.run();
