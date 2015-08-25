<?php

	$act = isset($_REQUEST['act']) ? $_REQUEST['act'] : 'list';

	include_once 'includes/init.php';

	if($act == 'list'){

		$category = new Category();

		$categories = $category->getAllCategories();

		//var_dump($categories);

		include_once ADMIN_TEMP . '/category_list.html';

	}elseif($act == 'add') {

		$category = new Category();
		$categories = $category->getAllCategories();
		include_once ADMIN_TEMP . '/category_add.html';
	}elseif($act == 'insert'){
		$c_name = isset($_POST['category_name']) ? $_POST['category_name'] : '';
		$c_parent_id = isset($_POST['parent_id']) ? $_POST['parent_id'] : 0;
		$c_sort = isset($_POST['sort_order']) ? $_POST['sort_order'] : 50;

		if(empty($c_name)){
			admin_redirect('category.php?act=add','商品名字不能为空',2);
		}
		if(!is_numeric($c_sort)){
			admin_redirect('category.php?act=add','排序字段只能为整数',2);
		}
		if(strlen($c_name) > 60){
			admin_redirect('category.php?act=add','长度不能超过20个字符',2);	
		}
		$category = new Category();
		if($category->getCategoryByParentIdAndName($c_parent_id, $c_name)){
			if($category->insertCategory($c_name,$c_parent_id,$c_sort)){
				admin_redirect('category.php','插入成功',2);	
			}else{
				admin_redirect('category.php?act=add','插入失败',2);	
			}
		}else{
			admin_redirect('category.php?act=add','不能重复',2);	
		}
	}elseif($act == 'delete'){
		$c_id = isset($_GET['id']) ? $_GET['id'] : 0;

		if($c_id == 0){
			admin_redirect('category.php', '没有选中要删除的商品分类！',2);
		}
		$category = new Category();
		$res = $category->isDelete($c_id);
		if($res === true){
			if($category->deleteCategory($c_id)){
				admin_redirect('category.php','删除成功',1);
			}else{
				admin_redirect('category.php','删除失败',2);
			}
		}else{
			admin_redirect('category.php','不能删除，原因是' . $res, 2);
		}

	}elseif($act == 'edit'){
		$c_id = isset($_GET['id']) ? $_GET['id'] : 0;

		if($c_id == 0){
			admin_redirect('category.php', '没有选中要删除的商品分类！',2);
		}

		$category = new Category();
		if(!$cat = $category->getCategoryById($c_id)){
			admin_redirect('category.php','编辑失败',2);
		}

		$categories = $category->getAllCategories($c_id);
		
		include_once ADMIN_TEMP . '/category_edit.html';
	}elseif($act == 'update'){
		$c_name = isset($_POST['category_name']) ? $_POST['category_name'] : '';
		$c_parent_id = isset($_POST['parent_id']) ? $_POST['parent_id'] : 0;
		$c_sort = isset($_POST['sort_order']) ? $_POST['sort_order'] : 50;
		$c_id = isset($_POST['c_id']) ? $_POST['c_id'] : 50;
		if(empty($c_name)){
			admin_redirect('category.php?act=edit','商品名字不能为空',2);
		}
		if(!is_numeric($c_sort)){
			admin_redirect('category.php?act=edit','排序字段只能为整数',2);
		}
		if(strlen($c_name) > 60){
			admin_redirect('category.php?act=edit','长度不能超过20个字符',2);	
		}
		if($c_id == 0){
			admin_redirect('category.php','没有要更新的分类信息',2);
		}
		$category = new Category();
		if($category->updateCategory($c_id, $c_name,$c_parent_id,$c_sort)){
			admin_redirect('category.php','更新成功',2);
		}else{
			admin_redirect('category.php?act=edit&id='.$c_id,'更新失败!',2);
		}
	}