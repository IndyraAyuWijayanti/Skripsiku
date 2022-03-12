<table class="table table-bordered" id="example1">
				<thead>
					<tr>
					<tr class="bg-danger">
							<th>No</th>
							<th>Kode Item</th>
							<th>Nama Item</th>
							<th>Jenis Item</th>
							<th>Jumlah Terjual</th>
							<th>Hasil WMA</th>
							<th>Bulan/Tahun</th>
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
							<td><?= $row['jumlah'] ?></td>
							<td><?= $row['hasil_wma'] ?></td>
							<td><?= $row["bulan_tahun"] ?></td>
							<td>
								

								<a href="<?= base_url('admin/prediksi/proses/'.$row['id_prediksi']) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Prediksi</a>

								<a href="<?= base_url('admin/prediksi/detail/'.$row['id_prediksi']) ?>" class="btn btn-success btn-xs"><i class="fa fa-trash-o"></i>Detail</a>

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