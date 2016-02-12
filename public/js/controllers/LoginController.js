// public/js/controllers/LoginController.js

var sureflapApp=angular.module('sureflap')
	
	.controller('LoginController', function($scope, $http,$location,$rootScope) { 
		//$rootScope.bodyClass="body-bg"; 
		$scope.login = function() {
			 $location.url("home");			
		}
		$scope.signUp = function() {
			 $location.url("home");			
		}


	});