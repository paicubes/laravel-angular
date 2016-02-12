// public/js/controllers/LoginController.js

var sureflapApp=angular.module('sureflap')
	.controller('HomeController', function($scope, $http,$location, $rootScope,user, setClass) { 		
		setClass.set("");		
		$scope.user = user;
		$scope.logout = function() {
		user.loggedIn = false;
		$state.go("root");
		}	
		
	});