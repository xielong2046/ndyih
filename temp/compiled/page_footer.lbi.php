  <div id="footer">
    <p>工作时间:上午:8:00~11:30 下午:14:00~18:00 联系电话:<?php if ($this->_var['service_phone']): ?><?php echo $this->_var['service_phone']; ?> <?php endif; ?> <?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?><?php if ($this->_var['im']): ?><a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $this->_var['im']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:<?php echo $this->_var['im']; ?>:4" height="16" border="0" alt="QQ" /> <?php echo $this->_var['im']; ?></a><?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></p>
    <p>Copyright© 2013 版权所有  NDYIH.COM 岚岛壹号 <?php if ($this->_var['icp_number']): ?><?php echo $this->_var['lang']['icp_number']; ?>:<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a><?php endif; ?></p>
  </div>
<!--[if (IE 6)|(IE 7)]>
<script type="text/javascript">
    DD_belatedPNG.fix('.pngImg');
</script>
<![endif]-->