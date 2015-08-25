<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<TITLE>GSM手机_手机类型_ECSHOP演示站 - Powered by ECShop</TITLE>
<META name=GENERATOR content="MSHTML 8.00.7601.17514">
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<META name=Keywords content="">
<META name=Description content="">
<LINK rel="shortcut icon" href="favicon.ico">
<LINK rel=icon type=image/gif href="animated_favicon.gif">
<LINK rel=stylesheet type=text/css href="__PUBLIC__/Home/css/index.css"
	media=screen>
<LINK rel=stylesheet type=text/css href="__PUBLIC__/Home/css/style.css">
<SCRIPT type=text/javascript src="__PUBLIC__/Home/js/common.js"></SCRIPT>
</HEAD>
<BODY>
		<DIV id=header>
		<DIV class=header_top>
			<DIV class=header_top_l></DIV>
			<DIV class=header_top_m>
				<DIV style="FLOAT: left" id=ECS_MEMBERZONE>
					欢迎光临本店
					<A href="index.php?Home/Member/login">会员登录 </A>
					|
					<A href="index.php?Home/Member/login">免费注册 </A>
					<LABEL id=myaccount>
						<A href="#">我的帐户 </A>
					</LABEL>
					<LABEL id=helpcenter>
						<A href="#">帮助中心 </A>
					</LABEL>
				</DIV>
				<DIV style="FLOAT: right">
					<LABEL id=collect>
						<A href="#">加入收藏 </A>
					</LABEL>
					<LABEL id=sethome>
						<A onclick=SetHome(this,window.location) href="#">设为首页 </A>
					</LABEL>
				</DIV>
				<DIV class=clear></DIV>
			</DIV>
			<DIV class=header_top_r></DIV>
			<DIV class=clear></DIV>
		</DIV>
		<DIV class=logo>
			<A href="#">
				<IMG src="__PUBLIC__/Home/images/logo.gif">
			</A>
		</DIV>
		<DIV class=header_intro>
			<IMG src="__PUBLIC__/Home/images/by_top.gif">
		</DIV>
		<DIV class=headerdg>
			<EM>抢购热线（全天24小时） </EM>
			<P>
				<IMG src="__PUBLIC__/Home/images/tel1.gif">
			</P>
		</DIV>
	</DIV>
	<DIV id=nav>
		<DIV class=nav_m>
			<UL>
				<LI>
					<A href="#">首页 </A>
				</LI>
				<LI>
					<A id=navbg href="#">GSM手机 </A>
				</LI>
				<LI>
					<A href="#">双模手机 </A>
				</LI>
				<LI>
					<A href="#">手机配件 </A>
				</LI>
				<LI>
					<A href="#">留言板 </A>
				</LI>
			</UL>
		</DIV>
		<DIV class=navr_recent>
			<SPAN class=navr_recent_l1> </SPAN>
			<A onmousedown=bubble(event); href="javascript:void(0);"
				name=myliulan>
				<A title=查看购物车 href="#">
					<A title=查看购物车 href="#">您的购物车中有 0 件商品，总计金额 ￥0.00元。 </A>
				</A>
			</A>
			<EM>&nbsp;&nbsp;&nbsp;&nbsp; </EM>
		</DIV>
		<DIV class=clear></DIV>
	</DIV>	

	<DIV id=min_div class=nav_min_div>
		<IMG src="__PUBLIC__/Home/images/top_min.jpg">
	</DIV>
	<DIV id=body>
		<DIV class=body_l>
			<DIV class=subsearch>
				<FORM id=searchForm onsubmit="return checkSearchForm()" method=get
					name=searchForm action=search.php>
					<DIV>
						<INPUT id=keyword class=searchmobile type=text name=keywords>
						<BUTTON class=menu_button onclick="return checkSearchForm()"
							name=menu_button type=submit></BUTTON>
					</DIV>
				</FORM>
			</DIV>
			<SCRIPT type=text/javascript>
            /*    < !--
                function checkSearchForm() {
                    if (document.getElementById('keyword').value) {
                        document.searchForm.submit();
                        return true;
                    } else {
                        alert("请输入搜索关键词！");
                        return false;
                    }
                }-->  */
            </SCRIPT>

			<DIV class=subnav_header></DIV>
			<DIV class=subnav>
			{foreach from=$data item='value'}
			{if $value['level']==1}
				<DIV>
					<SPAN class=left>
						<?php echo ($value['name']); ?>
					</SPAN>
					<SPAN class="right subnav_right">
						<IMG id=categorie_ico1 border=0 src="__PUBLIC__/Home/images/line.gif">
					</SPAN>
				</DIV>
			{/if}

				<UL style="DISPLAY: block" id=m1>
					{if $value['level']==2}
					<LI>
						&nbsp;
						<A href="#">
							<?php echo ($value['name']); ?>
						</A>
					</LI>
					{/if}
				</UL>

			{/foreach}
			</DIV>
			<DIV class=subinfo_header>
				<DIV class=subinfo_header_left_top10>
					&nbsp;
					<A href="#"></A>
				</DIV>
			</DIV>
			<DIV class=subinfo_body_top10>
				<UL>
					<LI>
						<DIV class=subinfo_body_top10_l>
							<A href="#">
								<IMG class=samllimg alt=""
									src="__PUBLIC__/Home/images/200905/thumb_img/3_thumb_G_1241422082679.jpg">
							</A>
						</DIV>
						<DIV class=subinfo_body_top10_r>
							<P class=subinfo_body_top10_r_1>
								<A title="" href="#">诺基亚原装58... </A>
							</P>
							<P class=subinfo_body_top10_r_2>
								<A href="#"></A>
							</P>
							<P class=subinfo_body_top10_r_3>￥68元</P>
						</DIV>
						<DIV class=clear></DIV>
					</LI>
					<LI>
						<DIV class=subinfo_body_top10_l>
							<A href="#">
								<IMG class=samllimg alt=""
									src="__PUBLIC__/Home/images/200905/thumb_img/24_thumb_G_1241971981429.jpg">
							</A>
						</DIV>
						<DIV class=subinfo_body_top10_r>
							<P class=subinfo_body_top10_r_1>
								<A title="" href="#">P806 </A>
							</P>
							<P class=subinfo_body_top10_r_2>
								<A href="#"></A>
							</P>
							<P class=subinfo_body_top10_r_3>￥2000元</P>
						</DIV>
						<DIV class=clear></DIV>
					</LI>
					<LI>
						<DIV class=subinfo_body_top10_l>
							<A href="#">
								<IMG class=samllimg alt=""
									src="__PUBLIC__/Home/images/200905/thumb_img/12_thumb_G_1241965978410.jpg">
							</A>
						</DIV>
						<DIV class=subinfo_body_top10_r>
							<P class=subinfo_body_top10_r_1>
								<A title="" href="#">摩托罗拉A81... </A>
							</P>
							<P class=subinfo_body_top10_r_2>
								<A href="#"></A>
							</P>
							<P class=subinfo_body_top10_r_3>￥983元</P>
						</DIV>
						<DIV class=clear></DIV>
					</LI>
					<LI>
						<DIV class=subinfo_body_top10_l>
							<A href="#">
								<IMG class=samllimg alt=""
									src="__PUBLIC__/Home/images/200905/thumb_img/9_thumb_G_1241511871555.jpg">
							</A>
						</DIV>
						<DIV class=subinfo_body_top10_r>
							<P class=subinfo_body_top10_r_1>
								<A title="" href="#">诺基亚E66 </A>
							</P>
							<P class=subinfo_body_top10_r_2>
								<A href="#"></A>
							</P>
							<P class=subinfo_body_top10_r_3>￥2298元</P>
						</DIV>
						<DIV class=clear></DIV>
					</LI>
					<LI>
						<DIV class=subinfo_body_top10_l>
							<A href="#">
								<IMG class=samllimg alt=""
									src="__PUBLIC__/Home/images/200905/thumb_img/22_thumb_G_1241971076803.jpg">
							</A>
						</DIV>
						<DIV class=subinfo_body_top10_r>
							<P class=subinfo_body_top10_r_1>
								<A title="" href="#">多普达Touc... </A>
							</P>
							<P class=subinfo_body_top10_r_2>
								<A href="#"></A>
							</P>
							<P class=subinfo_body_top10_r_3>￥5999元</P>
						</DIV>
						<DIV class=clear></DIV>
					</LI>
					<LI>
						<DIV class=subinfo_body_top10_l>
							<A href="#">
								<IMG class=samllimg alt=""
									src="__PUBLIC__/Home/images/200905/thumb_img/20_thumb_G_1242106490058.jpg">
							</A>
						</DIV>
						<DIV class=subinfo_body_top10_r>
							<P class=subinfo_body_top10_r_1>
								<A title="" href="#">三星BC01 </A>
							</P>
							<P class=subinfo_body_top10_r_2>
								<A href="#"></A>
							</P>
							<P class=subinfo_body_top10_r_3>￥280元</P>
						</DIV>
						<DIV class=clear></DIV>
					</LI>
					<LI>
						<DIV class=subinfo_body_top10_l>
							<A href="#">
								<IMG class=samllimg alt=""
									src="__PUBLIC__/Home/images/200905/thumb_img/8_thumb_G_1241425513488.jpg">
							</A>
						</DIV>
						<DIV class=subinfo_body_top10_r>
							<P class=subinfo_body_top10_r_1>
								<A title="" href="#">飞利浦9@9v </A>
							</P>
							<P class=subinfo_body_top10_r_2>
								<A href="#"></A>
							</P>
							<P class=subinfo_body_top10_r_3>￥399元</P>
						</DIV>
						<DIV class=clear></DIV>
					</LI>
				</UL>
			</DIV>
			<DIV class=subinfo_footer></DIV>
		</DIV>
		<DIV class=body_brand_r>
			<DIV class=menu>
				当前位置:
				<SPAN>
					<A href="#">首页 </A>
					<CODE>&gt; </CODE>
					<A href="#">手机类型 </A>
					<CODE>&gt; </CODE>
					<A href="#">GSM手机 </A>
				</SPAN>
			</DIV>
			<DIV class=type_nav>
				<UL>
					<LI class=type_nav_li1 onclick="location.href='category.php?id=19'">
						<A href="#">音乐手机 </A>
					</LI>
					<LI class=type_nav_li2 onclick="location.href='category.php?id=20'">
						<A href="#">GPS导航手机 </A>
					</LI>
					<LI class=type_nav_li3 onclick="location.href='category.php?id=5'">
						<A href="#">超长待机 </A>
					</LI>
					<LI class=type_nav_li4 onclick="location.href='category.php?id=2'">
						<A href="#">电视手机 </A>
					</LI>
					<LI class=type_nav_li5 onclick="location.href='category.php?id=18'">
						<A href="#">拍照手机 </A>
					</LI>
					<LI class=type_nav_li6 onclick="location.href='category.php?id=16'">
						<A href="#">双卡手机 </A>
					</LI>
					<LI class=type_nav_li7 onclick="location.href='category.php?id=4'">
						<A href="#">大屏手写手机 </A>
					</LI>
					<LI class=type_nav_li8 onclick="location.href='category.php?id=3'">
						<A href="#">智能手机 </A>
					</LI>
					<LI class=type_nav_li9 onclick="location.href='category.php?id=17'">
						<A href="#">游戏手机 </A>
					</LI>
				</UL>
				<DIV class=clear></DIV>
			</DIV>
			<DIV class=pagelist>
				<FORM class=sort method=post name=listform action='index.php'>
					显示方式：
					<SELECT
						style="BORDER-BOTTOM: #ccc 1px solid; BORDER-LEFT: #ccc 1px solid; BORDER-TOP: #ccc 1px solid; BORDER-RIGHT: #ccc 1px solid"
						name='orderField'>
						<OPTION selected value=ctime>按上架时间排序</OPTION>
						<OPTION value=price>按价格排序</OPTION>
					</SELECT>
					<SELECT
						style="BORDER-BOTTOM: #ccc 1px solid; BORDER-LEFT: #ccc 1px solid; BORDER-TOP: #ccc 1px solid; BORDER-RIGHT: #ccc 1px solid"
						name='orderType'>
						<OPTION selected value=desc>倒序</OPTION>
						<OPTION value=asc>正序</OPTION>
					</SELECT>
					<INPUT value=Go type=submit name=submit>
					<INPUT value=3 type=hidden name=category>
					<INPUT id=display value=grid type=hidden name=display>
					<INPUT value=0 type=hidden name=brand>
					<INPUT value=0 type=hidden name=price_min>
					<INPUT value=0 type=hidden name=price_max>
					<INPUT value=0 type=hidden name=filter_attr>
					<INPUT value=1 type=hidden name=page>
				</FORM>
			</DIV>
			<DIV class=page_header>
				<SCRIPT language=JavaScript type=Text/Javascript>
                    < !--
                    function selectPage(sel) {
                        sel.form.submit();
                    }
                    //-->
                    
                </SCRIPT>
			</DIV>
			<UL class=productlist>
			{foreach from=$goodsData item='value'}
				<LI>
					<A href="index.php?Home/Goods/show/id/<?php echo ($value['id']); ?>" target='_blank'>
						<IMG alt="<?php echo ($value['name']); ?>" width='100' height='100'
							src="__PUBLIC__/Upload/Goods/<?php echo ($value['photo']); ?>">
					</A>
					<P class=pname>
						<A title=诺基亚N85 href="#"><?php echo ($value['name']); ?></A>
					</P>
					<P class=price>￥<?php echo ($value['price']); ?>元</P>
				</LI>
			{/foreach}
				
			</UL>
			<DIV class=page_footer>
				<FORM method=get name=selectPageForm action=/shouji/category.php>
					<DIV id=page class=pagebar>
						<SPAN style="MARGIN-RIGHT: 10px" class="f_l f6">
							<?php echo ($pager); ?>
						</SPAN>
					</DIV>
				</FORM>
				<SCRIPT type=text/Javascript>
                    function selectPage(sel) {
                        sel.form.submit();
                    }
                </SCRIPT>

				<DIV class=clear></DIV>
			</DIV>
		</DIV>
		<DIV class=clear></DIV>
	</DIV>
	<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<DIV class=footert>
		<DIV class=footertl>
			<DIV class=footert_1>
				<IMG src="__PUBLIC__/Home/images/logo21.gif">
			</DIV>
			<DIV class=footert_2>
				抢购热线（9:00-18:00）
				<P>
					<IMG src="__PUBLIC__/Home/images/tel2.gif">
				</P>
			</DIV>
		</DIV>
		<DIV class=footertr>
			<DIV class=footertr_t>好趣购是货真价实的网络直销商城，好趣购所售手机全部都是厂家直接供货，没有任何中间批发
				和分销环节，让您以最低价格，购买到性价比最高的手机。</DIV>
			<DIV class=footertr_b>
				<DL class=footertr_d1>
					<DT></DT>
					<DD>会员积分计划</DD>
				</DL>
				<DL>
					<DT></DT>
					<DD>免费订购热线</DD>
				</DL>
				<DL class=footertr_d3>
					<DT></DT>
					<DD>3000城市送货上门</DD>
				</DL>
				<DL class=footertr_d4>
					<DT></DT>
					<DD>品牌厂商直接供货</DD>
				</DL>
				<DL class=footertr_d5>
					<DT></DT>
					<DD>中国人保承保</DD>
				</DL>
			</DIV>
			<DIV class=clear></DIV>
		</DIV>
		<DIV class=clear></DIV>
	</DIV>
	<DIV class=footer>
		<DIV class=foottop>
			<DL>
				<DT>新手上路</DT>
				<DD>
					<A title=售后流程 href="#">售后流程 </A>
				</DD>
				<DD>
					<A title=购物流程 href="#">购物流程 </A>
				</DD>
				<DD>
					<A title=订购方式 href="#">订购方式 </A>
				</DD>
			</DL>
			<DL>
				<DT>手机常识</DT>
				<DD>
					<A title=如何分辨原装电池 href="#">如何分辨原装电池 </A>
				</DD>
				<DD>
					<A title="如何分辨水货手机 " href="#">如何分辨水货手机 </A>
				</DD>
				<DD>
					<A title=如何享受全国联保 href="#">如何享受全国联保 </A>
				</DD>
			</DL>
			<DL>
				<DT>配送与支付</DT>
				<DD>
					<A title=货到付款区域 href="#">货到付款区域 </A>
				</DD>
				<DD>
					<A title="配送支付智能查询 " href="#">配送支付智能查询 </A>
				</DD>
				<DD>
					<A title=支付方式说明 href="#">支付方式说明 </A>
				</DD>
			</DL>
			<DL>
				<DT>会员中心</DT>
				<DD>
					<A title=资金管理 href="#">资金管理 </A>
				</DD>
				<DD>
					<A title=我的收藏 href="#">我的收藏 </A>
				</DD>
				<DD>
					<A title=我的订单 href="#">我的订单 </A>
				</DD>
			</DL>
			<DL>
				<DT>服务保证</DT>
				<DD>
					<A title=退换货原则 href="#">退换货原则 </A>
				</DD>
				<DD>
					<A title="售后服务保证 " href="#">售后服务保证 </A>
				</DD>
				<DD>
					<A title="产品质量保证 " href="#">产品质量保证 </A>
				</DD>
			</DL>
			<DL>
				<DT>联系我们</DT>
				<DD>
					<A title=网站故障报告 href="#">网站故障报告 </A>
				</DD>
				<DD>
					<A title="选机咨询 " href="#">选机咨询 </A>
				</DD>
				<DD>
					<A title="投诉与建议 " href="#">投诉与建议 </A>
				</DD>
			</DL>
			<DIV class=foottop_r onclick="window.location.href = '#'"></DIV>
			<DIV class=clear></DIV>
		</DIV>
		<DIV class=footbot>
			<A href="#">免责条款 </A>
			|
			<A href="#">隐私保护 </A>
			|
			<A href="#">咨询热点 </A>
			|
			<A href="#">联系我们 </A>
			|
			<A href="#">公司简介 </A>
			|
			<A href="#">批发方案 </A>
			|
			<A href="#">配送方式 </A>
			<P>&copy; 2005-2014 ECSHOP 版权所有，并保留所有权利。</P>
			<DIV class=clear></DIV>
		</DIV>
		<DIV class=clear></DIV>
	</DIV>
</body>
</html>
</BODY>
</HTML>