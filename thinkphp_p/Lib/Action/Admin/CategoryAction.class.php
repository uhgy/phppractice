<?php

	class CategoryAction extends Action {
		
		public function test() {
			$cate = D ( 'Category' );
			$cate->name = '办公用品';
			$cate->content = '测试';
			$cate->cid = 0;
			$cate->add();
		}
		
		public function add() {
			$category = new CategoryModel();
			$data = $category->where( 'cid=0' )->select();
			$this->assign('data', $data);
			//var_dump('<pre>');
			//var_dump( $category );
			$this->display( 'add' );
		}
		
		public function addOk() {
			if(isset($_POST['submit'])) {
// 				$cid=$_POST['cid'];
// 				$name=$_POST['name'];
// 				$content=$_POST['content'];
				
				$category = D('Category');
				$category->create();
// 				$category->create( array (
// 						'cid' => 1,
// 						'name' => '123',
// 						'content' => '456'
// 				));
// 				$category->add();

// 				$data = array(
// 						'cid' => $cid,
// 						'name' => $name,
// 						'content' => $content
// 				);
				if( $category->add() ) {
					$this->success('录入成功', 'add');
				}else {
					$this->error('录入失败', 'add');
				}
 		}
			
		}
		
		public function admin() {
// 			$category = D ( 'Category' );
// 			$data = $category->select();
			
// 			load('@.tree');
// 			$data = getTree( $data );
					
// 			$this->assign ( 'data', $data );
// 			$this->display( 'admin' );

			import ('ORG.Util.Page');
			$cate = D('Category');
			$count = $cate->count();
			$page = new Page ($count, 11);
			$page->setConfig('header', '个分类');
			$show = $page->show();
			$this->assign('show', $show);
			$data = $cate->select();
			// 加载函数文件
			load ( '@.tree' );
			// 生成树状结构
			$data = getTree ( $data );
			// 截取之后的数组
			$list = array_slice ( $data, $page->firstRow, $page->listRows );
			// 分配数组数据
			$this->assign ( 'data', $list );
			// 显示模板
			$this->display ( 'admin' );
		}
		
		public function deleteAll() {
			if(isset($_POST['deleteSubmit'])) {
				$id = $_POST['id'];
				$where = implode ( ',', $id );
				if ( D('Category')->delete($where) ) {
					$this->success('删除成功', 'admin');
				} else {
					echo $where;
					//$this->error ('删除失败', 'admin');
				}
			}
		}
		
		public function edit() {
			$id = $_GET['id'];
			$row = D('Category')->find( $id );
			
			$data = D('Category')->where('cid=0')->select();
			
			$this->assign('row', $row);
			$this->assign('data', $data);
			
			$this->display('edit');
		}
		
		public function editOK() {
			if (isset ($_POST['submit'])) {
				$cate = D ( "Category" );
				$cate->create();
				if($cate->save()){
					$this->success('修改成功','admin');
				}else{
					$this->error('修改失败','admin');
				}
			}
		}
		
		
		public function zeng() {
			$category=new CategoryModel();
			$category->add(array(
					'name' => '华硕',
					'content' => 'good',
					'cid' => 2
			));
		}
		
		public function shan() {
			$category = D ('category');
			$category->delete(7);
		}
		
		public function gai() {
			$category = new Model('Category');
			$category->save(array(
				'id' => 8,
				'name' => '苹果'	
			));
		}
		
		public function zhao() {
			$category = M ('Category');
			$row = $category->find( 8 );
			var_dump($row);
		}
		
		public function test2() {
			echo '<pre>';
			$cate = D ('Category');
			var_dump( $cate );
		}
		
// 		public function test() {
// 			$this->assign ( 'name', 'zhangsan' );
// 			$this->assign ( 'person', array(
// 			'name' => 'lisi',
// 			'age' => 18		
// 			));
// 			$obj = new stdClass ();
// 			$obj->email = 'zs@163.com';
// 			$this->assign ('obj', $obj);
// 			$this->display();
// 		}
	}