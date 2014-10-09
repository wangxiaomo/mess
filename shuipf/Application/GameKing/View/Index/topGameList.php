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
        <td>游戏名称</td>
        <td>其他信息</td>
        <td>评分</td>
        <td>入驻玩家</td>
        <td>操作</td>
      </tr>
    </thead>
    <tbody>
      <volist name="top_games" id="game">
      <tr>
        <td class="data">{$game.rank_order}</td>
        <td class="data"><a href="{$game.url}" target="_blank" class="game-link"><img src="/upload/{$game.img}" width="58" height="58">{$game.name}</a></td>
        <td class="data">{$game.meta}</td>
        <td class="data">{$game.rate}</td>
        <td class="data">{$game.user_count}万</td>
        <td class="data">
          <a href="{:U('GameKing/Index/updateTopGame', array('id'=>$game['id']))}">修改</a><br>
          <a href="{:U('GameKing/Index/deleteTopGame', array('id'=>$game['id']))}" class="need_post del-link">删除</a>
        </td>
      </tr>
      </volist>
    </tbody>
  </table>
</div>
<script src="{$config_siteurl}statics/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
