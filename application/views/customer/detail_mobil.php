<div class="container mt-5 mb-5">
	<div class="card" style="margin-top: 100px;">
		<div class="card-body">
			<?php foreach ($detail as $dt) : ?>
				<div class="row align-items-center">
					<div class="col-md-5 text-center">
						<img class="img-fluid" style="max-width: 90%; height: auto;" src="<?php echo base_url('assets/upload/' . $dt->gambar) ?>">
					</div>
					<div class="col-md-7">
						<table class="table table-hover">
							<tr>
								<th>Merk</th>
								<td><?php echo $dt->merk ?></td>
							</tr>
							<tr>
								<th>Penyedia</th>
								<td><?php echo $dt->nama_rental ?></td>
							</tr>
							<tr>
								<th>Alamat</th>
								<td><?php echo $rental[0]->alamat ?></td>
							</tr>
							<tr>
								<th>Nomor Plat</th>
								<td><?php echo $dt->no_plat ?></td>
							</tr>
							<tr>
								<th>Warna</th>
								<td><?php echo $dt->warna ?></td>
							</tr>
							<tr>
								<th>Tahun Produksi</th>
								<td><?php echo $dt->tahun ?></td>
							</tr>
							<tr>
								<th>Status</th>
								<td>
									<?php 
										if($dt->status == '1'){
											echo "<span class='badge badge-success'>Tersedia</span>";
										}else{
											echo "<span class='badge badge-danger'>Tidak Tersedia/Sedang dirental</span>";
										}
									?>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<?php 
					                    if($dt->status == "0"){
					                      echo "<button class='btn btn-danger disabled'>Telah di Rental</button>";
					                    }else{
					                      echo anchor('customer/rental/tambah_rental/' . $dt->id_mobil, '<button class="btn btn-primary">Rental</button>');
					                    }
					                  ?>
								</td>
							</tr>
						</table>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
