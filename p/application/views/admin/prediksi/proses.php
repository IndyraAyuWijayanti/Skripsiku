

<!DOCTYPE html>
<html>
<head>

<link href="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>

<title>Proses Prediksi</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>



<body>
<?php
	//notif eror
	echo validation_errors('<div class="alert alert-warning">','</div>');

	//form open
?>


<form action="<?= base_url('admin/Prediksi/algoritma')?>" method="POST">

<div class="form-group row">
	<label class="col-md-6 col-form-label control-label">Kategori Obat</label>
	<div class="col-md-6">
		<select name="nama_kategori" class="form-control">
			<?php foreach($jenis_item as $k){?>
				<option value="<?= $k['id_kategori']?>"><?= $k['nama_kategori']?></option>
			<?php } ?>
		</select>
	</div>
</div>
<div class="form-group row">
	<label class="col-md-6 col-form-label control-label">Jenis Obat</label>
	<div class="col-md-6">
		<select name="jenis_item" class="form-control">
		<?php foreach($jenis_item as $k){?>
				<option value="<?= $k['jenis_item']?>"><?= $k['jenis_item']?></option>
			<?php } ?>
		</select>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-6 col-form-label control-label">Nama Obat</label>
	<div class="col-md-6">
		<select name="namaitem" class="form-control">
			<?php foreach($jenis_item as $k){?>
				<option value="<?= $k['namaitem']?>"><?= $k['namaitem']?></option>
			<?php } ?>
		</select>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-6 col-form-label control-label">Periode</label>
	<div class="col-md-6">
		<select name="peramalan" class="form-control">
			<option value="3">3 Periode</option>
			<option value="5">5 Periode</option>
		</select>
	</div>
</div>

<div class="form-group row">
    <label class="col-md-6 col-form-label control-label">Bulan Peramalan</label>
    <div class="col-md-6">
	<input type="text" name="bulan_prediksi" class="form-control" name="datepicker" placeholder="Bulan Peramalan" id="datepicker"  
	value="<?php echo set_value('bulan_prediksi'); ?>" required>
    </div>
</div>

<div class="form-group row">
	<label class="col-md-6 col-form-label"></label>
	<div class="col-md-6">
		<button class="btn btn-success btn-lg" name="submit" type="submit">
			<i class="fa fa-save"></i> Proses Prediksi
		</button>
		<button class="btn btn-info btn-lg" name="reset" type="reset">
			<i class="fa fa-times"></i> Reset
		</button>
	</div>
</div>
			
</form>
			

<?php echo form_close(); ?>
</body>
<script>

	$("#datepicker").datepicker( {
    format: "mm-yyyy",
    startView: "months", 
    minViewMode: "months"
});
</script>
</html>