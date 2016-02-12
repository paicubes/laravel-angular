// public/js/controllers/TimelineController.js

var sureflapApp=angular.module('sureflap')
	.controller('TimelineController', function($scope, $http,$location, $rootScope,user) { 
		//$rootScope.bodyClass="";		
		$scope.user = user;
		$scope.logout = function() {
		user.loggedIn = false;
		$state.go("root");
		}	
		
	});