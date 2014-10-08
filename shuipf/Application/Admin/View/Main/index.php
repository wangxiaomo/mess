<?php if (!defined('SHUIPF_VERSION')) exit(); ?>
<Admintemplate file="Common/Head"/>
<body>
<div class="wrap">
  <div id="home_toptip"></div>
  <h2 class="h_a">系统信息</h2>
  <div class="home_info">
    <ul>
      <volist name="server_info" id="vo">
        <if condition="$key neq '产品名称' and $key neq '用户类型'"> 
        <li> <em>{$key}</em> <span>{$vo}</span> </li>
        </if>
      </volist>
    </ul>
  </div>
  <h2 class="h_a">开发团队</h2>
  <div class="home_info" id="home_devteam">
    <ul>
      <li> <em>负责人</em> <span>王小默</span> </li>
      <li> <em>联系邮箱</em> <span>wxm4ever+gameking@gmail.com</span> </li>
    </ul>
  </div>
</div>
<script src="{$config_siteurl}statics/js/common.js"></script> 
<script src="{$config_siteurl}statics/js/artDialog/artDialog.js"></script> 
<script>
artDialog.notice = function (options) {
    var opt = options || {},
        api, aConfig, hide, wrap, top,
        duration = 800;
        
    var config = {
        id: 'Notice',
        left: '100%',
        top: '100%',
        fixed: true,
        drag: false,
        resize: false,
        follow: null,
        lock: false,
        init: function(here){
            api = this;
            aConfig = api.config;
            wrap = api.DOM.wrap;
            top = parseInt(wrap[0].style.top);
            hide = top + wrap[0].offsetHeight;
            
            wrap.css('top', hide + 'px')
                .animate({top: top + 'px'}, duration, function () {
                    opt.init && opt.init.call(api, here);
                });
        },
        close: function(here){
            wrap.animate({top: hide + 'px'}, duration, function () {
                opt.close && opt.close.call(this, here);
                aConfig.close = $.noop;
                api.close();
            });
            
            return false;
        }
    };	
    
    for (var i in opt) {
        if (config[i] === undefined) config[i] = opt[i];
    };
    
    return artDialog(config);
};
$(function(){
	$.getJSON('{:U("public_server")}',function(data){
		if(data.state != 'fail'){
			return false;
		}
		if(data.latestversion.status){
	        console.log('系统检测到新版本发布，请尽快更新到 '+data.latestversion.version.version + '，以确保网站安全！');
		}
		$('#server_version').html(data.latestversion.version.version);
		$('#server_build').html(data.latestversion.version.build);
		
		if(data.notice.id > 0){
		    console.log(data.notice.content);
		}
	});
});
</script>
</body>
</html>
