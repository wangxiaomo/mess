<Admintemplate file="Common/Head"/>
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
        <td>{$server.id}</td>
        <td><a href="{$server.url}" target="_blank">{$server.name}</a></td>
        <td>{$server.meta}</td>
        <td>{$server.open_time}</td>
        <td><a class="need_post del-link" href="{:U('GameKing/Index/deleteServer', array('id'=>$server['id']))}">删除</a></td>
      </tr>
      </volist>
    </tbody>
  </table>
</div>
</body>
</html>
