<?php

	class Toko_m extends Ci_Model
	{
		public function get($id = null)
		{
			$this->db->select('*');
			$this->db->from('harga_hp');
			if($id != null) {
				$this->db->where('id_hp', $id);

			}
			$query = $this->db->get();
			return $query;
		}	

		public function add($data)
		{
			$param = array(
				'merk' => $data['merk'],
				'model' => $data['model'],
				'stok' => $data['stok'],
				'harga' => $data['harga']
			);
			$this->db->insert('harga_hp', $param);
		}	

		public function edit($data)
		{
			$param = array(
				'merk' => $data['merk'],
				'model' => $data['model'],
				'stok' => $data['stok'],
				'harga' => $data['harga']
			);
			$this->db->set($param);
			$this->db->where('id_hp', $data['id']);
			$this->db->update('harga_hp');
		}	

		public function del($id)
		{
			$this->db->where('id_hp', $id);
			$this->db->delete('harga_hp');
		}
	}
?>