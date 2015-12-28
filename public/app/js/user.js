angular.module('boilerplate')
.controller('UserCtrl', function($scope, $http, $state){
  $scope.app.title="User";
  $http.get(prefix + '/user').success(function(data){
    $scope.user=data;
  });

})
