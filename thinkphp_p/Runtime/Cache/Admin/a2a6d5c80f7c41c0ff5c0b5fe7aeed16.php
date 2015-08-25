<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>无标题文档</title><link rel="stylesheet" type="text/css" href="/Public/Admin/Images/css1/css.css" /><style>td,th {
	text-align: center
}
</style></head><SCRIPT language=javascript><!--
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
//--></SCRIPT><body><form method='post' action='__URL__/deleteAll'><table class="table" cellspacing="1" cellpadding="2" width="99%"
			align="center" border="0"><tbody><tr><th class="bg_tr" align="left" height="25">序号</th><th class="bg_tr" align="left" height="25">分类名</th><th class="bg_tr" align="left" height="25">分类描述</th><th class="bg_tr" align="left" height="25">上级分类</th><th class="bg_tr" align="left" height="25">修改</th><th class="bg_tr" align="left" height="25"><input type='submit' name='deleteSubmit' value='删除' /></th></tr><?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td class="td_bg" width="5%" height="23" align="center"><?php echo ($i); ?></td><td class="td_bg"><?php echo ($vo["name"]); ?></td><td class="td_bg"><?php echo ($vo["content"]); ?></td><td class="td_bg"><?php echo ($vo["cid"]); ?></td><td class="td_bg"><a href="__URL__/edit/id/<?php echo ($vo["id"]); ?>">修改</a></td><td class="td_bg"><input type='checkbox' value="<?php echo ($vo["id"]); ?>" name='id[]' /></td></tr><?php endforeach; endif; else: echo "" ;endif; ?><tr><td colspan="6">分页</td></tr></tbody></table></form></body></html>