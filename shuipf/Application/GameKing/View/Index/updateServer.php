<?php if (!defined('SHUIPF_VERSION')) exit(); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>系统后台 - {$Config.sitename} - by ShuipFCMS</title>
<Admintemplate file="Admin/Common/Cssjs"/>
<link href="{$config_siteurl}statics/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="J_scroll_fixed">
<div class="wrap J_check_wrap">
  <Admintemplate file="Common/Nav"/>

  <div class="clear"></div>
  <form class="form-horizontal" role="form" method="POST">
    <div class="form-group">
      <label for="open_time" class="col-sm-1 control-label">开服时间</label>
      <div class="col-sm-5">
        <input type="text" name="open_time" class="form-control" value="{$server['open_time']}" />
      </div>
    </div>
    <div class="form-group">
      <label for="game_name" class="col-sm-1 control-label">游戏名称</label>
      <div class="col-sm-5">
        <input type="text" name="game_name" class="form-control" value="{$server['name']}" />
      </div>
    </div>
    <div class="form-group">
      <label for="meta" class="col-sm-1 control-label">其他信息</label>
      <div class="col-sm-5">
        <input type="text" name="meta" class="form-control" value="{$server['meta']}" />
      </div>
    </div>
    <div class="form-group">
      <label for="url" class="col-sm-1 control-label">跳转链接</label>
      <div class="col-sm-5">
        <input type="text" name="url" class="form-control" value="{$server['url']}" />
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-1 col-sm-5">
        <button type="submit" class="btn btn-default">修改</button>
      </div>
      </div>
    </div>
  </form>
</div>
<script src="{$config_siteurl}statics/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script>
$(function(){
  $('form').submit(function(e){
    var openTime = $.trim($('input[name=open_time]').val()),
        gameName = $.trim($('input[name=game_name]').val()),
        meta = $.trim($('input[name=meta]').val()),
        url = $.trim($('input[name=url]').val());

    if(openTime && gameName && meta && url){
      ;
    }else{
      alert("请填写全部信息");
      e.preventDefault();
      return false;
    }
  });
});
</script>
</body>
</html>
