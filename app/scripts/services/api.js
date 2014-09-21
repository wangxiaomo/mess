'use strict';

/**
 * @ngdoc service
 * @name gollumApp.api
 * @description
 * # api
 * Service in the gollumApp.
 */
angular.module('gollumApp')
  .service('api', function api($http, $q) {
    // AngularJS will instantiate a singleton by calling "new" on this function
    var API_URL_PREFIX = 'http://dev.yueqingwang.com/vapi/public/index.php/';

    var getAPIData = function(interfaceName) {
      var defer = $q.defer(),
          reqURL = API_URL_PREFIX + interfaceName;
      $http.get(reqURL).success(function(data, status, headers, config){
        defer.resolve(data);
      });
      return defer.promise;
    };

    this.getZPH = function() {
      return getAPIData('zph');
    };

    this.CategoryMap = {
      '简历宝典': 'news/jlbd',
      '面试心经': 'news/msxj',
      '跳槽攻略': 'news/tcgl',
      '办公人际': 'news/bgrj',
      '职场测试': 'news/zccs',
      '福利政策': 'news/flzc',
      '公益活动': 'news/gyhd',
      '网站公告': 'news/wzgg'
    };
    this.getNew = function(category) {
      return getAPIData(this.CategoryMap[category]);
    };
  });
