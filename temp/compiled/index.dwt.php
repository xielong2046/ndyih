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
    
    <?php if (count ( $this->_var['best_goods'] ) > 0): ?>
    <?php echo $this->c_hot_goods(array('goods'=>$this->_var['best_goods'])); ?>
    <?php endif; ?>
  </div>
  <div id="indexContainer">
    
    <div class="proListBox">
      <div class="proType pngImg"></div>
      <ul class="indexPros">
        <?php $_from = $this->_var['goodtype_1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
        <li class="product">
          <a href="<?php echo $this->_var['goods']['url']; ?>" class="proImg" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"></a
          ><a href="<?php echo $this->_var['goods']['url']; ?>" class="proName" target="_blank"><?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?></a
          ><span class="proInfo">￥<?php echo $this->_var['goods']['shop_price']; ?></span>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </div>
    
    <div class="proListBox">
      <div class="proType pngImg"></div>
      <ul class="indexPros">
        <?php $_from = $this->_var['goodtype_2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
        <li class="product">
          <a href="<?php echo $this->_var['goods']['url']; ?>" class="proImg" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"></a
          ><a href="<?php echo $this->_var['goods']['url']; ?>" class="proName" target="_blank"><?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?></a
          ><span class="proInfo">￥<?php echo $this->_var['goods']['shop_price']; ?></span>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
      </ul>
    </div>
    
    <div class="proListBox">
      <div class="proType pngImg"></div>
      <ul class="indexPros">
        <?php $_from = $this->_var['goodtype_3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
        <li class="product">
          <a href="<?php echo $this->_var['goods']['url']; ?>" class="proImg" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"></a
          ><a href="<?php echo $this->_var['goods']['url']; ?>" class="proName" target="_blank"><?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?></a
          ><span class="proInfo">￥<?php echo $this->_var['goods']['shop_price']; ?></span>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </div>
    
    <div class="proListBox">
      <div class="proType pngImg"></div>
      <ul class="indexPros">
        <?php $_from = $this->_var['goodtype_4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
        <li class="product">
          <a href="<?php echo $this->_var['goods']['url']; ?>" class="proImg" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"></a
          ><a href="<?php echo $this->_var['goods']['url']; ?>" class="proName" target="_blank"><?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?></a
          ><span class="proInfo">￥<?php echo $this->_var['goods']['shop_price']; ?></span>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </div>
    <div id="containerEnd"><div class="conEndImg"></div></div>
  </div>
  <?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
