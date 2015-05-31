$(function(){
  var getDayCN = function(idx) {
    var days = ['日', '一', '二', '三', '四', '五', '六'];
    return days[idx];
  };

  var today = new Date(),
      year = today.getFullYear(),
      month = today.getMonth() + 1,
      date = today.getDate(),
      day = getDayCN(today.getDay()),
      dateLocale = year + '年' + month + '月' + date + '日 星期' + day;
  $('.top-nav-left span').text(dateLocale);

  var search = function() {
    var token = $.trim($('#token').val());
    if(token){
      var url = "https://www.baidu.com/s?wd=site%3Awww.sxjm.cn%20" + token;
      window.location = url;
    }else{
      alert("请输入要搜索的内容!");
    }
  };
  $('#btn-search').on('click', search);
  $('#token').on('keypress', function(e){
    if(e.keyCode == '13') search();
  });

  $('.go-to-school').on('click', function(e){
    e.preventDefault();
    $('html,body').animate({scrollTop: '600px'}, 800);
    return false;
  });
  $('.go-to-feature').on('click', function(e){
    e.preventDefault();
    $('html,body').animate({scrollTop: '1100px'}, 800);
    return false;
  });
  $('.go-to-plan').on('click', function(e){
    e.preventDefault();
    $('html,body').animate({scrollTop: '1700px'}, 800);
    return false;
  });
  $('.go-to-contact').on('click', function(e){
    e.preventDefault();
    $('html,body').animate({scrollTop: '2200px'}, 800);
    return false;
  });

  var map = new BMap.Map('baidu-map');
      point = new BMap.Point(112.589633,37.816964),
      marker = new BMap.Marker(point);
  map.centerAndZoom(point, 17);
  map.addOverlay(marker);
  marker.setAnimation(BMAP_ANIMATION_BOUNCE);
  map.addControl(new BMap.ScaleControl({anchor: BMAP_ANCHOR_TOP_LEFT}));
  map.addControl(new BMap.NavigationControl());
  map.addControl(new BMap.NavigationControl({anchor: BMAP_ANCHOR_TOP_RIGHT, type: BMAP_NAVIGATION_CONTROL_SMALL}));
  map.enableScrollWheelZoom(true);
});
