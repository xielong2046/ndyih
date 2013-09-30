<?php exit;?>a:3:{s:8:"template";a:13:{i:0;s:57:"D:/www/local.ecshop.com/themes/default/group_buy_list.dwt";i:1;s:62:"D:/www/local.ecshop.com/themes/default/library/page_header.lbi";i:2;s:58:"D:/www/local.ecshop.com/themes/default/library/ur_here.lbi";i:3;s:55:"D:/www/local.ecshop.com/themes/default/library/cart.lbi";i:4;s:64:"D:/www/local.ecshop.com/themes/default/library/category_tree.lbi";i:5;s:64:"D:/www/local.ecshop.com/themes/default/library/goods_related.lbi";i:6;s:65:"D:/www/local.ecshop.com/themes/default/library/goods_fittings.lbi";i:7;s:64:"D:/www/local.ecshop.com/themes/default/library/goods_article.lbi";i:8;s:67:"D:/www/local.ecshop.com/themes/default/library/goods_attrlinked.lbi";i:9;s:58:"D:/www/local.ecshop.com/themes/default/library/history.lbi";i:10;s:56:"D:/www/local.ecshop.com/themes/default/library/pages.lbi";i:11;s:55:"D:/www/local.ecshop.com/themes/default/library/help.lbi";i:12;s:62:"D:/www/local.ecshop.com/themes/default/library/page_footer.lbi";}s:7:"expires";i:1380465623;s:8:"maketime";i:1380462023;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>团购商品_ECSHOP演示站 - Powered by ECShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/default/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/common.js"></script></head>
<body>
  <div id="header" class="pngImg">
    <div class="searchArea">
      <form action="#" method="post" id="h_searchForm">
        <input type="text" class="h_searchBox" value=" search">
        <input type="submit" class="h_searchFormSub" value="">
      </form>
    </div>
    <div class="h_logo pngImg"></div>
    <div class="shortcutFun">
            <a href="flow.php">购物车</a> /
            <a href="pick_out.php">选购中心</a> /
            <a href="user.php">登陆</a> /
            <!---<a href="#">登 陆</a
      > / <a href="#">购物车</a> / <a href="#">个人中心</a
      > / <a href="#">订 单</a> / <a href="#">信 息</a> 
      ---->
    </div>
  </div>
  <div id="navigation">
    <a href="#">首 页</a>/
        <a href="category.php?id=3">GSM手机</a>/
        <a href="category.php?id=5">双模手机</a>/
        <a href="category.php?id=6">手机配件</a>/
        <a href="group_buy.php">团购商品</a>/
        <a href="activity.php">优惠活动</a>/
      </div>
<div class="block box">
 <div id="ur_here">
  当前位置: <a href=".">首页</a> <code>&gt;</code> <a href="group_buy.php">团购商品</a> </div>
</div>
<div class="blank"></div>
<div class="block clearfix">
  
  <div class="AreaL">
    
    <script type="text/javascript" src="js/transport.js"></script><div class="cart" id="ECS_CARTINFO">
 554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca</div>
<div class="blank5"></div>
    <div class="box">
 <div class="box_1">
  <div id="category_tree">
         <dl>
     <dt><a href="category.php?id=1">手机类型</a></dt>
          <dd><a href="category.php?id=2">CDMA手机</a></dd>
                 <dd><a href="category.php?id=3">GSM手机</a></dd>
                 <dd><a href="category.php?id=4">3G手机</a></dd>
                 <dd><a href="category.php?id=5">双模手机</a></dd>
                   
       </dl>
         <dl>
     <dt><a href="category.php?id=6">手机配件</a></dt>
          <dd><a href="category.php?id=7">充电器</a></dd>
                 <dd><a href="category.php?id=8">耳机</a></dd>
                 <dd><a href="category.php?id=9">电池</a></dd>
                 <dd><a href="category.php?id=11">读卡器和内存卡</a></dd>
                   
       </dl>
         <dl>
     <dt><a href="category.php?id=12">充值卡</a></dt>
          <dd><a href="category.php?id=13">小灵通/固话充值卡</a></dd>
                 <dd><a href="category.php?id=14">移动手机充值卡</a></dd>
                 <dd><a href="category.php?id=15">联通手机充值卡</a></dd>
                   
       </dl>
     
  </div>
 </div>
</div>
<div class="blank5"></div>
        
            
    
    
    
    <div class="box" id='history_div'>
 <div class="box_1">
  <h3><span>浏览历史</span></h3>
  <div class="boxCenterList clearfix" id='history_list'>
    554fcae493e564ee0dc75bdf2ebf94cahistory|a:1:{s:4:"name";s:7:"history";}554fcae493e564ee0dc75bdf2ebf94ca  </div>
 </div>
</div>
<div class="blank5"></div>
<script type="text/javascript">
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('history_div').style.display='none';
}
else
{
    document.getElementById('history_div').style.display='block';
}
function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '您已清空最近浏览过的商品';
}
</script>  </div>
  
  
  <div class="AreaR">
	 
   
   <div class="blank5"></div>
   <div class="box">
   <div class="box_1">
    <h3><span>团购商品：</span></h3>
    <div class="boxCenterList">
                  <ul class="group clearfix">
      <li style="margin-right:8px; text-align:center;">
      <a href="group_buy.php?act=view&amp;id=8"><img src="images/200905/thumb_img/24_thumb_G_1241971981429.jpg" border="0" alt="P806" style="vertical-align: middle" /></a>
      </li>
      <li style="width:555px; line-height:23px;">
      团购商品：<a href="group_buy.php?act=view&amp;id=8" class="f5">P806</a><br />
      起止时间：2009-05-15 08:00:00 -- 2010-05-26 08:00:00<br />
      价格阶梯：<br />
      <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
       <tr>
          <th width="29%" bgcolor="#FFFFFF">数量</th>
         <th width="71%" bgcolor="#FFFFFF">价格</th>
        </tr>
                <tr>
          <td width="29%" bgcolor="#FFFFFF">5</td>
         <td width="71%" bgcolor="#FFFFFF">￥1910元</td>
        </tr>
                <tr>
          <td width="29%" bgcolor="#FFFFFF">10</td>
         <td width="71%" bgcolor="#FFFFFF">￥1860元</td>
        </tr>
              </table>
      </li>
      </ul>
                </div>
   </div>
  </div>
  <div class="blank5"></div>
  
<form name="selectPageForm" action="/group_buy.php" method="get">
 <div id="pager" class="pagebar">
  <span class="f_l f6" style="margin-right:10px;">总计 <b>1</b>  个记录</span>
      
      </div>
</form>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
  </div>
  
</div>
<div class="blank5"></div>
<div class="block">
  <div class="box">
   <div class="helpTitBg clearfix">
    <dl>
  <dt><a href='article_cat.php?id=5' title="新手上路 ">新手上路 </a></dt>
    <dd><a href="article.php?id=9" title="售后流程">售后流程</a></dd>
    <dd><a href="article.php?id=10" title="购物流程">购物流程</a></dd>
    <dd><a href="article.php?id=11" title="订购方式">订购方式</a></dd>
  </dl>
<dl>
  <dt><a href='article_cat.php?id=6' title="手机常识 ">手机常识 </a></dt>
    <dd><a href="article.php?id=12" title="如何分辨原装电池">如何分辨原装电池</a></dd>
    <dd><a href="article.php?id=13" title="如何分辨水货手机 ">如何分辨水货手机</a></dd>
    <dd><a href="article.php?id=14" title="如何享受全国联保">如何享受全国联保</a></dd>
  </dl>
<dl>
  <dt><a href='article_cat.php?id=7' title="配送与支付 ">配送与支付 </a></dt>
    <dd><a href="article.php?id=15" title="货到付款区域">货到付款区域</a></dd>
    <dd><a href="article.php?id=16" title="配送支付智能查询 ">配送支付智能查询</a></dd>
    <dd><a href="article.php?id=17" title="支付方式说明">支付方式说明</a></dd>
  </dl>
<dl>
  <dt><a href='article_cat.php?id=10' title="会员中心">会员中心</a></dt>
    <dd><a href="article.php?id=18" title="资金管理">资金管理</a></dd>
    <dd><a href="article.php?id=19" title="我的收藏">我的收藏</a></dd>
    <dd><a href="article.php?id=20" title="我的订单">我的订单</a></dd>
  </dl>
<dl>
  <dt><a href='article_cat.php?id=8' title="服务保证 ">服务保证 </a></dt>
    <dd><a href="article.php?id=21" title="退换货原则">退换货原则</a></dd>
    <dd><a href="article.php?id=22" title="售后服务保证 ">售后服务保证</a></dd>
    <dd><a href="article.php?id=23" title="产品质量保证 ">产品质量保证</a></dd>
  </dl>
<dl>
  <dt><a href='article_cat.php?id=9' title="联系我们 ">联系我们 </a></dt>
    <dd><a href="article.php?id=24" title="网站故障报告">网站故障报告</a></dd>
    <dd><a href="article.php?id=25" title="选机咨询 ">选机咨询</a></dd>
    <dd><a href="article.php?id=26" title="投诉与建议 ">投诉与建议</a></dd>
  </dl>
   </div>
  </div>
</div>
<div class="blank"></div>
<div class="blank"></div>
<div id="bottomNav" class="box">
 <div class="box_1">
  <div class="bNavList clearfix">
   <div class="f_l">
              <a href="article.php?id=1" >免责条款</a>
                   -
                      <a href="article.php?id=3" >咨询热点</a>
                   -
                      <a href="article.php?id=4" >联系我们</a>
                   -
                      <a href="article.php?id=5" >公司简介</a>
                   -
                      <a href="wholesale.php" >批发方案</a>
                   -
                      <a href="myship.php" >配送方式</a>
                   </div>
   <div class="f_r">
   <a href="#top"><img src="themes/default/images/bnt_top.gif" /></a> <a href="index.php"><img src="themes/default/images/bnt_home.gif" /></a>
   </div>
  </div>
 </div>
</div>
<div class="blank"></div>
<div id="footer">
 <div class="text">
 &copy; 2005-2013 ECSHOP 版权所有，并保留所有权利。<br />
                                                                                     <br />
    554fcae493e564ee0dc75bdf2ebf94caquery_info|a:1:{s:4:"name";s:10:"query_info";}554fcae493e564ee0dc75bdf2ebf94ca<br />
  <a href="http://www.ecshop.com" target="_blank" style=" font-family:Verdana; font-size:11px;">Powered&nbsp;by&nbsp;<strong><span style="color: #3366FF">ECShop</span>&nbsp;<span style="color: #FF9966">v2.7.3</span></strong></a>&nbsp;<a href="http://www.ecshop.com/license.php?product=ecshop_b2c&url=http%3A%2F%2Flocal.ecshop.com%2F" target="_blank"
>&nbsp;&nbsp;Licensed</a><br />
        <div align="left"  id="rss"><a href="feed.php?type=group_buy"><img src="themes/default/images/xml_rss2.gif" alt="rss" /></a></div>
 </div>
</div>
</body>
</html>
