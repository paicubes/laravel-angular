

var sureflapApp = angular.module('sureflap',['ui.router'])
				.run(function($rootScope) {
							$rootScope.bodyClass="body-bg"; 
							
				})
				.value("user", {
					name: "Ashwani",
					id: 1,
					loggedIn: false
				}); 

/* add remove class on body */				
sureflapApp.factory("setClass", function($rootScope){
	return {
		set: function(cls)
		{
			$rootScope.bodyClass=cls; 
		}
	}
});
/* add remove class on body */



// configure our routes
    sureflapApp.config(function($stateProvider, $urlRouterProvider,$anchorScrollProvider) {
		$urlRouterProvider.otherwise('/');
		
		$stateProvider       
			.state("root", {
				url: "",
				template: "<section ui-view></section>",
				controller: function($state, user) {
				  if ($state.is("root")) $state.go(user.loggedIn ? "home" : "landing");
				}
			})
		// route for the home page
            .state('landing', {
				url: '/',
                templateUrl : 'views/home/index.php',
                controller  : 'LandingController'
            })

            
            .state('/sign-up', {
				url: '/sign-up',          
                templateUrl : 'views/home/sign-up.php',                
            })

            
            .state('home', {
			   url: '/home',	
               templateUrl : 'views/home/home.php',
               controller  : 'HomeController'
            }) 
			
           
			
			/* nested state starts */
			.state('home.timeline', {
				url: '/timeline',
				views: {

					// the main template will be placed here (relatively named)
					//'': { templateUrl: 'views/home/home.php' },

					// for column two, we'll define a separate controller 
					'contentRightCenter@home': { 
						templateUrl: 'views/home/timeline.php',
						controller: 'TimelineController',
						
					}
				}
				
			})
			.state('home.reports', {
				url: '/reports',
				views: {
					'contentRightCenter@home': { 
						templateUrl: 'views/home/reports.php',
						controller:function($scope){$scope.acitveNav=true;},
						
					}
				}
				
			})
			.state('home.lock', {
				url: '/lock',
				views: {
					'contentRightCenter@home': { 
						templateUrl: 'views/home/lock.php',
							
					}
				}
				
			})
			.state('home.people', {
				url: '/people',
				views: {
					'contentRightCenter@home': { 
						templateUrl: 'views/home/people.php',
							
					}
				}
				
			})
			/* nested state ends */
			
			;
    });
	

	sureflapApp	
	.controller("LandingController", function($rootScope,$scope, user, $state) {
		$rootScope.bodyClass="body-bg";
		$scope.login = function() {
		  user.loggedIn = true;
		  $state.go("root");
		}
	})