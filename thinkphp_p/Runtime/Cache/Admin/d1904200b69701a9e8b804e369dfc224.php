<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>无标题文档</title><link href="__PUBLIC__/Admin/Images/css1/css.css" rel="stylesheet" type="text/css"></head><SCRIPT language=javascript><!--
var displayBar=true;
function switchBar(obj){
	if (displayBar)
	{
		parent.frame.cols="0,*";
		displayBar=false;
		obj.value="打开左边管理菜单";
	}
	else{
		parent.frame.cols="195,*";
		displayBar=true;
		obj.value="关闭左边管理菜单";
	}
}

function fullmenu(url){
	if (url==null) {url = "admin_left.asp";}
	parent.leftFrame.location = url;
}


<% Dim theInstalledObjects(4)
theInstalledObjects(0) = "Gatherer.VBProcess"
theInstalledObjects(1) = "Scripting.FileSystemObject"
theInstalledObjects(2) = "adodb.connection"

theInstalledObjects(3) = "JMail.SMTPMail"
theInstalledObjects(4) = "CDONTS.NewMail"
Function IsObjInstalled(ByVal strClassString)
	Dim xTestObj,ClsString
	On Error Resume Next
	IsObjInstalled = False
	ClsString = strClassString
	Err = 0
	Set xTestObj = Server.CreateObject(ClsString)
	If Err = 0 Then IsObjInstalled = True
	If Err = -2147352567 Then IsObjInstalled = True
	Set xTestObj = Nothing
	Err = 0
	Exit Function
End Function %>//--></SCRIPT><body><table class="table" cellspacing="1" cellpadding="2" width="99%" align="center" 
border="0"><tbody><tr><th class="bg_tr" align="left" colspan="2" height="25" >系统信息统计
        &nbsp;&nbsp;&nbsp;&nbsp;<input onClick="switchBar(this)" type="button" value="关闭左边管理菜单" name="SubmitBtn" /></th></tr><tr><td class="td_bg" width="50%" height="23">WEB服务器：<span class="TableRow2">Apache2.2</span></td></tr><tr><td class="td_bg" width="50%" height="23">开发语言：<span class="TableRow2">PHP5.3</span></td></tr><tr><td class="td_bg" width="50%" height="23">数据库：<span class="TableRow2">MySql5.5</span></td></tr><tr><td class="td_bg" width="50%" height="23">开发工具：<span class="TableRow2">
        ZendStudio</td></tr><tr><td  colspan="2" class="td_bg">应用平台：Windows/Linux
      </td></tr></tbody></table><table class="table" cellspacing="1" cellpadding="2" width="99%" align="center" 
border="0"><tbody><tr><th class="bg_tr" align="left" colspan="2" height="25" >项目分工介绍
     </th></tr><tr><td class="td_bg" width="50%" height="23">需要分析：<span class="TableRow2"></span></td></tr><tr><td class="td_bg" width="50%" height="23">代码编写：<span class="TableRow2"></span></td></tr><tr><td class="td_bg" width="50%" height="23">程序测试：<span class="TableRow2"></span></td></tr><tr><td class="td_bg" width="50%" height="23">项目布署：<span class="TableRow2"></td></tr><tr><td  colspan="2" class="td_bg">文档编写：
      </td></tr></tbody></table></body></html>