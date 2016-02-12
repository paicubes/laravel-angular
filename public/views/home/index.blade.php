<!-- app/views/index.php -->

<!doctype html >
 <html lang="en" ng-app="sureflap">

 <head> <meta charset="UTF-8" > 

    <!-- JS -->
    <script src="js/jquery.min.js"></script>
	
    
	<script src="js/angular/angular.js"></script>
	<script src="js/angular/angular-ui-router.min.js"></script>


	
	<script src="js/angular/app.js"></script>     
    <script src="js/controllers/mainCtrl.js"></script> <!-- load our controller -->
    <script src="js/controllers/aboutController.js"></script> <!-- load our controller -->        
    <script src="js/controllers/LoginController.js"></script> <!-- load our controller -->        
    <script src="js/controllers/HomeController.js"></script> <!-- load our controller -->        
    <script src="js/controllers/TimelineController.js"></script> <!-- load our controller -->        
    <script src="js/controllers/NavController.js"></script> <!-- load our controller -->        
	
	<!-- project css and js start -->
	<link href="css/font-awesome.css" type="text/css" rel="stylesheet" />		
	<link href="css/stylesheet.css" type="text/css" rel="stylesheet" /> 
	<link href="css/responsive.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="js/jquery.customSelect.js"></script>
	<script src="js/custom-file-input.js"></script>
	<script src="js/main.js"></script>
	
	<!-- project css and js ends -->

</head> 

<body ng-class="bodyClass"> 
<ui-view></ui-view>
    
	

</body> 
</html>