<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>865171内容管理系统</title>
<link href="__PUBLIC__/Admin/Images/css1/left_css.css" rel="stylesheet"
	type="text/css">
</head>
<SCRIPT language=JavaScript>
	function showsubmenu(sid) {
		whichEl = eval("submenu" + sid);
		if (whichEl.style.display == "none") {
			eval("submenu" + sid + ".style.display=\"\";");
		} else {
			eval("submenu" + sid + ".style.display=\"none\";");
		}
	}
</SCRIPT>
<body bgcolor="16ACFF">
	<table width="98%" border="0" cellpadding="0" cellspacing="0"
		background="__PUBLIC__/Admin/Images/tablemde.jpg">
		<tr>
			<td height="5" background="__PUBLIC__/Admin/Images/tableline_top.jpg"
				bgcolor="#16ACFF"></td>
		</tr>
		<tr>
			<td>
				<TABLE width="97%" border=0 align=right cellPadding=0 cellSpacing=0
					class=leftframetable>
					<TBODY>
						<TR>
							<TD height="25"
								style="background: url(__PUBLIC__/Admin/Images/left_tt.gif) no-repeat">
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<TD width="20"></TD>
										<TD class=STYLE1 style="CURSOR: hand" onclick=showsubmenu(1);
											height=25>分类模块管理</TD>
									</tr>
								</table>
							</TD>
						</TR>
						<TR>
							<TD>
								<TABLE id=submenu1 cellSpacing=0 cellPadding=0 width="100%"
									border=0>
									<TBODY>
										<TR>
											<TD width="2%">
												<IMG src="__PUBLIC__/Admin/Images/closed.gif">
											</TD>
											<TD height=23>
												<A href="__GROUP__/Category/add" target=main>添加分类</A>
											</TD>
										</TR>
										<TR>
											<TD>
												<IMG src="__PUBLIC__/Admin/Images/closed.gif">
											</TD>
											<TD height=23>
												<A href="__GROUP__/Category/admin" target=main>分类管理</A>
											</TD>
										</TR>
									</TBODY>
								</TABLE>
							</TD>
						</TR>
					</TBODY>
				</TABLE>
			</td>
		</tr>

		<tr>
			<td height="5" background="__PUBLIC__/Admin/Images/tableline_bottom.jpg"
				bgcolor="#9BC2ED"></td>
		</tr>
		<tr>
			<td height="5" background="__PUBLIC__/Admin/Images/tableline_top.jpg"
				bgcolor="#9BC2ED"></td>
		</tr>

		<tr>
			<td height="5" background="__PUBLIC__/Admin/Images/tableline_bottom.jpg"
				bgcolor="#9BC2ED"></td>
		</tr>
		<tr>
			<td height="5" background="__PUBLIC__/Admin/Images/tableline_top.jpg"
				bgcolor="#9BC2ED"></td>
		</tr>

		<tr>
			<td>
				<TABLE class=leftframetable cellSpacing=0 cellPadding=0 width="97%"
					align=right border=0>
					<TBODY>
						<TR>
							<TD height="25"
								style="background: url(__PUBLIC__/Admin/Images/left_tt.gif) no-repeat">
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<TD width="20"></TD>
										<TD class=STYLE1 style="CURSOR: hand" onclick=showsubmenu(4);
											height=25>商品模块管理</TD>
									</tr>
								</table>
							</TD>
						</TR>
						<TR>
							<TD>
								<TABLE id=submenu4 cellSpacing=0 cellPadding=0 width="100%"
									border=0>
									<TBODY>

										<TR>
											<TD width="2%">
												<IMG src="__PUBLIC__/Admin/Images/closed.gif">
											</TD>
											<TD height=23>
												<A href="__GROUP__/Goods/add" target=main>商品信息录入</A>
											</TD>
										</TR>
										<TR>
											<TD>
												<IMG src="__PUBLIC__/Admin/Images/closed.gif">
											</TD>
											<TD height=23>
												<A href="__GROUP__/Goods/admin" target=main>商品信息管理</A>
											</TD>
										</TR>

										<TR>
											<TD width="2%">
												<IMG src="__PUBLIC__/Admin/Images/closed.gif">
											</TD>
											<TD height=23>
												<A href="index.php?Admin/Goods/search" target=main>商品信息查询</A>
											</TD>
										</TR>

									</TBODY>
								</TABLE>
							</TD>
						</TR>
					</TBODY>
				</TABLE>
			</td>
		</tr>

		<tr>
			<td height="5" background="__PUBLIC__/Admin/Images/tableline_bottom.jpg"
				bgcolor="#9BC2ED"></td>
		</tr>
		<tr>
			<td height="5" background="__PUBLIC__/Admin/Images/tableline_top.jpg"
				bgcolor="#9BC2ED"></td>
		</tr>
		<tr>
			<td>
				<table class="leftframetable" cellspacing="0" cellpadding="0"
					width="97%" align="right" border="0">
					<tbody>
						<tr>
							<td height="25"
								style="background: url(__PUBLIC__/Admin/Images/left_tt.gif) no-repeat">
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td width="20"></td>
										<td height="25" class="titledaohang" style="CURSOR: hand"
											onClick="showsubmenu(5);">
											<span class="STYLE1">销售业绩查询</span>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td>
								<table id="submenu5" cellspacing="0" cellpadding="0"
									width="100%" border="0">
									<tbody>
										<tr>
											<td width="2%">
												<img src="__PUBLIC__/Admin/Images/closed.gif" />
											</td>
											<td height="23">
												<a href="index.php?Admin/Score/search" target="main">销售业绩查询</a>
											</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr>
			<td height="5" background="__PUBLIC__/Admin/Images/tableline_bottom.jpg"
				bgcolor="#9BC2ED"></td>
		</tr>
		<tr>
			<td height="5" background="__PUBLIC__/Admin/Images/tableline_top.jpg"
				bgcolor="#9BC2ED"></td>
		</tr>
		<tr>
			<td height="8">

				<TABLE class=leftframetable cellSpacing=1 cellPadding=1 width="97%"
					align=right border=0>
					<TBODY>
						<TR>
							<TD height="25"
								style="background: url(__PUBLIC__/Admin/Images/left_tt.gif) no-repeat">
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<TD width="20"></TD>
										<TD class=STYLE1 height=25>系统信息</TD>
									</tr>
								</table>
							</TD>
						</TR>
						<TR>
							<TD height='80' style='line-height: 22px;'>
								<span class="STYLE2">
									版权所有：工贸职业技术学院
									<br>
									设计制作：计算机系
									<br>
									技术支持：传智播客教育
									<br>
									帮助中心：软件系
									<br>
									系统版本：1.0
								</span>
							</TD>
						</TR>
					</TBODY>
				</TABLE>
			</td>
		</tr>
		<tr>
			<td height="5" background="__PUBLIC__/Admin/Images/tableline_bottom.jpg"></td>
		</tr>
	</table>
</body>
</html>