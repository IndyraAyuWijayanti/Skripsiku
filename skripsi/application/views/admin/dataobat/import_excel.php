
<!DOCTYPE html>
<html>
<head>
<link href="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
	
	<title>Search Data</title>
</head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<body>

<div class="container">
	<!-- <div class="row" style="margin-top: 30px;"> -->
		<!-- <div class="col-md-4 col-md-offset-3"> -->
			<h3>Import Data</h3>
			<?php if(!empty($this->session->flashdata('status'))){ ?>
			<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
			<?php } ?>

			<form action="<?= base_url('admin/ImportController/import_excel'); ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Pilih File Excel</label>
					<input type="file" name="fileExcel">
				</div>
				<div>
					<button class='btn btn-success' type="submit">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
			    		Import		
					</button>
				</div>
			</form>
		</div>
		<p></p>
		<!-- <div class="col-md-6 col-md-offset-3" style="margin-top: 50px;"> -->
			
			<table class="table table-bordered" id="example1">
				<thead>
					<tr>
					<tr class="bg-danger">
							<th>No</th>
							<th>Kode Item</th>
							<th>Nama Item</th>
							<th>Jenis Item</th>
							<th>Kategori</th>
							
							<th>Jumlah Terjual</th>
							<!-- <th>Satuan</th> -->
							<!-- <th>Bulan/Tahun</th> -->
							<th>ACTION</th> 
						</tr>
					</thead>
					<tbody>
						<?php 
							$no = 1;
							foreach ($list_data as $row) {
						 ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $row['kode_item'] ?></td>
							<td><?= $row['namaitem'] ?></td>
							<td><?= $row['jenis_item'] ?></td>
							<td><?= $row['nama_kategori'] ?></td>
							<td><?= $row['jumlah'] ?></td>
							<!-- <td><?= $row['satuan'] ?></td> -->
							<!-- <td> <?php 
								// $date = $row["bulan_tahun"];
								// $pattern = "/[-\s:]/";
								// $components = preg_split($pattern, $date);
								// echo json_encode($components[1]. "-" . $components[0]);
							?>
							</td> -->
							<td>
								<a href="<?= base_url('admin/ImportController/delete/'.$row['id_namaitem']) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa fa-trash-o"></i>Hapus</a>
								</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>	
			</div>
		</div>
	</div>
</div>
</body>
</html>