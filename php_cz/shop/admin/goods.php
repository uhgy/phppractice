<?php

	$act = isset($_REQUEST['act']) ? $_REQUEST['act'] : 'list';

	include_once 'includes/init.php';

	if($act == 'list'){

		$page = isset($_GET['page']) ? $_GET['page'] : 1;

		$goods = new Goods();
		$lists = $goods->getAllGoods($page);

		$page = Page::show('goods.php?act=list',$lists['pagecounts'],$page);

		include_once ADMIN_TEMP . '/goods_list.html';
	}elseif($act == 'remove'){
		$g_id = isset($_GET['id']) ? $_GET['id'] : 0;

		if($g_id == 0){
			admin_redirect('goods.php?act=list', "没有选中要删除的商品", 2);
		}
		$goods = new Goods();
		if($goods->removeGoodsById($g_id)){
			admin_redirect('goods.php?act=trash','商品加入回收站成功',2);
		}else{
			admin_redirect('goods.php?act=list','商品加入回收站失败',2);
		}

	}elseif($act == "trash"){
		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		
		$goods = new Goods();
		$lists = $goods->getAllGoods($page, 1);

		$page = Page::show('goods.php?act=trash',$lists['pagecounts'],$page);

		include_once ADMIN_TEMP . '/goods_trash.html';
	}elseif($act == "restore"){
		$g_id = isset($_GET['id']) ? $_GET['id'] : 0;
		if($g_id == 0){
			admin_redirect('goods.php?act=list', "没有选中要删除的商品", 1);
		}		
		$goods = new Goods();
		if($goods->restoreGoodsById($g_id)){
			admin_redirect('goods.php?act=trash','商品取消删除成功',1);
		}else{
			admin_redirect('goods.php?act=trash','商品取消删除失败',1);
		}
	}

