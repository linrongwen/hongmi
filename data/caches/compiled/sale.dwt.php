<?php echo $this->fetch('library/sale_header.lbi'); ?>
<style>
	.index_image2,.index_image1{width:7rem; height:7rem;}
	.content{height:auto; padding:2.6rem 1.6rem;  overflow:hidden; position:relative;}
	.content1{padding-top:0;}
	.content1 .index_image1{margin-top:0;}
	.content2{margin-left:1rem; margin-top:.3rem;}
	.content2 li{text-align:left;}
	.content2 .dpxq_p{padding-top:0;}
	.dpxq_h6{position: absolute; right: 2rem;color: #fff;bottom: 8.5rem;font-size: 1.75rem;font-weight: bold;}
</style>
<div id="box">
  <div class="content">
    <div class="content1" style="float:left">
      <div class="index_image1">
      <a href="<?php echo url('sale/shop_config');?>">
              <?php if ($this->_var['info']['avatar']): ?>
              <img class="index_image2" src="<?php echo $this->_var['info']['avatar']; ?>" />
              <?php else: ?>
              <img class="index_image2" src="__TPL__/images/member-photo-img2.jpeg" />
              <?php endif; ?>
              </a>
      </div>
    </div>
    <div class="content2" style="float:left;">
      <ul>
        <li class="dpxq_p"><?php echo sub_str($this->_var['info']['name'],10); ?>&nbsp;<span class="dpgl_content"></span></li>
        <li class="dpxq_h5"><?php echo $this->_var['sale']['shop_name']; ?></li>
		<li class="dpxq_h5"> 开店时间：<?php echo $this->_var['sale']['time']; ?></li>
      </ul>
    </div> 
		<a class="dpxq_h6" href="<?php echo url('sale/shop_config');?>"><span>设置</span></a>
  </div>
  <div class="dpgl_nav">
    <ul>
      <li class="dpgl_nav1">总销售额（元）</li>
      <li class="dpgl_nav2">佣金总额（元）</li>
      <li class="dpgl_nav3">今日收入（元）</li>
    </ul>
    <ul>
      <li class="dpgl_sum1"><?php echo $this->_var['sale_money_order']; ?></li>
      <li class="dpgl_sum2"><?php echo $this->_var['sale_money']; ?></li>
      <li class="dpgl_sum3"><?php echo $this->_var['sale_money_today']; ?></li>
    </ul>
  </div>
  <div class="dpgl_list3">
   <a href="<?php echo url('store/index');?>">
		<div class="dpgl_list" > 
		<i class="iconfont icon-quanbushangpin"></i><span class="dpgl_list2">我的微店</span><i class="iconfont icon-huise icon-jiantou1"></i></div>
		<div class="dpxq_border"></div>
   </a> 
   
   <a href="<?php echo url('sale/my_goods');?>">
        <div class="dpgl_list" >
        <i class="iconfont icon-quanbushangpin"></i><span class="dpgl_list2">我的商品</span><i class="iconfont icon-huise icon-jiantou1"></i> </div>
        <div class="dpxq_border"></div>
   </a>
   
        <div class="dpgl_list" id="dpg1_list1">
        <i class="iconfont icon-fenxiao a_left"></i><a href="javascript:;" class="sale_list" ><span class="dpgl_list2">我的分销</span><i class="iconfont icon-huise icon-jiantou2"></i></a>
        <ul class="index_nav">
          <li class="index_nav1"><a href="<?php echo url('sale/order_list');?>" ><span class="index_list1">本店订单</span></a></li>
          <li class="index_nav1"><a href="<?php echo url('sale/my_shop_info');?>"><span class="index_list1">我的分店</span></a></li>
        </ul>
        </div>
        <div class="dpxq_border"></div>   
		
		<div class="dpgl_list" id="dpg1_list1">
		 <i class="iconfont icon-gonggaofuzhi a_left"></i><a href="javascript:;" class="sale_list"  ><span class="dpgl_list2">我的会员</span><i class="iconfont icon-huise icon-jiantou2"></i></a>
		 
		  <ul class="index_nav">
			<li class="index_nav1" ><a href="<?php echo url('sale/user_list',array('key'=>'wfk'));?>"><span class="index_list1">下单未付款会员</span></a></li>
			<li class="index_nav1"><a href="<?php echo url('sale/user_list',array('key'=>'yfk'));?>" ><span class="index_list1">下单已付款会员</span></a></li>
			<li class="index_nav1"><a href="<?php echo url('sale/user_list',array('key'=>'gz'));?>" ><span class="index_list1">关注公众号会员</span></a></li>
			<li class="index_nav1"><a href="<?php echo url('sale/user_list',array('key'=>'fk'));?>" ><span class="index_list1">访客</span></a></li>
		  </ul>
		</div>
        <div class="dpxq_border"></div>
		
    <div class="dpgl_list" id="dpg1_list1">
     <i class="iconfont icon-jinbichongzhi a_left"></i><a href="javascript:;"  class="sale_list"  mce_href="#"><span class="dpgl_list2">我的佣金</span><i class="iconfont icon-huise icon-jiantou2"></i></a>
      <ul class="index_nav" style="display:none;">
          <li class="index_nav1"><a href="<?php echo url('sale/my_commission');?>" ><span class="index_list1">我的佣金</span></a></li>
        <li class="index_nav1"><a href="<?php echo url('sale/account_detail');?>"><span class="index_list1">佣金明细</span></a></li>
        <li class="index_nav1"><a href="<?php echo url('sale/account_raply');?>" ><span class="index_list1">佣金提现</span></a></li>
      </ul>
    </div>
    <div class="dpxq_border"></div>
	
    <div class="dpgl_list" id="dpg1_list1">
     <i class="iconfont icon-mingpian a_left"></i><a href="javascript:;"  class="sale_list"  mce_href="#"><span class="dpgl_list2">我的名片</span><i class="iconfont icon-huise icon-jiantou2"></i></a>
      <ul class="index_nav" style="display:none;"> 
        <li class="index_nav1"><a href="<?php echo url('sale/spread');?>" ><span class="index_list1">推广二维码</span></a></li>
        <li class="index_nav1"><a href="<?php echo url('sale/store');?>" ><span class="index_list1">店铺二维码</span></a></li>
      </ul>
    </div>
    <div class="dpxq_border"></div>
	
   <a href="<?php echo url('sale/ranking_list');?>">
      <div class="dpgl_list" >
          <i class="iconfont icon-quanbushangpin"></i><span class="dpgl_list2">分销排行榜</span><i class="iconfont icon-huise icon-jiantou1"></i></div>
      <div class="dpxq_border"></div>
   </a> 
    <br>
  </div>
</div>
</body>
</html>