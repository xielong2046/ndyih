$(document).ready(function(){
  $(".preNextGood a").hover(function()
  {
    var that = $(this);
    if( that.hasClass("preGood") )
    {
      that.removeClass("preGood").addClass("preGoodHover");
    }
    else if( that.hasClass("nextGood") )
    {
      that.removeClass("nextGood").addClass("nextGoodHover");
    }
  },function()
  {
    var that = $(this);
    if( that.hasClass("preGoodHover") )
    {
      that.removeClass("preGoodHover").addClass("preGood");
    }
    else if( that.hasClass("nextGoodHover") )
    {
      that.removeClass("nextGoodHover").addClass("nextGood");
    }
  });

  /**
   * 搜索表单验证
   */
  $("#searchForm").submit(function()
  {
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