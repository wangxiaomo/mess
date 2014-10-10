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
        <img id="img-prev" src="/upload/54360cd25046fsecondarytile.png" width="58" height="58" />
      </div>
    </div>
    <div class="form-group">
      <label for="img" class="col-sm-1 control-label">厂商图标</label>
      <div class="col-sm-5">
        <span class="btn btn-success fileinput-button">
          <i class="glyphicon glyphicon-plus"></i>
          <span>上传图片</span>
          <input type="file" id="fileupload" name="files[]" accept="image/*" />
          <input type="hidden" name="img" value="" />
        </span>
      </div>
    </div>
    <div class="form-group">
      <label for="factory_name" class="col-sm-1 control-label">厂商名称</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="factory_name">
      </div>
    </div>
    <div class="form-group">
      <label for="url" class="col-sm-1 control-label">跳转链接</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="url">
      </div>
    </div>
    <div class="form-group">
      <label for="order" class="col-sm-1 control-label">排序</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="order">
      </div>
    </div>
    <div class="form-group">
      <label for="link1" class="col-sm-1 control-label">link1</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="link1">
      </div>
    </div>
    <div class="form-group">
      <label for="link2" class="col-sm-1 control-label">link2</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="link2">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-1 col-sm-10">
        <button type="submit" class="btn btn-default">新增</button>
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
    var factoryName = $.trim($('input[name=factory_name]').val()),
        img = $.trim($('input[name=img]').val()),
        url = $.trim($('input[name=url]').val());

    if(factoryName && img && url){
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
