<Admintemplate file="Common/Head"/>
<body class="J_scroll_fixed">
<div class="wrap J_check_wrap">
  <Admintemplate file="Common/Nav"/>
  <div class="clear"></div>
  <form role="form" class="form-horizontal" method="POST">
    <div class="form-group">
      <label for="img" class="col-sm-1 control-label">游戏图标</label>
      <div class="col-sm-5">
        <span class="btn btn-success fileinput-button">
          <i class="glyphicon glyphicon-plus"></i>
          <span>上传图片</span>
          <input type="file" id="fileupload" name="files[]" />
        </span>
      </div>
    </div>
    <div class="form-group">
      <label for="game_name" class="col-sm-1 control-label">游戏名称</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="game_name">
      </div>
    </div>
    <div class="form-group">
      <label for="meta" class="col-sm-1 control-label">其他信息</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="meta">
      </div>
    </div>
    <div class="form-group">
      <label for="user_count" class="col-sm-1 control-label">入驻玩家</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="user_count">
      </div>
    </div>
    <div class="form-group">
      <label for="rate" class="col-sm-1 control-label">评分</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="rate">
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
      <div class="col-sm-offset-1 col-sm-10">
        <button type="submit" class="btn btn-default">新增</button>
      </div>
    </div>
  </form>
</div>

<script>
$(function(){
  $('#fileupload').fileupload({
    url: '/index.php?g=api&m=index&a=upload',
    dataType: 'json',
    acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
    maxFileSize: 5000000, // 5 MB
    done: function (e, data) {
        console.log(data);
    },
  });

  $('form').submit(function(e){
    var openTime = $.trim($('input[name=open_time]').val()),
        gameName = $.trim($('input[name=game_name]').val()),
        meta = $.trim($('input[name=meta]').val()),
        url = $.trim($('input[name=url]').val());

    if(openTime && gameName && meta && url){
        return true;
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
