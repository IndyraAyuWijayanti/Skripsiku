<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		$this->load->library(array('excel','session'));
		$this->load->model('ImportModel');

	}

	public function index()
	{
		$jenis_item = $this->ImportModel->getData();
		$data = array('title'     => 'Data Penjualan Obat',
					  'isi'       => 'admin/dataobat/import_excel',
	                  'list_data' => $jenis_item
		  );
		
// var_dump($data);
// die();

		// $this->load->view('admin/dataobat/import_excel',$data);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	 // public function import_excel()
  //   {
  //       $import_excel = $this->ImportModel->getData();
  //       $data = array('title'   => 'Data Pengguna',
  //                     'import_excel'    => $import_excel,
  //                     'isi'     => 'admin/dataobat/import_excel'
  //                    );
  //       $this->load->view('admin/dataobat/wrapper', $data, FALSE);
        
  //   }



	public function import_excel(){

		if (isset($_FILES["fileExcel"]["name"])) {
			$path = $_FILES["fileExcel"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();	
				// echo $highestRow;
				// echo $highestColumn;

				for($row=5; $row<=$highestRow; $row++)
				{
					$kode_item  = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
					$id_namaitem  = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$id_jenisitem = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$id_kategori = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$jumlah     = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$satuan     = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
					$bulantahun = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
					$date=date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($bulantahun));
					// 3/2019
					//bulan
					//tahun
					if($kode_item != "" && $id_namaitem != "" && $id_jenisitem != "" && $jumlah != "" && $satuan != "" && $date != ""){
					  $temp_data[] = array(
						'kode_item'	    => $kode_item,
						'id_namaitem'	=> $id_namaitem,
						'id_jenisitem'	=> $id_jenisitem,
						'id_kategori'   => $id_kategori,
						'jumlah'	    => $jumlah,
						'satuan'	    => $satuan,
						'bulan_tahun'	=> $date
					  );
					  // echo json_encode($temp_data);
					}	
				}
				$this->load->model('ImportModel');
			$insert = $this->ImportModel->insert($temp_data);
			if($insert){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil di Import ke Database');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Terjadi Kesalahan');
				redirect($_SERVER['HTTP_REFERER']);
			}
			}
		}else{
			echo "Tidak ada file yang masuk";
		}
	}

	//Delete DataObat
    public function delete($id_namaitem)
    {
        $data = array('id_namaitem' => $id_namaitem);
        $this->ImportModel->delete($data);
        $this->session->set_flashdata('sukses', 'Data berhasil dihapus');
        redirect(base_url('admin/ImportController'),'refresh');
    }

}

?>