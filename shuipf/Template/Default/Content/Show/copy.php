<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html><!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link href="favicon.ico" rel="shortcut icon" />
<link rel="canonical" href="{$config_siteurl}" />
<title><if condition=" isset($SEO['title']) && !empty($SEO['title']) ">{$SEO['title']}</if>{$SEO['site_title']}</title>
<meta name="description" content="{$SEO['description']}" />
<meta name="keywords" content="{$SEO['keyword']}" />
<!--[if lt IE 9]><script>/*@cc_on'abbr article aside audio canvas details figcaption figure footer header hgroup mark meter nav output progress section summary time video'.replace(/\w+/g,function(n){document.createElement(n)})@*/</script><![endif]-->
<link rel="stylesheet" href="/statics/css/origin/reset.css"/>
<link rel="stylesheet" href="/statics/css/origin/9dee5408.css"/>
<link rel="stylesheet" href="/statics/css/origin/layer.css"/>
<link href="{$config_siteurl}statics/default/css/images.css" rel="stylesheet" type="text/css" />
<style>
.content p {
    font-size: 15px;
    margin: 8px 0;
}
.pageindex {
    margin-right: 15px;
}
.clear { clear: both; }
.left-bucket {
    float: left;
    width: 70%;
    margin-bottom: 50px;
}
.right-bucket {
    float: right;
    width: 23%;
}
.first-block {
    padding-top: 25px;
}
.last-block {
    margin: 30px 0px;
    margin-bottom: 50px;
}
.right-block {
    width: 270px;
    height: 410px;
    overflow: visible;
}
.last-block a {
    display: block;
    margin: 10px 0;
}
.right-block .tit {
    height: 10px;
    border: none;
}
.title {
    display: block;
    text-align: center;
    font-size: 25px;
    padding: 35px;
}
</style>
</head>
<body >
<noscript>您的浏览器不支持JS，将无法看到通过JS实现的效果</noscript>
<!--V3 star-->
  
<div class="topcont clearfix">
    <div class="frame_content">
        <h1 class="logo"><a title="YouXi.com游戏网" href="/"><img src="/statics/images/origin/t01610996846e7c2341.png" alt="YouXi.com游戏网"></a></h1>
        <div class="menubg">
            <ul class="clearfix">
                <li class="cur"><a href="/" target="_blank"><i></i>首页</a></li>
                <li><a href="#"><i></i>找游戏</a></li>
                <li><a href="#"><i></i>礼包活动</a></li>
                <li><a href="#"><i></i>充值中心</a></li>
                <li><a href="#"><i></i>客服中心</a></li>
                <li><a href="#"><i></i>玩家论坛</a></li>
            </ul>
        </div><!--menubg end-->
        <div class="toolsbar clearfix">
            <div class="tooltop clearfix">
                <a href="javascript:;" class="addFav"><i></i><span>加入收藏</span></a>
                <a href="javascript:;" class="saveDesk setHome"><i></i><span>保存到桌面</span></a>
            </div>
            <div class="toolbot clearfix">
                <div class="nologin" >
                    <a href="#" class="log_btn">已有帐号，登录</a>
                    <a href="#" class="reg_btn">立即注册</a>
                </div>
                <!--
                login state
                <div class="logined" style='display:none'>
                    <div class="msg_box">
                        <a target="_blank" href="http://bbs.youxi.com/home.php?mod=space&do=pm"><i></i>消息</a>
                        <a style="display:none;" href="http://bbs.youxi.com/home.php?mod=space&do=pm" class="total_msg"><span></span></a>
                    </div>
                    <div style="z-index:999" class="user_box" id="change_drop">
                        <span>
                            <i class="user_p"><img width="22" height="22" src=""></i>
                            <a href="http://u.youxi.com/account/index" class="username"></a>
                            <span style="cursor:pointer" class="triangle"></span>
                        </span>
                        <div class="tools_box" style="z-index: 999;" id="t_drop">
                            <ul>
                                <li><a href="http://u.youxi.com/account/index#email" target="_blank"><i class="acc_safe"></i>帐号安全</a></li>
                                <li><a href="http://u.youxi.com/account/index" target="_blank"><i class="per_infro"></i>个人资料</a></li>
                                <li><a href="http://u.youxi.com/account/index#pswd" target="_blank"><i class="mode_txt"></i>修改密码</a></li>
                                <li><a href="/logout.html"><i class="sign_out"></i>退出</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                -->
            </div>
        </div>
    </div>
</div>
<!--V3 end-->
<!-- common header end-->
<div class="wrap">
    <div class="left-bucket">

<h1 class="title">{$title}</h1>
<div class="content">{$content}</div>
<div class="fanye" style="border: 0px solid #ccc;">
  <ul>{$pages}</ul>
</div>
<div class="clear"></div>

    </div>
    <div class="clearfix right-bucket">
        <div class="right-block first-block">
            <h2 class="tit1"><em><b class="c_red">最新</b>开服列表</em></h2>
            <div class="newsevice">
                <ul id="newzoneslist" class="clearfix">
                                        <li><a target="_blank" href="http://www.youxi.com/gamelogin.php?gkey=hazg&skey=1201"><i></i><span class="c_time">09-12 19:40</span><span class="c_game">黑暗之光</span><span class="c_service">双线1201服</span></a></li> 
                                        <li><a target="_blank" href="http://www.youxi.com/gamelogin.php?gkey=hazg&skey=1200"><i></i><span class="c_time">09-12 17:30</span><span class="c_game">黑暗之光</span><span class="c_service">双线1200服</span></a></li> 
                                        <li><a target="_blank" href="http://www.youxi.com/gamelogin.php?gkey=sglw&skey=10"><i></i><span class="c_time">09-12 14:00</span><span class="c_game">真三国乱舞</span><span class="c_service">双线10服</span></a></li> 
                                        <li><a target="_blank" href="http://www.youxi.com/gamelogin.php?gkey=hazg&skey=1199"><i></i><span class="c_time">09-12 15:30</span><span class="c_game">黑暗之光</span><span class="c_service">双线1199区</span></a></li> 
                                        <li><a target="_blank" href="http://www.youxi.com/gamelogin.php?gkey=hazg&skey=1198"><i></i><span class="c_time">09-12 13:30</span><span class="c_game">黑暗之光</span><span class="c_service">双线1198服</span></a></li> 
                                        <li><a target="_blank" href="http://www.youxi.com/gamelogin.php?gkey=hazg&skey=1197"><i></i><span class="c_time">09-12 11:15</span><span class="c_game">黑暗之光</span><span class="c_service">双线1197服</span></a></li> 
                                        <li><a target="_blank" href="http://www.youxi.com/gamelogin.php?gkey=hazg&skey=1196"><i></i><span class="c_time">09-12 07:30</span><span class="c_game">黑暗之光</span><span class="c_service">双线1196区</span></a></li> 
                                    </ul>
            </div>
                                    <p><a target="_blank" href="http://p0.yx-s.com/ybox/YouXiSetup_Beta1.0.3.1010.rar" class="loadimg"><img src="http://p9.yx-s.com/d/inn/b28c6d9e/loadimg.jpg" width="270" height="108"></a></p>
                                </div>

        <div class="right-block">
            <h2 class="tit4"><em>游戏礼包</em><a target="_blank"  href="http://bbs.youxi.com/plugin.php?id=faka_youxi:index">更多礼包&gt;&gt;</a></h2>
            <div class="hotgame gamegift">
                                <ul class="clearfix">
                                        <li><a target="_blank" href="http://bbs.youxi.com/plugin.php?id=faka_youxi:fh&fid=38"><img src="http://p5.yx-s.com/t015320bed813de6942.jpg" alt="奇天"></a></li>
                                                            <li><a target="_blank" href="http://bbs.youxi.com/plugin.php?id=faka_youxi:fh&fid=30"><img src="http://p8.yx-s.com/t01edbcb738d2f3ff2e.jpg" alt="真三国乱舞"></a></li>
                                                            <li><a target="_blank" href="http://bbs.youxi.com/plugin.php?id=faka_youxi:fh&fid=37"><img src="http://p5.yx-s.com/t01654b28410a5eccbc.jpg" alt="黑暗之光炙炎礼包1"></a></li>
                                    </ul>
                            </div>
        </div>

        <div class="right-block last-block">
            <div class="tit">
                <h2>精彩专题</h2>
            </div>
                        <ul class="twlist clearfix">
                                <li>
                <a class="img" target="_blank" href="http://www.youxi.com/zt/hazg.html"><img width="270" height="170" src="http://p6.yx-s.com/t01ea0e8536fefa2ce9.jpg"></a>
                <a class="tt" target="_blank" href="http://www.youxi.com/zt/hazg.html">小伙伴们，提升战斗力，看我的~\(≧▽≦)/~啦啦啦</a>
                </li>
                                                <li>
                <a class="img" target="_blank" href="http://hd.youxi.com/static/event/guoqing.html"><img width="270" height="170" src="http://p7.qhimg.com/t01588fd10b8d32ec5b.jpg"></a>
                <a class="tt" target="_blank" href="http://hd.youxi.com/static/event/guoqing.html">~\(≧▽≦)/~十一去哪儿？YouXi带你泡妹子</a>
                </li>
                            </ul>
                    </div>
    </div>
    <div class="clear"></div>
</div>
<script src="http://s5.yx-s.com/lib/jquery/191.js"></script>
<script src="http://u.youxi.com/js/yuc191.js"></script>
<script src="http://s8.yx-s.com/yxcom/;js;lib;sea.211/9dee5408.js"></script>
<script src="http://s5.yx-s.com/yxcom/;;js;__config__/9dee5408.js"></script>
    <footer>
    <div class="footer">
        <div class="f_logo">
            <a class="f_logoA" href="http://youxi.com" title="游戏网" target="_blank">游戏网</a> 
            <div class="wbwx">
                <a href="javascript:;" class="wx wx_foot">
                    <i class="wxico"></i><p>关注游仔，了解更多YouXi资讯哦！</p>
                    <div class="ewm"><img alt="官方微信" src="/statics/images/origin/wx_ewm.png"></div>
                </a>
                <a href="http://weibo.com/u/2839128783" title="YouXi官方微博" target="_blank" class="wb"><i class="icowb"></i>YouXi官方微博</a>
            </div>
        </div>

        <div class="f_links">
            <a href="http://service.youxi.com" target="_blank">客户服务</a>
            <a href="http://bbs.youxi.com/thread-73767-1.html" target="_blank">商务合作</a>
            <a href="http://bbs.youxi.com/thread-73895-1.html" target="_blank">家长监护</a>
            <a href="http://bbs.youxi.com/thread-73893-1.html" target="_blank">纠纷处理</a>
            <a href="http://bbs.youxi.com/" target="_blank">会员社区</a>
        </div>
                <div class="yq_links">
                    友情链接：
                        <a class="yqlj" href="http://www.15153.com/" target="_blank">15153手机游戏</a>
                        <a class="yqlj" href="http://www.4997.com" target="_blank">4997游戏大全</a>
                        <a class="yqlj" href="http://www.demaxiya.com" target="_blank">lol小智</a>
                        <a class="yqlj" href="http://www.45575.com" target="_blank">双人小游戏大全</a>
                        <a class="yqlj" href="http://www.anfan.com/" target="_blank">安锋网</a>
                        <a class="yqlj" href="http://www.woyewan.com/" target="_blank">我也玩游戏</a>
                        <a class="yqlj" href="http://www.mttang.com" target="_blank">梦天堂手游网</a>
                        <a class="yqlj" href="http://www.juxia.com/" target="_blank">聚侠网</a>
                        <a class="yqlj" href="http://hg.youxi.com/" target="_blank">YouXi_黑暗之光</a>
                        <a class="yqlj" href="http://ertong.86wan.com/" target="_blank">网页游戏大全</a>
                        <a class="yqlj" href="http://kf.40407.com/" target="_blank">网页游戏开服表</a>
                        <a class="yqlj" href="http://xin.07073.com" target="_blank">最新网页游戏</a>
                        <a class="yqlj" href="http://www.benshouji.com" target="_blank">手机游戏</a>
                        <a class="yqlj" href="http://sj.xiaopi.com/" target="_blank">手游网</a>
                        <a class="yqlj" href="http://wan.tgbus.com/" target="_blank">巴士玩网页游戏</a>
                        <a class="yqlj" href="http://www.mofang.com" target="_blank">手机游戏下载</a>
                        <a class="yqlj" href="http://www.7hon.com/" target="_blank">七虹游网页游戏</a>
                        <a class="yqlj" href="http://sj.2144.cn/" target="_blank">手机游戏下载</a>
                        <a class="yqlj" href="http://www.haote.com" target="_blank">好特下载</a>
                        <a class="yqlj" href="http://www.996.com/" target="_blank">手机游戏</a>
                        <a class="yqlj" href="http://www.xiaoshuomi.cc/" target="_blank">小游戏大全</a>
                        <a class="yqlj" href="http://a.bufan.com" target="_blank">安卓游戏大全</a>
                            </div>
        <p>Copyright  2014 YouXi.com 版权所有 趣游时代(北京)科技有限公司 <br /><a href="http://p9.yx-s.com/d/inn/32916a3a/ICP.gif" target="_blank">京ICP证 110756号</a> <a href="http://www.miitbeian.gov.cn" target="_blank">京ICP备11029981号-10</a> <a href="http://p9.yx-s.com/d/inn/0b59e5f1/WWW.gif" target="_blank">京网文[2012]0014-013号</a> 京公网备110107000294</p>
        <p class="p1">抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防受骗上当。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活</p>
    </div>
    </footer>
    <!--footer end-->
</body>
</html>
