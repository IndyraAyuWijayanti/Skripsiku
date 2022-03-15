<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prediksi_model extends CI_Model{
    
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    //listing all prediksi
    public function listing()
    {
        $this->db->select('*');
        $this->db->from('prediksi');
        $this->db->order_by('id_prediksi', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

     //Listing Data Obat
     public function listing_dataobat()
    {
        // $query = $this->db->query("SELECT prediksi .*, tbl_obat.*, tbl_kategori.*, tbl_jenisitem.*, tbl_namaobat.* FROM prediksi JOIN tbl_obat ON tbl_obat.id_namaitem = prediksi.id_namaitem JOIN tbl_kategori ON tbl_kategori.id_kategori = prediksi.id_kategori JOIN tbl_jenisitem ON tbl_jenisitem.id_jenisitem = prediksi.id_jenisitem JOIN tbl_namaobat ON tbl_namaobat.id_namaitem = prediksi.id_namaitem")->result_array();
        // return $query;

        $this->db->select('prediksi.*,
                            tbl_kategori.*,
                            tbl_jenisitem.*,
                            tbl_obat.*,
                            tbl_namaobat.*');
                            
        $this->db->from('prediksi');
        //JOIN
        $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = prediksi.id_kategori', 'left');
        $this->db->join('tbl_jenisitem', 'tbl_jenisitem.id_jenisitem = prediksi.id_namaitem', 'left');
        $this->db->join('tbl_obat', 'tbl_obat.id_namaitem = prediksi.id_namaitem', 'left');
        $this->db->join('tbl_namaobat', 'tbl_namaobat.id_namaitem = prediksi.id_namaitem', 'left');
       
       
        //END JOIN

        
       
       $this->db->group_by('prediksi.id_prediksi');
       // $this->db->order_by('tbl_obat.id_namaitem', 'asc');
       $query = $this->db->get();
       return $query->result_array();
       
    }

    public function kategori_obat()
    {
        return $this->db->query("SELECT * FROM tbl_kategori")->result_array();
    }

     public function jenis_item()
    {
        return $this->db->query("SELECT * FROM tbl_jenisitem")->result_array();
    }
     public function nama_obat()
    {
        return $this->db->query("SELECT * FROM tbl_namaobat")->result_array();
    }

     //Jenis Item
        public function jenisitem($id_jenisitem,$limit,$start)
    {
        $this->db->select(' prediksi.*,
                            tbl_jenisitem.jenis_item');
                            
        $this->db->from('prediksi');
        //JOIN
       
        $this->db->join('tbl_jenisitem', 'tbl_jenisitem.id_jenisitem = prediksi.id_jenisitem', 'left');
       
        //END JOIN
        
        $this->db->where('prediksi.id_jenisitem', $id_jenisitem);
        $this->db->group_by('prediksi.id_prediksi');
        $this->db->order_by('id_prediksi', 'asc');
        $this->db->limit($limit,$start);
        $query = $this->db->get();
        return $query->result();
    }

     //Listing Jenis Item
     public function listing_jenisitem()
    {
        $this->db->select(' prediksi.*,
                            tbl_jenisitem.jenis_item');

        $this->db->from('prediksi');
        //JOIN
         
        $this->db->join('tbl_jenisitem', 'tbl_jenisitem.id_jenisitem = prediksi.id_jenisitem', 'left');


        //END JOIN
       
        $this->db->order_by('id_prediksi', 'asc');
        $query = $this->db->get();
        return $query->result();
    }




}