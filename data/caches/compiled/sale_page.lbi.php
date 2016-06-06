<?php if ($this->_var['pager']): ?>
<div class="pagination">
    <p style="float:left">
        <?php if ($this->_var['pager']['page_prev']): ?>
        <a class="pagination-left" href="<?php echo $this->_var['pager']['page_prev']; ?>" >&lt;上一页</a>
        <?php else: ?>
        <a class="no pagination-left">&lt;上一页</a>
        <?php endif; ?>
    </p>
    <p class="p-select">

            <select name="page"  class="form-control" onchange="window.location.href=this.options[this.selectedIndex].value" >
            <?php if ($this->_var['pager']): ?>
            <?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
              <option value="<?php echo $this->_var['item']; ?>" <?php if ($this->_var['pager']['page'] == $this->_var['key']): ?>selected=true<?php endif; ?>><?php echo $this->_var['key']; ?>/<?php echo $this->_var['pager']['page_count']; ?></option>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <?php endif; ?>
            </select>
	</p>
    <p  style="float:right  ">
		<?php if ($this->_var['pager']['page_next']): ?>
              <a  class="pagination-right" href="<?php echo $this->_var['pager']['page_next']; ?>" >下一页&gt;</a>
              <?php else: ?>
              <a class="no pagination-right">下一页&gt;</a> 
              <?php endif; ?>
    </p>
</div>
    <style>
    .pagination{width:100%; overflow: hidden; position: relative; height:3rem; padding: 2rem; box-sizing: border-box;line-height: 0.3rem;}
    .p-select{position: absolute;left: 6rem; right:6rem; text-align: center ;top: 1.2rem;}
    .p-select select{border:none; background:none;}
    </style>
<?php endif; ?>
 