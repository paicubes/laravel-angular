

var sureflapApp = angular.module('sureflap',['ui.router']).run(function($rootScope) {
    $rootScope.bodyClass="body-bg"; 
}); 


// configure our routes
    sureflapApp.config(function($stateProvider, $urlRouterProvider) {
		$urlRouterProvider.otherwise('/');
		
		$stateProvider       
        
		// route for the home page
            .state('/', {
				url: '/',
                templateUrl : 'views/home/index.php',
                //controller  : 'mainController'
            })

            // route for the about page
            .state('/sign-up', {
				url: '/sign-up',
                //templateUrl : 'views/home/sign-up.php',
                templateUrl : 'views/home/sign-up.php',
                //controller  : 'contactController'
            })

            // route for the contact page
            .state('home', {
			   url: '/home',	
               templateUrl : 'views/home/home.php',
               controller  : 'HomeController'
            });
    });
	

	sureflapApp.controller("TestController",function($scope	)
	{
		
		$scope.left=[{'rate':1},{'rate':2},{'rate':3}]
	});