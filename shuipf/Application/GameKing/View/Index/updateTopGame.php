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
  <form role="form" class="form-horizontal" method="POST">
    <div class="form-group">
      <label class="col-sm-1 control-label">图标预览</label>
      <div class="col-sm-5">
        <img id="img-prev" src="/upload/{$game.img}" width="58" height="58" />
      </div>
    </div>
    <div class="form-group">
      <label for="img" class="col-sm-1 control-label">游戏图标</label>
      <div class="col-sm-5">
        <span class="btn btn-success fileinput-button">
          <i class="glyphicon glyphicon-plus"></i>
          <span>上传图片</span>
          <input type="file" id="fileupload" name="files[]" accept="image/*" />
          <input type="hidden" name="img" value="{$game.img}" />
        </span>
      </div>
    </div>
    <div class="form-group">
      <label for="game_name" class="col-sm-1 control-label">游戏名称</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="game_name" value="{$game.name}" >
      </div>
    </div>
    <div class="form-group">
      <label for="meta" class="col-sm-1 control-label">其他信息</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="meta" value="{$game.meta}" >
      </div>
    </div>
    <div class="form-group">
      <label for="user_count" class="col-sm-1 control-label">入驻玩家</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="user_count" value="{$game.user_count}" >
      </div>
    </div>
    <div class="form-group">
      <label for="rate" class="col-sm-1 control-label">评分</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="rate" value="{$game.rate}" >
      </div>
    </div>
    <div class="form-group">
      <label for="url" class="col-sm-1 control-label">跳转链接</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="url" value="{$game.url}" >
      </div>
    </div>
    <div class="form-group">
      <label for="order" class="col-sm-1 control-label">排序</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="order" value="{$game.rank_order}" >
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-1 col-sm-10">
        <button type="submit" class="btn btn-default">修改</button>
      </div>
    </div>
  </form>
</div>

<script src="{$config_siteurl}statics/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script>
$(function(){
  $('#fileupload').fileupload({
    url: '/index.php?g=api&m=index&a=upload',
    dataType: 'json',
    acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
    maxFileSize: 5000000, // 5 MB
    done: function (e, data) {
        var files = data.result.files;
        if(files.length){
            var file = files[0];
            if(file.error){
                alert(file.error);
                return;
            }
            $('input[name=img]').val(file.name);
            $('#img-prev').attr('src', '/upload/' + file.name);
        }
    },
  });

  $('form').submit(function(e){
    var gameName = $.trim($('input[name=game_name]').val()),
        meta = $.trim($('input[name=meta]').val()),
        userCount = parseInt($('input[name=user_count]').val()),
        rate = parseInt($('input[name=rate]').val()),
        order = parseInt($('input[name=order]').val()),
        img = $.trim($('input[name=img]').val()),
        url = $.trim($('input[name=url]').val());

    if(gameName && meta && userCount && url && rate && order && img){
        if(_.isNumber(userCount) && _.isNumber(rate) && _.isNumber(order)){
            return true;
        }else{
            alert("入驻玩家数量、评分、排序必须为数字!");
            e.preventDefault();
            return false;
        }
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
