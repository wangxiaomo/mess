'use strict';

/**
 * @ngdoc function
 * @name gollumApp.controller:NewCtrl
 * @description
 * # NewCtrl
 * Controller of the gollumApp
 */
angular.module('gollumApp')
  .controller('newCtrl', function ($scope, $location, api) {

  var hash = $location.hash() || '简历宝典';
  $scope.category = hash;
  api.getNew(hash).then(function(data){
    $scope.news = data;
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
