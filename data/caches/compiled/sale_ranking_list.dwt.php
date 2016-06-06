<?php echo $this->fetch('library/sale_header.lbi'); ?>
<div>
          	<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'li');if (count($_from)):
    foreach ($_from AS $this->_var['li']):
?>
				<div class="dpgl_list" style="overflow:hidden"> 
				   <span class="bdda2_list2">
						<?php if ($this->_var['li']['user_img']): ?>
						<img src="<?php echo $this->_var['li']['user_img']; ?>" style="width:5rem; margin-right:1rem; float:left;">
						<?php else: ?>
						<img src="__TPL__/images/member-photo-img2.jpeg" style="width:5rem; margin-right:1rem; float:left;">
						<?php endif; ?>
				   </span>				
				   <span class="bdda2_list2" style="top:0rem"><?php echo $this->_var['li']['shop_name']; ?></span>
				   <span class="bdda2_list">总销售佣金：<?php echo $this->_var['li']['sum_money']; ?></span>
			    </div>

          	  <div class="dpxq_border" ></div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>     
    </div>
        <?php echo $this->fetch('library/sale_page.lbi'); ?>
</body>
</html>