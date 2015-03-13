'use strict';

var myApp = angular.module('myApp', ['ui.router']);

myApp.config(function ($stateProvider, $urlRouterProvider, $locationProvider) {

	$urlRouterProvider.otherwise("/");

    var pageNames = ['home', 'login'];
	angular.forEach(pageNames, function(name) {
        $stateProvider.state(name, {
            url: '/' + (name == 'home' ? '' : name),
            templateUrl: 'app/html/' + name + '.html',
            controller: name + 'Controller',
            title: (name.substring(0, 1).toUpperCase() + name.substring(1)), // capitalized title
        });
    });

    $locationProvider.html5Mode(true);
});

myApp.run(function ($rootScope, $stateParams, $window, $state, $location, $http, CSRF_TOKEN) {

    $http.defaults.headers.common['csrf-token'] = CSRF_TOKEN;

    $rootScope.$stateParams = $stateParams;
    $rootScope.$state = $state;
});

