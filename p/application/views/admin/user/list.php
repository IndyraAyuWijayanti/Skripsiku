
<p>
	<a href="<?= base_url('admin/user/tambah') ?>" class="btn btn-danger btn-lg">
		<i class="fa fa-plus"></i> Tambah Data Admin
	</a>
</p>


<?php
//notifikasi
if ($this->session->flashdata('sukses')) {
	echo '<div class="alert alert-success alert-dismissible">';
	echo '  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>';
	echo $this->session->flashdata('sukses');
	echo'</div>';
}
?>
<table class="table table-bordered" id="example1">
	<thead>
		<tr>
		<tr class="bg-danger">
			<th>NO</th>
			<th>NAMA</th>
			<th>EMAIL</th>
			<th>USERNAME</th>
			<th>LEVEL</th>
			<th>ACTION</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach($user as $user){ ?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?= $user->nama ?></td>
			<td><?= $user->email ?></td>
			<td><?= $user->username ?></td>
			<td><?= $user->akses_level ?></td>
			<td>
				<a href="<?= base_url('admin/user/edit/'.$user->id_user) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit</a>

				<a href="<?= base_url('admin/user/delete/'.$user->id_user) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa fa-trash-o"></i>Hapus</a>
			</td>

		</tr>
		<?php } ?>
	</tbody>
</table>
					