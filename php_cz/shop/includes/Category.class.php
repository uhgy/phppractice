<?php

	class Category extends DB{

		protected $table = 'category';

		/*
		 * 获取所有商品分类
		 *
		 *
		 *
		*/ 
		public function getAllCategories($stop_id = 0){
			
			$sql = "select * from {$this->getTableName()} order by c_sort asc";

			$categories = $this->db_getAll($sql);

			return $this->noLimitCategory($categories, $stop_id);
		}

		/*
		 *无限级分类
		 *
		 *
		*/
		private function noLimitCategory($categories,$stop_id = 0,$parent_id = 0,$level=0){
			static $res = array();

			foreach($categories as $value){
				if($value['c_parent_id'] == $parent_id){
					if($value['c_id'] != $stop_id){
						$value['level'] = $level;

						$res[] = $value;

						$this->noLimitCategory($categories,$stop_id, $value['c_id'],$level + 1);

					}
				}
			}
			return $res;
		}

		public function getCategoryByParentIdAndName($c_parent_id, $c_name){
			$sql = "select * from {$this->getTableName()} where c_parent_id = '{$c_parent_id}' 
							and c_name = '{$c_name}' limit 1";

			return $this->db_getRow($sql) ? FALSE : TRUE;
		}

		public function insertCategory($c_name,$c_parent_id,$c_sort){
			$sql = "insert into {$this->getTableName()} 
						values(null,'{$c_name}',default,'{$c_sort}','{$c_parent_id}')";
			return $this->db_insert($sql);
		}

		public function isDelete($c_id){
			$sql = "select * from {$this->getTableName()} where c_parent_id = '{$c_id}'";
			if($this->db_getRow($sql)){
				return '有子分类';
			}else{
				$sql = "select * from {$this->getTableName()} where c_id = '{$c_id}' and c_inv > 0";

				return $this->db_getRow($sql) ? '当前分类还有商品' :true;
			}
		}

		public function deleteCategory($c_id){
			$sql = "delete from {$this->getTableName()} where c_id = '{$c_id}' limit 1";

			return $this->db_delete($sql);
		}

		public function getCategoryById($c_id){
			$sql = "select * from {$this->getTableName()} where c_id = '{$c_id}' limit 1";

			return $this->db_getRow($sql);
		}

		public function updateCategory($c_id, $c_name,$c_parent_id,$c_sort){
			 $sql = "update {$this->getTableName()} set c_name='{$c_name}',
			 c_parent_id='{$c_parent_id}',c_sort = '{$c_sort}' where c_id = '{$c_id}'";

			 return $this->db_update($sql);
		}

	}

