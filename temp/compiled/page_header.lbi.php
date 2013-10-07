  <div id="header" class="pngImg">
    <div class="searchArea">
      <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
        <input type="text" class="h_searchBox" id="keywords" 
        value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>" name="keywords">
        <input type="submit" class="h_searchFormSub" value="">
      </form>
    </div>
    <div class="h_logo pngImg"></div>
    <div class="shortcutFun">
      <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
      <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
      <a href="<?php echo $this->_var['nav']['url']; ?>"> <?php echo $this->_var['nav']['name']; ?> </a> /
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
  </div>
  <div id="navigation">
    <a href="/">首 页</a>/
    <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
    <a href="<?php echo $this->_var['nav']['url']; ?>"><?php echo $this->_var['nav']['name']; ?></a>/
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>