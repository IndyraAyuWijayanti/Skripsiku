<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prediksi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		
		$this->load->model('prediksi_model');

	}

	public function index()
	{
		
		$data = array('title'     => 'Data Prediksi Obat',
					  'isi'       => 'admin/prediksi/dataprediksi',
	                  'list_data' => $this->prediksi_model->listing_dataobat()
		  );
		// $this->load->view('admin/dataobat/import_excel',$data);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function algoritma(){
		$namaobat = $this->input->post('namaitem');
		// echo $namaobat;
		// echo "<br>";
		$periode = $this->input->post('peramalan');
		$queryData = $this->db->query("select SUM(jumlah) AS jumlah from tbl_namaobat JOIN tbl_obat ON tbl_namaobat.id_namaitem = tbl_obat.id_namaitem WHERE namaitem = '$namaobat'")->row();

		$a=array();
		$tes1 = 0;
		$tes2 = 0;
		$tes3 = 0;
		$tes4 = 0;
		$tes5 = 0;

		$bulankedua = $this->db->query("SELECT jumlah FROM tbl_namaobat JOIN tbl_obat ON tbl_namaobat.id_namaitem = tbl_obat.id_namaitem WHERE bulan_tahun > DATE(NOW() - INTERVAL '$periode' MONTH) AND namaitem = '$namaobat' LIMIT $periode")->result_array();
		if($periode == 3){
			foreach ($bulankedua as $key => $value) {
			if($key == 0){
				$data1 = $value['jumlah'] * 1;
				$tes1 = $data1;	
			} else if($key == 1){
				$data2 = $value['jumlah'] * 2;
				$tes2 = $data2;
			} else if($key == 2) {
				$data3 = $value['jumlah'] * 3;
				$tes3 = $data3;
			}
		}
		
			$jumlah = ($tes1 + $tes2 + $tes3) / 6;
			echo $jumlah;
		}else {
			foreach ($bulankedua as $key => $value) {
				if($key == 0){
					$data1 = $value['jumlah'] * 1;
					$tes1 = $data1;	
				} else if($key == 1){
					$data2 = $value['jumlah'] * 2;
					$tes2 = $data2;
				} else if($key == 2) {
					$data3 = $value['jumlah'] * 3;
					$tes3 = $data3;
				} else if($key == 3) {
					$data4 = $value['jumlah'] * 4;
					$tes4 = $data4;
				} else if($key == 4) {
					$data5 = $value['jumlah'] * 5;
					$tes5 = $data5;
				}
			

			$jumlah = ($tes1 + $tes2 + $tes3 + $tes4 + $tes5) / 15;
			echo $jumlah;

			 // $i = $this->input;
			 // $data = array(  
    //             'id_user'       =>  $i->post('id_user'),
    //             'id_namaitem'   =>  $i->post('id_namaitem'),
    //             'bulan_tahun'   =>  $i->post('bulan_tahun'), //?????
    //             'nama_item'   	=>  $i->post('nama_item'),
    //             'hasil_wma'     =>  $i->post('hasil_wma')
               
    //             );
    //         $this->prediksi_model->listing_dataobat($data);
    //         $this->session->set_flashdata('sukses', 'Menampilkan Hasil Peramalan');
    //         redirect(base_url('admin/prediksi'),'refresh');
    //     }
    //     //end masuk database
    //     $data = array('title'    => 'Tambah Produk',
    //                   'kategori' => $kategori,
    //                   'isi'      => 'admin/produk/tambah'
    //                  );
    //     $this->load->view('admin/layout/wrapper', $data, FALSE);	

		}
	}

	}

	public  function dropdown()
	{
		
		  // $valid = $this->form_validation;

    //     $valid->set_rules('jumlah','Jumlah Terjual','required', 
    //             array( 'required'    =>'%s harus diisi'));
        
    //     $valid->set_rules('jenis_item','Jenis item','required', 
    //             array( 'required'    => '%s harus diisi'));
                       
        
      
                
    //     if($valid->run()===FALSE){
    //     //end validasi

    //     $data = array('title'   => 'Tambah Prediksi',
    //                   'isi'    => 'Tambah'
    //                  );
    //     $this->load->view('admin/prediksi/proses', $data, FALSE);
    //     //masuk databese
    //     }else{
    //         $i = $this->input;
    //         $data = array(  'nama_kategori' =>  $i->post('nama_kategori'),
    //                         'jenis_item'    =>  $i->post('jenis_item'),
    //                         'nama_item'     =>  $i->post('nama_item'),
    //                         'jumlah'        =>  $i->post('jumlah'),
    //                         'bulan_tahun'   =>  $i->post('bulan_tahun')
    //                     );
    //         $this->prediksi_model->listing($data);
    //         $this->session->set_flashdata('sukses', 'Data telah ditambahkan');
    //         redirect(base_url('admin/prediksi/proses'),'refresh');
    //     }
		$obat = $this->prediksi_model->listing_dataobat();
		$data = array('title'     => 'Data Prediksi Obat',
					  'isi'       => 'admin/prediksi/proses',
					  'jenis_item' => $obat
					  // 'obat' => $this->db->query("SELECT * FROM tbl_obat")->result_array(),
					  // 'kategori' => $this->db->query("SELECT * FROM tbl_kategori")->result_array(),

		  );
		// $this->load->view('admin/dataobat/import_excel',$data);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
        //end masuk database
	}

}