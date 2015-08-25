<?php
class GoodsAction extends Action {

	public function add() {
		$data = D('Category')->where('cid>0')->select();
		$this->assign('data', $data);
		$this->display( 'add' );
	}
	
	public function addOk() {
		if (isset ($_POST ['submit'])) {
			import('ORG.Net.UploadFile');
			$upload = new UploadFile();
			$upload->saveName = '';
			$upload->savePath = './Public/Upload/';
			if ($upload->upload()) {
				$info=$upload->getUploadFileInfo();
				var_dump($info);
			}else{
				$this->error($upload->getErrorMsg(), 'add');
				exit();
			}
			$_POST['photo'] = $info [0]['savename'];
			
							
			$goods = D ('Goods');
			$goods->create ();
			if($goods->add()) {
				$this->success('录入成功', 'add');
			}else {
				$this->error('录入失败', 'add');
			}
		}
	}
	
	public function admin() {
		import('ORG.Util.Page');
		$goods = D ('Goods');
		$count = $goods->count();
		$page = new Page ( $count, 5);
		$show = $page->show();
		$data = $goods->limit($page->firstRow . ',' . $page->listRows )->select ();
		$this->assign('show', $show);
		$this->assign('data', $data);
		$this->display('admin');
		//echo $data;	
	}
	
	public function edit() {
		$id = $_GET['id'];
		$goods = D ( 'Goods' );
		$row = $goods->find( $id );
// 		var_dump($row);
		$data = D('Category')->where('cid>0')->select();
		$this->assign('data', $data);
		$this->assign('row', $row);
		$this->display( 'edit' );
		
	}
	
	public function editOk() {
		if(isset($_POST['submit'])) {
			
			$goods=D('Goods');
			$goods->create();
			if ($goods->save ()) {
				$this->success('更新成功', 'admin');
			} else {
				$this->error('更新失败', 'admin');
			}
		}
	}
	
	public function deleteAll() {
		if (isset ($_POST ['deleteSubmit'])) {
			$id = $_POST ['id'];
			$where=implode(',' , $id);
			if(D ( 'Goods' )->delete ($where)) {
				$this->success('删除成功', 'admin');
			} else {
				$this->error('删除失败', 'admin');
			}
		}
	}
}