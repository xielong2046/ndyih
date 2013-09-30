<?php if ($this->_var['new_goods']): ?>
<?php if ($this->_var['cat_rec_sign'] != 1): ?>
<div class="box">
<div class="box_2 centerPadd">
  <div class="itemTit New" id="itemNew">
      <?php if ($this->_var['cat_rec'] [ 2 ]): ?>
      <h2><a href="javascript:void(0)" onclick="change_tab_style('itemNew', 'h2', this);get_cat_recommend(2, 0);"><?php echo $this->_var['lang']['all_goods']; ?></a></h2>
      <?php $_from = $this->_var['cat_rec']['2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'rec_data_0_11223600_1379684252');if (count($_from)):
    foreach ($_from AS $this->_var['rec_data_0_11223600_1379684252']):
?>
      <h2 class="h2bg"><a href="javascript:void(0)" onclick="change_tab_style('itemNew', 'h2', this);get_cat_recommend(2, <?php echo $this->_var['rec_data_0_11223600_1379684252']['cat_id']; ?>)"><?php echo $this->_var['rec_data_0_11223600_1379684252']['cat_name']; ?></a></h2>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php endif; ?>
  </div>
  <div id="show_new_area" class="clearfix goodsBox">
  <?php endif; ?>
  <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_11253000_1379684252');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_11253000_1379684252']):
?>
  <div class="goodsItem">
         <span class="news"></span>
           <a href="<?php echo $this->_var['goods_0_11253000_1379684252']['url']; ?>"><img src="<?php echo $this->_var['goods_0_11253000_1379684252']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_11253000_1379684252']['name']); ?>" class="goodsimg" /></a><br />
           <p><a href="<?php echo $this->_var['goods_0_11253000_1379684252']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_11253000_1379684252']['name']); ?>"><?php echo $this->_var['goods_0_11253000_1379684252']['short_style_name']; ?></a></p>
           <font class="f1">
           <?php if ($this->_var['goods_0_11253000_1379684252']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods_0_11253000_1379684252']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods_0_11253000_1379684252']['shop_price']; ?>
          <?php endif; ?>
           </font>
        </div>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <div class="more"><a href="search.php?intro=new"><img src="themes/default/images/more.gif" /></a></div>
  <?php if ($this->_var['cat_rec_sign'] != 1): ?>
  </div>
</div>
</div>
<div class="blank5"></div>
  <?php endif; ?>
<?php endif; ?>
