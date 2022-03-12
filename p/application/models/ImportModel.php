<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportModel extends CI_Model {

	public function insert($data){
		$insert = $this->db->insert_batch('tbl_obat', $data);
		if($insert){
			return true;
		}
	}

	public function getData(){

			// $this->db->select('*');
			// // return $this->db->get('tbl_obat')->result_array(); 

			// return $this->db->query("SELECT tbl_obat.*, tbl_kategori.*, tbl_jenisitem.*, tbl_namaobat.* FROM tbl_obat JOIN tbl_kategori ON tbl_kategori.id_kategori = tbl_obat.id_kategori JOIN tbl_jenisitem ON tbl_jenisitem.id_jenisitem = tbl_obat.id_jenisitem JOIN tbl_namaobat ON tbl_namaobat.id_namaitem = tbl_obat.id_namaitem")->result_array(); 


$this->db->select('tbl_obat.*,
                            tbl_kategori.*,
                            tbl_jenisitem.*,
                            tbl_namaobat.*');
                            
        $this->db->from('tbl_obat');
        //JOIN
        $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_obat.id_kategori', 'left');
        $this->db->join('tbl_jenisitem', 'tbl_jenisitem.id_jenisitem = tbl_obat.id_namaitem', 'left');
        $this->db->join('tbl_namaobat', 'tbl_namaobat.id_namaitem = tbl_obat.id_namaitem', 'left');
       
        //END JOIN

		
       
       $this->db->group_by('tbl_obat.id_namaitem');
       // $this->db->order_by('tbl_obat.id_namaitem', 'asc');
       $query = $this->db->get();
       return $query->result_array();

 	}

 	 //delete
    public function delete($data)
    {
       
        $this->db->delete('tbl_obat', $data);
        $this->db->where('id_namaitem', $data['id_namaitem']);
        
    }

}

?>
