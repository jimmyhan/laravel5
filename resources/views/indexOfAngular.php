<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Laravel 5 starter</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="app/css/app.css" rel="stylesheet" />

</head>
<body ng-app="myApp">
	<div><a ui-sref="home">Home</a> | <a ui-sref="login">Login</a></div>

	<div class="alert" ng-show="flash" ng-bind="flash"></div>

	<div class="container" ui-view></div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
	<script src="app/lib/angular-ui-router.min.js"></script>
	<script src="app/js/app.js"></script>
	<script src="app/js/controllers.js"></script>
	<!-- <script src="app/js/services.js"></script>
	<script src="app/js/controllers/appController.js"></script>
	<script src="app/js/controllers/skinController.js"></script>
	<script src="app/js/controllers/homeController.js"></script>
	<script src="app/js/controllers/loginController.js"></script> -->
	<script>
	    angular.module("myApp").constant("CSRF_TOKEN", '<?php echo csrf_token(); ?>'); 
	</script>
</body>
</html>