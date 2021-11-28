<?php namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
	protected $table = 'barang';
	protected $primaryKey = 'id';
	protected $allowedFields = [
		'nama','harga','stok','gambar'
	];
	protected $returnType = 'App\Entities\Barang';
	protected $useTimestamps = false;
     
	// public function getBarang($id = false){
	// 		if($id === false){
	// 			return $this->findAll();
	// 	}else{
	// 			return $this->getWhere(['id' => $id]);
	// 	}   
	// }

	// public function hapusBarang($id){
	// 	$builder = $this->db->table($this->table);
	// 		return $builder->delete(['id' => $id]);
	// }
}