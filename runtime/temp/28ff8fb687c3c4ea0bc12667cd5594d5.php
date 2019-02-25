<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:40:"./application/admin/view/index\main.html";i:1551064375;}*/ ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="/public/static/css/index.css" rel="stylesheet" type="text/css">
<link href="/public/static/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
<link href="/public/static/css/purebox.css" rel="stylesheet" type="text/css">
<link href="/public/static/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/public/static/js/jquery.js"></script>
<script type="text/javascript" src="/public/static/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/public/static/js/jquery.cookie.js"></script>
</head>
<body class="iframe_body">
	<div class="warpper">
    	<div class="title">管理中心</div>
        <div class="content start_content">
            <div class="contentWarp">
                <div class="contentWarp_item clearfix">
                    <div class="section_select">
                        <div class="item item_price">
                            <i class="icon"><img src="/public/static/images/1.png" width="71" height="74"></i>
                            <div class="desc">
                                <div class="tit"><!----><em>¥</em>0.00<!----></div>
                                <span>今日销售总额</span>
                            </div>
                        </div>
                        <div class="item item_order">
                            <i class="icon"><img src="/public/static/images/2.png"></i>
                            <div class="desc">
                                <div class="tit">1</div>
                                <span>今日订单总数</span>
                            </div>
                            <i class="icon"></i>
                        </div>
                        <div class="item item_comment">
                            <i class="icon"><img src="/public/static/images/3.png" width="90" height="86"></i>
                            <div class="desc">
                                <div class="tit">0</div>
                                <span>今日评论数</span>
                            </div>
                        </div>
                        <div class="item item_flow">
                            <i class="icon"><img src="/public/static/images/4.png" width="86"></i>
                            <div class="desc">
                                <div class="tit">15</div>
                                <span>今日访问量</span>
                            </div>
                            <i class="icon"></i>
                        </div>
                    </div>
                    <div class="section user_section">
                        <div class="sc_title">
                            <i class="sc_icon"></i>
                            <h3>个人会员信息</h3>
                            <cite>（单位：个）</cite>
                        </div>
                        <div class="sc_warp">
                            <div class="user_item user_today_new">
                                <div class="num">1</div>
                                <span class="tit">今日新增</span>
                            </div>
                            <div class="user_item user_yest_new">
                                <div class="num">0</div>
                                <span class="tit">昨日新增</span>
                            </div>
                            <div class="user_item user_month_new">
                                <div class="num">1</div>
                                <span class="tit">本月新增</span>
                            </div>
                            <div class="user_item user_total">
                                <div class="num">23</div>
                                <span class="tit">会员总数</span>
                            </div>
                        </div>
                    </div>
                    <div class="section goods_section">
                        <div class="sc_title">
                            <i class="sc_icon"></i>
                            <h3>商品一览</h3>
                            <cite>（单位：件）</cite>
                        </div>
                        <div class="sc_warp">
                            <div class="goods_item">
                                <div class="tit">自营商品</div>
                                <div class="number">
                                    <div class="st">实体：<a href="goods.php?act=list&amp;self=1">303</a></div>
                                    <div class="xn">虚拟：<a href="goods.php?act=list&amp;extension_code=virtual_card&amp;self=1">1</a></div>
                                </div>
                            </div>
                            <div class="goods_item">
                                <div class="tit">商家商品</div>
                                <div class="number">
                                    <div class="st">实体：<a href="goods.php?act=list&amp;merchants=1">168</a></div>
                                    <div class="xn">虚拟：<a href="goods.php?act=list&amp;extension_code=virtual_card&amp;merchants=1">0</a></div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="contentWarp_item clearfix">
                    <div class="section_order_select">
                        <ul>
                            <li>
                                <a href="order.php?act=list&amp;composite_status=0&amp;source=start">
                                    <i class="ice ice_w"></i>
                                    <div class="t">未确认订单</div>
                                    <span class="number">19</span>
                                </a>
                            </li>
                            <li>
                                <a href="order.php?act=list&amp;composite_status=100&amp;source=start">
                                    <i class="ice ice_d"></i>
                                    <div class="t">待支付订单</div>
                                    <span class="number">3</span>
                                </a>
                            </li>
                            <li>
                                <a href="order.php?act=list&amp;composite_status=101&amp;source=start">
                                    <i class="ice ice_n"></i>
                                    <div class="t">待发货订单</div>
                                    <span class="number">4</span>
                                </a>
                            </li>
                            <li>
                                <a href="order.php?act=list&amp;composite_status=102&amp;source=start">
                                    <i class="ice ice_f"></i>
                                    <div class="t">已成交订单数</div>
                                    <span class="number">0</span>
                                </a>
                            </li>
                            <li>
                                <a href="goods_booking.php?act=list_all">
                                    <i class="ice ice_y"></i>
                                    <div class="t">新缺货登记</div>
                                    <span class="number">0</span>
                                </a>
                            </li>
                            <li>
                                <a href="order.php?act=list&amp;composite_status=6&amp;source=start">
                                    <i class="ice ice_q"></i>
                                    <div class="t">部分发货订单</div>
                                    <span class="number">0</span>
                                </a>
                            </li>
                            <li>
                                <a href="user_account.php?act=list&amp;process_type=1&amp;is_paid=0">
                                    <i class="ice ice_b"></i>
                                    <div class="t">用户退款申请</div>
                                    <span class="number">0</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                    <div class="section section_order_count">
                    	<div class="sc_title">
                            <i class="sc_icon"></i>
                            <h3>订单统计</h3>
							<div class="filter_date">
								<a href="javascript:;" onClick="set_statistical_chart(this, 'order', 'week')" class="active">七天</a>
								<a href="javascript:;" onClick="set_statistical_chart(this, 'order', 'month')">一月</a>
								<a href="javascript:;" onClick="set_statistical_chart(this, 'order', 'year')">半年</a>
							</div>
                        </div>
                        <div class="sc_warp">
                        	<div id="order_main" style="height: 274px; -webkit-tap-highlight-color: transparent; user-select: none; background-color: rgba(0, 0, 0, 0);" _echarts_instance_="1482567663284"><div style="position: relative; overflow: hidden; width: 975px; height: 274px;"><div data-zr-dom-id="bg" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 975px; height: 274px; user-select: none;"></div><canvas width="975" height="274" data-zr-dom-id="0" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 975px; height: 274px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="975" height="274" data-zr-dom-id="1" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 975px; height: 274px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="975" height="274" data-zr-dom-id="_zrender_hover_" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 975px; height: 274px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas></div></div>
                        </div>
                    </div>
                    <div class="section section_total_count">
                    	<div class="sc_title">
                            <i class="sc_icon"></i>
                            <h3>销售统计</h3>
							<div class="filter_date">
								<a href="javascript:;" onClick="set_statistical_chart(this, 'sale', 'week')" class="active">七天</a>
								<a href="javascript:;" onClick="set_statistical_chart(this, 'sale', 'month')">一月</a>
								<a href="javascript:;" onClick="set_statistical_chart(this, 'sale', 'year')">半年</a>
							</div>							
                        </div>
                        <div class="sc_warp">
                        	<div id="total_main" style="height: 274px; -webkit-tap-highlight-color: transparent; user-select: none; background-color: rgba(0, 0, 0, 0);" _echarts_instance_="1482567663285"><div style="position: relative; overflow: hidden; width: 975px; height: 274px;"><div data-zr-dom-id="bg" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 975px; height: 274px; user-select: none;"></div><canvas width="975" height="274" data-zr-dom-id="0" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 975px; height: 274px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="975" height="274" data-zr-dom-id="1" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 975px; height: 274px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="975" height="274" data-zr-dom-id="_zrender_hover_" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 975px; height: 274px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas></div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contentWarp bf100">
            	<div class="section col_section">
                	<div class="sc_title">
                        <i class="sc_icon"></i>
                        <h3>控制面板</h3>
                    </div>
                    <div class="sc_warp">
                    	<div class="item_section item_section_frist">
                        	<div class="section_header">商城管理</div>
                            <div class="section_body">
                            	<dl>
                                	<dt>商城首页：</dt>
                                    <dd><a href="" target="_blank">http://demo.tpshop.cn/</a></dd>
                                </dl>
                                <dl>
                                	<dt>平台后台：</dt>
                                    <dd><a href="" target="_blank">http://demo.tpshop.cn/admin</a></dd>
                                </dl>
                                <dl>
                                	<dt>商家后台：</dt>
                                    <dd><a href="" target="_blank">http://demo.tpshop.cn/seller</a></dd>
                                </dl>
                                <dl>
                                	<dt>门店后台：</dt>
                                    <dd><a href="" target="_blank">http://demo.tpshop.cn/stores</a></dd>
                                </dl>
                                <dl>
                                	<dt>WAP首页：</dt>
                                    <dd><a href="" target="_blank">http://demo.tpshop.cn/mobile</a></dd>
                                </dl>
                            </div>
                        </div>
                        <div class="item_section">
                        	<div class="section_header">客户服务</div>
                            <div class="section_body">
                            	<dl>
                                	<dt>客服电话：</dt>
                                    <dd>4001-021-758</dd>
                                </dl>
                                <dl>
                                	<dt>客服 QQ：</dt>
                                    <dd><a href="#" target="_blank">703522188</a></dd>
                                </dl>
                                <dl>
                                	<dt>问答反馈：</dt>
                                    <dd><a href="http://wenda.tpshop.com" target="_blank">http://www.tpshop.cn</a></dd>
                                </dl>
                                <dl>
                                	<dt>官方网站：</dt>
                                    <dd><a href="http://www.tpshop.com" target="_blank">http://www.tpshop.cn</a></dd>
                                </dl>
                                <dl>
                                	<dt>官网：</dt>
                                    <dd><a href="http://www.tpshop.cn" target="_blank">http://www.tpshop.cn</a></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contentWarp">
                <div class="section system_section w190">
                	<div class="system_section_con">
                        <div class="sc_title">
                            <i class="sc_icon"></i>
                            <h3>系统信息</h3>
                            <span class="stop stop_jia" title="展开详情"></span>
                        </div>
                        <div class="sc_warp">
                            <table cellpadding="0" cellspacing="0" class="system_table">
                                <tbody><tr>
                                    <td class="gray_bg">服务器操作系统:</td>
                                    <td>Linux (114.55.34.251)</td>
                                    <td class="gray_bg">Web 服务器:</td>
                                    <td>nginx/1.10.2</td>
                                </tr>
                                <tr>
                                    <td class="gray_bg">PHP 版本:</td>
                                    <td>5.3.29</td>
                                    <td class="gray_bg">MySQL 版本:</td>
                                    <td>5.1.73</td>
                                </tr>
                                <tr>
                                    <td class="gray_bg">安全模式:</td>
                                    <td>否</td>
                                    <td class="gray_bg">安全模式GID:</td>
                                    <td>否</td>
                                </tr>
                                <tr>
                                    <td class="gray_bg">Socket 支持:</td>
                                    <td>是</td>
                                    <td class="gray_bg">时区设置:</td>
                                    <td>Asia/Shanghai</td>
                                </tr>
                                <tr>
                                    <td class="gray_bg">GD 版本:</td>
                                    <td>GD2 ( JPEG GIF PNG)</td>
                                    <td class="gray_bg">Zlib 支持:</td>
                                    <td>是</td>
                                </tr>
                                <tr>
                                    <td class="gray_bg">IP 库版本:</td>
                                    <td>20071024</td>
                                    <td class="gray_bg">文件上传的最大大小:</td>
                                    <td>40M</td>
                                </tr>
                                <tr>
                                    <td class="gray_bg">程序版本:</td>
                                    <td>v1.9.4 RELEASE 20161222</td>
                                    <td class="gray_bg">安装日期:</td>
                                    <td>2016-06-07</td>
                                </tr>
                                <tr>
                                    <td class="gray_bg">编码:</td>
                                    <td>UTF-8</td>
                                    <td class="gray_bg"></td>
                                    <td></td>
                                </tr>
                            </tbody></table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 	<div id="footer" style="position: static; bottom: 0px;">
    <p>版权所有 © 2012-2027 <?php echo (isset($tpshop_config['shop_info_store_name']) && ($tpshop_config['shop_info_store_name'] !== '')?$tpshop_config['shop_info_store_name']:'TPshop商城'); ?>，并保留所有权利。</p>
</div>
<script type="text/javascript">
$(function(){
	$("*[data-toggle='tooltip']").tooltip({
		position: {
			my: "left top+5",
			at: "left bottom"
		}
	});
});
</script>    
<script type="text/javascript" src="/public/static/js/jquery.purebox.js"></script>    
<script type="text/javascript" src="/public/static/js/echart/echarts.min.js"></script>
    <script type="text/javascript">
		set_statistical_chart(".section_order_count .filter_date a:first", "order", "week"); //初始设置
		set_statistical_chart(".section_total_count .filter_date a:first", "sale", "week"); //初始设置
		function set_statistical_chart(obj, type, date)
		{
			var obj = $(obj);
			obj.addClass("active");
			obj.siblings().removeClass("active");
			
			$.ajax({
				type:'get',
				url:'index.php',
				data:'act=set_statistical_chart&type='+type+'&date='+date,
				dataType:'json',
				success:function(data){
					if(type == 'order'){
						var div_id = "order_main";
					}
					if(type == 'sale'){
						var div_id = "total_main";
					}	
					var myChart = echarts.init(document.getElementById(div_id));
					myChart.setOption(data);
				}
			})
		}
		
		var option = {
			title : {
				text: ''
			},
			tooltip : {
				trigger: 'axis',
				backgroundColor:"#f5fdff",
				borderColor:"#8cdbf6",
				borderRadius:"4",
				borderWidth:"1",
				padding:"10",
				textStyle:{
					color:"#272727",
				},
				axisPointer:{
					lineStyle:{
						color:"#6cbd40",
					}
				}
			},
			toolbox: {
				show : true,
				orient:"vertical",
				x:"right",
				y:"60",
				feature : {
					magicType : {show: true, type: ['line', 'bar']},
					saveAsImage : {show: true}
				},
			},
			calculable : true,
			xAxis : [
				{
					type : 'category',
					boundaryGap : false,
					axisLine:{
						lineStyle:{
							color:"#ccc",
							width:"0",
						}
					},
					data : ['07-01','07-02','07-03','07-04','07-05','07-06','07-07']
				}
			],
			yAxis : [
				{
					type : 'value',
					axisLine:{
						lineStyle:{
							color:"#ccc",
							width:"0",
						}
					},
					axisLabel : {
						formatter: '{value}个',
					}
				}
			],
			series : [
				{
					name:'订单个数',
					type:'line',
					itemStyle:{
						normal:{
							color:"#6cbd40",
							lineStyle:{
								color:"#6cbd40",
							}
						}
					},
					data:[0, 5, 8, 3, 10, 15, 2],
					markPoint : {
						itemStyle:{
							normal:{
								color:"#6cbd40"
							}
						},
						data : [
							{type : 'max', name: '最大值'},
							{type : 'min', name: '最小值'}
						]
					}
				}
				
			]
		}
		
		
		//展开收起系统信息
		$.upDown(".stop",".sc_title",".system_section",73);
    </script>
</body>

</html>