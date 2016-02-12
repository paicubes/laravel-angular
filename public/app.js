// public/js/app.js
//var base_url="http://local.sureflap";


var sureflapApp = angular.module('sureflap',['ngRoute']).run(function($rootScope) {
    $rootScope.bodyClass="body-bg"; 
}); 


    // configure our routes
    sureflapApp.config(function($routeProvider) {
        $routeProvider

            // route for the home page
            .when('/', {
                templateUrl : 'views/home/index.php',
                //controller  : 'mainController'
            })

            // route for the about page
            .when('/about/', {
                templateUrl : 'views/home/about.php',
                controller  : 'aboutController'
            })

            // route for the sign-up page
            .when('/sign-up', {
                templateUrl : 'views/home/sign-up.php',
                //controller  : 'contactController'
            }) 
			
			// route for the home page
            .when('/home', {
                templateUrl : 'views/home/home.php',
                controller  : 'HomeController'
            });
    });
	
	// create the controller and inject Angular's $scope
    sureflapApp.controller('mainController', function($scope) {
        // create a message to display in our view
        $scope.message = 'Everyone come and see how good I look!';
    });

	