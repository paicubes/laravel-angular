// public/js/controllers/mainCtrl.js

var sureflapApp=angular.module('sureflap').controller('aboutController', function($scope, $http) {


$http.get(base_url + '/getAboutContent', {'username': $scope.username, 'password': $scope.password}
   ).success(function(data) { 
		$scope.id=data.id;
		$scope.name=data.name;
   })
   .error(function(data){
     $scope.messages = 'There was a network error. Try again later.';
   });


});