<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="__PUBLIC__/Admin/Images/css1/css.css" rel="stylesheet" type="text/css">
</head>


<body>

<form method="POST" action="__URL__/editOk">
<table class="table" cellspacing="1" cellpadding="2" width="99%" align="center" 
border="0">
  <tbody>
    <tr>
      <th class="bg_tr" align="left" colspan="2" height="25">修改商品信息</th>
    </tr>
     <tr>
      <td class="td_bg" width="17%" height="23" align="right">所属分类</td>
      <td width="83%" class="td_bg">
      <select name='cid'>
      	
      	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" 
      			<?php if($vo['id'] == $row['cid']): ?>selected<?php endif; ?>
      		><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
      <input type='hidden' name='id' value="<?php echo ($row["id"]); ?>"/>
      </td>
    </tr>
    <tr>
      <td class="td_bg" width="17%" height="23" align="right">商品名</td>
      <td width="83%" class="td_bg">
      	<input type="text" name="name" value=<?php echo ($row["name"]); ?> />
      </td>
    </tr>
    <tr>
      <td class="td_bg" width="17%" height="23" align="right">商品价格</td>
      <td width="83%" class="td_bg">
      	<input type="text" name="price"  value=<?php echo ($row["price"]); ?> />
      </td>
    </tr>
    <tr>
      <td class="td_bg" width="17%" height="23" align="right">商品描述</td>
      <td width="83%" class="td_bg">
      	<textarea name='remark' id='content' value=<?php echo ($row["remark"]); ?> rows='4' cols='80'></textarea>
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