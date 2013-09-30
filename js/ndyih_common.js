$(document).ready(function(){
  $("#searchForm").submit(function(){
    var that = $(this);
    if( that.find("#keywords").val().length >0 )
    {
      return true;
    }
    else
    {
      alert('请输入搜索关键字!');
      that.find("#keywords").focus();
      return false;
    }
  });
});