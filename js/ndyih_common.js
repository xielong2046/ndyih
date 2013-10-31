var navTimeListener;
$(document).ready(function(){
  //navigation effect
  $("#navigation a").hover(function()
  {
    var that = $(this);
    var curObj = $("#navigation a.cur");
    var activeObj;
    navTimeListener = setTimeout(function(){
      if($(".navActiveBg").length <=0)
      {
        activeObj = curObj.clone();
        js_activeObj = activeObj.get(0);
        $("#navigation a.cur").css("background","none");
        activeObj.html('').attr("class",'navActiveBg');
        js_activeObj.style.position = 'absolute';
        js_activeObj.style.left     = curObj.hasClass("index") ? "50px" : curObj.position().left +'px';
        js_activeObj.style.top      = '0px';
        js_activeObj.style.zIndex   = '1';
        js_activeObj.style.margin   = '0px';
        activeObj.appendTo("#navigation");
      }
      else
      {
        activeObj = $(".navActiveBg");
      }
      activeObj.animate(
      {
        left: that.hasClass("index") ? "50px" : that.position().left
      },500);
    },300);
  },function()
  {
    clearTimeout(navTimeListener);
  });
  //when mouse move out navigation
  $("#navigation").hover(function()
  { 
  },function()
  {
    var that = $(this);
    var curObj = that.find("a.cur");
    var navActiveBg = $(".navActiveBg");
    if( navActiveBg.length > 0 )
    {
      navActiveBg.animate(
      {
        left: curObj.hasClass("index") ? "50px" : curObj.position().left
      },500);
      clearTimeout(navTimeListener);
    }
  });
  //switch detial type
  $(".switchDetialType a").click(function()
  {
    var that = $(this);
    var typeName = that.attr("rel");
    that.parent().find("a").removeClass("current");
    that.addClass("current");
    that.parent().parent().find(".typeArea").addClass("disNone");
    that.parent().parent().find("." + typeName).removeClass("disNone");
    return false;
  });
  //next good and pre good link hover
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
  //check search form keywords
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