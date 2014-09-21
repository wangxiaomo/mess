'use strict';

/**
 * @ngdoc function
 * @name gollumApp.controller:NewCtrl
 * @description
 * # NewCtrl
 * Controller of the gollumApp
 */
angular.module('gollumApp')
  .controller('newCtrl', function ($scope, $localStorage, api) {

  // render from cache
  var news = $localStorage.news || [];
  if(_.isEmpty(news)) {
    console.log("loading overlay show");
    $('.loading-overlay').show();
  }else{
    $scope.news = news;
  }

  api.getNew('面试心经').then(function(data){
    $localStorage.news = data;
    $scope.news = data;
    $('.loading-overlay').hide();
  });

  $scope.showDetail = function(data) {
    $('.section-data').hide();
    $('.detail-view').find('.hd-title').text(data.n_title);
    $('.detail-view').find('.hd-meta').html(
      "<span>" + data.n_addtime + "</span>"
    );
    var whitespace = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    $('.detail-view').find('.hd-content').html(whitespace + data.n_content);
    $('.detail-view, .section-go-back').show();
  };

  $scope.goHome = function() {
    $('.detail-view, .section-go-back').hide();
    $('.section-data').show();
  };
});
