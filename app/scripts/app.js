'use strict';

/**
 * @ngdoc overview
 * @name gollumApp
 * @description
 * # gollumApp
 *
 * Main module of the application.
 */
angular
  .module('gollumApp', ['ngRoute'])
  .config(['$routeProvider', function ($routeProvider) {
    $routeProvider
      .when('/zph', {
        templateUrl: 'views/zph-list.html',
        controller: 'zphCtrl'
      })
      .when('/new', {
        templateUrl: 'views/new-list.html',
        controller: 'newCtrl'
      })
      .otherwise({
        redirectTo: '/zph'
      });
  }]);
