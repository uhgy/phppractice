<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="/Public/Admin/Images/css1/css.css" />
</head>
<SCRIPT language=javascript>
<!--
	var displayBar = true;
	function switchBar(obj) {
		if (displayBar) {
			parent.frame.cols = "0,*";
			displayBar = false;
			obj.value = "打开左边管理菜单";
		} else {
			parent.frame.cols = "195,*";
			displayBar = true;
			obj.value = "关闭左边管理菜单";
		}
	}

	function fullmenu(url) {
		if (url == null) {
			url = "admin_left.asp";
		}
		parent.leftFrame.location = url;
	}
//-->
</SCRIPT>



<body>
	<form method="POST" action="__URL__/editOk">
		<table class="table" cellspacing="1" cellpadding="2" width="99%"
			align="center" border="0">
			<tbody>
				<tr>
					<th class="bg_tr" align="left" colspan="2" height="25">修改分类信息</th>
				</tr>
				<tr>
					<td class="td_bg" width="17%" height="23" align="right">所属分类</td>
					<td width="83%" class="td_bg">
						<select name='cate_cid'>
							<option value='0'>一级分类</option>
							<?php if(is_array($data)): foreach($data as $key=>$vo): if($row['cid'] == $vo['id']): ?><option value='<?php echo ($vo["id"]); ?>' selected><?php echo ($vo["name"]); ?></option>
							<?php else: ?>
							<option value='<?php echo ($vo["id"]); ?>'><?php echo ($vo["name"]); ?></option><?php endif; endforeach; endif; ?>
						</select>
						<input type='hidden' name='cate_id' value='<?php echo ($row["id"]); ?>' />

					</td>
				</tr>
				<tr>
					<td class="td_bg" width="17%" height="23" align="right">分类名</td>
					<td width="83%" class="td_bg">
						<input type="text" name="cate_name" value="<?php echo ($row["name"]); ?>">
					</td>
				</tr>
				<tr>
					<td class="td_bg" width="17%" height="23" align="right">分类描述</td>
					<td width="83%" class="td_bg">
						<textarea name='cate_content' rows='4' cols='80'><?php echo ($row["content"]); ?>
      	</textarea>
					</td>
				</tr>
				<tr>
					<td class="td_bg" width="17%" height="23"></td>
					<td class="td_bg" width="83%">
						<input type="submit" name="submit" value="修改" />
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>