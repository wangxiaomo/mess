$(function(){
  $('.need_post').on('click', function(e){
    e.preventDefault();

    var url = $(this).attr('href'),
        tr = $(this).closest('tr');
    if(!url) return;

    if($(this).hasClass('del-link')){
      if(confirm("确认删除?") === true){
        $.post(url, {}, function(d){
          var data = $.parseJSON(d);
          if(data.r){
            alert("删除成功");
            tr.fadeOut(300);
          }else{
            alert(data.msg);
          }
        });
      }
    }
  });
});
