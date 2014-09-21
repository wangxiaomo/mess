'use strict';

/**
 * @ngdoc function
 * @name gollumApp.controller:ZphCtrl
 * @description
 * # ZphCtrl
 * Controller of the gollumApp
 */
angular.module('gollumApp')
  .controller('zphCtrl', function ($scope, $localStorage, $sce, api) {

  var getGeo = function(geoStr) {
    var geoMsg = geoStr.split(':');
    return _.map(geoMsg[1].split(','), parseFloat);
  };

  var renderBMap = function(container, geo) {
    var map = new BMap.Map(container),
        point = new BMap.Point(geo[0], geo[1]),
        marker = new BMap.Marker(point);

    map.addOverlay(marker);
    map.centerAndZoom(point, 15);
  };

  var render = function(data) {
    var geo = getGeo(data.z_map);
    
    renderBMap('geo-map', geo);
    $('span[_cid=1]').hide();
    $scope.zph = data;
  };

  // render from cache
  var zph = $localStorage.zph || {};

  if(_.isEmpty(zph)) {
    console.log("loading overlay show");
    $('table').hide();
    $('.loading-overlay').show();
  }else{
    render(zph);
  }

  api.getZPH().then(function(data){
    $localStorage.zph = data;

    render(data);
    $('.loading-overlay').hide();
    $('table').show();
  });

  $scope.showHTML = function(v) {
    return $sce.trustAsHtml(v);
  };
});
