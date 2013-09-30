<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,jquery.js,png.js,ndyih_common.js')); ?>
</head>
<body>
<div id="outWrap">
  <?php echo $this->fetch('library/page_header.lbi'); ?>
  <div id="mainGallery" class="pngImg">
    <?php if (count ( $this->_var['hot_goods'] ) > 0): ?>
    <?php echo $this->c_hot_goods(array('par'=>$this->_var['hot_goods'])); ?>
    <ul class="mGallery_f">
       <li class="proImg"><a href="#" target="blank" alt="" title=""
        ><img src="themes/default/images/tmp_1.png" class="pngImg"></a></li>
       <li class="proInfo"><a href="#" class="proName">XXXXX鞋</a><span 
        class="proPrice">￥128</span></li>
    </ul>
    <ul class="mGallery_s">
       <li class="proImg"><a href="#" target="blank" alt="" title=""
        ><img src="themes/default/images/tmp_1.png" class="pngImg"></a></li>
       <li class="proInfo"><a href="#" class="proName">XXXXX鞋</a><span 
        class="proPrice">￥128</span></li>
    </ul>
    <ul class="mGallery_t">
       <li class="proImg"><a href="#" target="blank" alt="" title=""
        ><img src="themes/default/images/tmp_1.png" class="pngImg"></a></li>
       <li class="proInfo"><a href="#" class="proName">XXXXX鞋</a><span 
        class="proPrice">￥128</span></li>
    </ul>
    <?php endif; ?>
  </div>
  <div id="indexContainer">
    
    <div class="proListBox">
      <div class="proType pngImg"></div>
      <ul class="indexPros">
        <li class="product">
          <a href="#" class="proImg"><img src="themes/default/images/tmp_img_03.jpg"></a
          ><a href="#" class="proName">xxx靴子</a
          ><span class="proInfo">￥200</span>
        </li>
        <li class="product">
          <a href="#" class="proImg"><img src="themes/default/images/tmp_img_03.jpg"></a
          ><a href="#" class="proName">xxx靴子</a
          ><span class="proInfo">￥200</span>
        </li>
        <li class="product">
          <a href="#" class="proImg"><img src="themes/default/images/tmp_img_03.jpg"></a
          ><a href="#" class="proName">xxx靴子</a
          ><span class="proInfo">￥200</span>
        </li>
        <li class="product">
          <a href="#" class="proImg"><img src="themes/default/images/tmp_img_03.jpg"></a
          ><a href="#" class="proName">xxx靴子</a
          ><span class="proInfo">￥200</span>
        </li>
        <li class="product">
          <a href="#" class="proImg"><img src="themes/default/images/tmp_img_03.jpg"></a
          ><a href="#" class="proName">xxx靴子</a
          ><span class="proInfo">￥200</span>
        </li>
      </ul>
    </div>
    
    <div class="proListBox">
      <div class="proType pngImg"></div>
      <ul class="indexPros">
        <li class="product">
          <a href="#" class="proImg"><img src="themes/default/images/tmp_img_03.jpg"></a
          ><a href="#" class="proName">xxx靴子</a
          ><span class="proInfo">￥200</span>
        </li>
        <li class="product">
          <a href="#" class="proImg"><img src="themes/default/images/tmp_img_03.jpg"></a
          ><a href="#" class="proName">xxx靴子</a
          ><span class="proInfo">￥200</span>
        </li>
        <li class="product">
          <a href="#" class="proImg"><img src="themes/default/images/tmp_img_03.jpg"></a
          ><a href="#" class="proName">xxx靴子</a
          ><span class="proInfo">￥200</span>
        </li>
        <li class="product">
          <a href="#" class="proImg"><img src="themes/default/images/tmp_img_03.jpg"></a
          ><a href="#" class="proName">xxx靴子</a
          ><span class="proInfo">￥200</span>
        </li>
        <li class="product">
          <a href="#" class="proImg"><img src="themes/default/images/tmp_img_03.jpg"></a
          ><a href="#" class="proName">xxx靴子</a
          ><span class="proInfo">￥200</span>
        </li>
      </ul>
    </div>
    
    <div class="proListBox">
      <div class="proType pngImg"></div>
      <ul class="indexPros">
        <li class="product">
          <a href="#" class="proImg"><img src="themes/default/images/tmp_img_03.jpg"></a
          ><a href="#" class="proName">xxx靴子</a
          ><span class="proInfo">￥200</span>
        </li>
        <li class="product">
          <a href="#" class="proImg"><img src="themes/default/images/tmp_img_03.jpg"></a
          ><a href="#" class="proName">xxx靴子</a
          ><span class="proInfo">￥200</span>
        </li>
        <li class="product">
          <a href="#" class="proImg"><img src="themes/default/images/tmp_img_03.jpg"></a
          ><a href="#" class="proName">xxx靴子</a
          ><span class="proInfo">￥200</span>
        </li>
        <li class="product">
          <a href="#" class="proImg"><img src="themes/default/images/tmp_img_03.jpg"></a
          ><a href="#" class="proName">xxx靴子</a
          ><span class="proInfo">￥200</span>
        </li>
        <li class="product">
          <a href="#" class="proImg"><img src="themes/default/images/tmp_img_03.jpg"></a
          ><a href="#" class="proName">xxx靴子</a
          ><span class="proInfo">￥200</span>
        </li>
      </ul>
    </div>
    
    <div class="proListBox">
      <div class="proType pngImg"></div>
      <ul class="indexPros">
        <li class="product">
          <a href="#" class="proImg"><img src="themes/default/images/tmp_img_03.jpg"></a
          ><a href="#" class="proName">xxx靴子</a
          ><span class="proInfo">￥200</span>
        </li>
        <li class="product">
          <a href="#" class="proImg"><img src="themes/default/images/tmp_img_03.jpg"></a
          ><a href="#" class="proName">xxx靴子</a
          ><span class="proInfo">￥200</span>
        </li>
        <li class="product">
          <a href="#" class="proImg"><img src="themes/default/images/tmp_img_03.jpg"></a
          ><a href="#" class="proName">xxx靴子</a
          ><span class="proInfo">￥200</span>
        </li>
        <li class="product">
          <a href="#" class="proImg"><img src="themes/default/images/tmp_img_03.jpg"></a
          ><a href="#" class="proName">xxx靴子</a
          ><span class="proInfo">￥200</span>
        </li>
        <li class="product">
          <a href="#" class="proImg"><img src="themes/default/images/tmp_img_03.jpg"></a
          ><a href="#" class="proName">xxx靴子</a
          ><span class="proInfo">￥200</span>
        </li>
      </ul>
    </div>
    <div id="containerEnd"><div class="conEndImg"></div></div>
  </div>
  <div id="footer">
    <p>工作时间:上午:8:00~11:30 下午:14:00~18:00 联系电话:18706428773 谢龙 QQ在线</p>
    <p>Copyright© 2013 版权所有  NDYIH.COM 岚岛壹号 ICP备案号:闽ICP备123456</p>
  </div>
</body>
</html>
