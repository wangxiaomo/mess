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
        <td>排序</td>
        <td>厂商名称</td>
        <td>link1</td>
        <td>link2</td>
        <td>操作</td>
      </tr>
    </thead>
    <tbody>
      <volist name="factories" id="factory">
      <tr>
        <td class="data">{$factory.rank_order}</td>
        <td class="data"><a href="{$factory.url}" target="_blank" class="game-link"><img src="/upload/{$factory.img}" width="58" height="58">{$factory.name}</a></td>
        <td class="data"><a href="{$factory.link2}" target="_blank">{$factory.link1}</a></td>
        <td class="data"><a href="{$factory.link2}" target="_blank">{$factory.link2}</a></td>
        <td class="data">
          <a href="{:U('GameKing/Index/updateFactory', array('id'=>$factory['id']))}">修改</a><br>
          <a href="{:U('GameKing/Index/deleteFactory', array('id'=>$factory['id']))}" class="need_post del-link">删除</a>
        </td>
      </tr>
      </volist>
    </tbody>
  </table>
</div>
<script src="{$config_siteurl}statics/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
