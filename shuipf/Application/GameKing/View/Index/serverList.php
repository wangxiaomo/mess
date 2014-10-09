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

  <table class="table">
    <thead>
      <tr>
        <td>#</td>
        <td>游戏名称</td>
        <td>其他信息</td>
        <td>开服时间</td>
        <td>操作</td>
      </tr>
    </thead>
    <tbody>
      <volist name="servers" id="server">
      <tr>
        <td class="data">{$server.id}</td>
        <td class="data"><a href="{$server.url}" target="_blank">{$server.name}</a></td>
        <td class="data">{$server.meta}</td>
        <td class="data">{$server.open_time}</td>
        <td class="data">
          <a href="{:U('GameKing/Index/updateServer', array('id'=>$server['id']))}">修改</a><br>
          <a class="need_post del-link" href="{:U('GameKing/Index/deleteServer', array('id'=>$server['id']))}">删除</a>
        </td>
      </tr>
      </volist>
    </tbody>
  </table>
</div>
<script src="{$config_siteurl}statics/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
