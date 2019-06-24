	<div class="container">
		<div class="row my-3">
			<div class="col-md-2">
				<a class="btn btn-success" data-toggle="modal" role="button" href="#modalTambahPekerjaan">Tambah</a>
			</div>
			<div class="col-md-2">
				<a class="btn btn-danger" data-toggle="collapse" role="button" href="#tombolHapus">Hapus</a>
			</div>
		</div>
		<div class="row my-3">
			<div class="col-md-5">
				<div class="list-group">
					<form method="post">
						<?php foreach($pekerjaan as $pkj){ ?>
							<ul>
								<li>
									<button name="detil" type="submit" class="list-group-item list-group-item-action" value=<?= $pkj['kode'] ?>><?= $pkj['kode'].' '.$pkj['nama']; ?><a href="<?= base_url(); ?>Pekerjaan/hapus/<?= $pkj['kode'] ?>" class="badge badge-danger float-center collapse float-right" id='tombolHapus' name="tombolHapus">Hapus</a></button>
											
								</li>
							</ul>
						<?php } ?>
					</form>
				</div>
			</div>
			<div class="col-md-7">
  				<?= form_open('Pekerjaan/ubah'); ?>
				<form method="post">
					<div class="form-group row sr-only">
						<div class="input-group input-group-sm">
							<input type="text" class="form-control" id="idProyek" name="idProyek" value=<?= $detil['idProyek']; ?>>
						</div>
					</div>
					<div class="form-group row">
						<div class="input-group input-group-sm">
							<label for="kode" class="col-sm-3 col-form-label">Kode</label>
							<input type="text" class="form-control" id="kode" name="kode" placeholder="Kode" value="<?= $detil['kode']; ?>" readonly>
						</div>
					</div>
					<div class="form-group row">
						<div class="input-group input-group-sm">
							<label for="nama" class="col-sm-3 col-form-label">Nama Pekerjaan</label>
							<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pekerjaan" value=<?= $detil['nama']; ?>>
						</div>
					</div>
					<div class="form-group row" class="col-sm-2 col-form-label">
						<div class="input-group input-group-sm">
							<label for="biayaPengerjaan" class="col-sm-3 col-form-label">Biaya Pengerjaan</label>
							<input type="text" class="form-control" id="biayaPengerjaan" name="biayaPengerjaan" placeholder="Biaya Pengerjaan" value=<?= $detil['biayaPengerjaan']; ?>>
						</div>
					</div>
					<div class="form-group row" class="col-sm-2 col-form-label">
						<div class="input-group input-group-sm">
							<label for="tanggalMulai" class="col-sm-3 col-form-label">Tanggal Mulai</label>
							<input type="text" class="form-control" id="tanggalMulai" name="tanggalMulai" placeholder="YYYY-MM-DD" value=<?= $detil['tanggalMulai']; ?>>
						</div>
					</div>
					<div class="form-group row" class="col-sm-2 col-form-label">
						<div class="input-group input-group-sm">
							<label for="tanggalSelesai" class="col-sm-3 col-form-label">Tanggal Selesai</label>
							<input type="text" class="form-control" id="tanggalSelesai" name="tanggalSelesai" placeholder="YYYY-MM-DD" value=<?= $detil['tanggalSelesai']; ?>>
						</div>
					</div>
					<div class="form-group row" class="col-sm-2 col-form-label">
						<div class="input-group input-group-sm">
							<label for="finishAktual" class="col-sm-3 col-form-label">Finish Aktual</label>
							<input type="text" class="form-control" id="finishAktual" name="finishAktual" placeholder="Finish Aktual" value=<?= $detil['finishAktual']; ?>>
						</div>
					</div>
					<div class="form-group row" class="col-sm-2 col-form-label">
						<div class="input-group input-group-sm">
							<label for="finishRencana" class="col-sm-3 col-form-label">Finish Rencana</label>
							<input type="text" class="form-control" id="finishRencana" name="finishRencana" placeholder="Finish Rencana" value="<?= $detil['finishRencana']; ?>">
						</div>
					</div>
					<div class="form-group row" class="col-sm-2 col-form-label">
						<div class="input-group input-group-sm">
							<label for="selisih" class="col-sm-3 col-form-label">Selisih</label>
							<input type="text" class="form-control" id="selisih" name="selisih" placeholder="Selisih" value="<?= $detil['finishRencana']-$detil['finishAktual']; ?>" readonly>
						</div>
					</div>
					<div class="form-group row" class="col-sm-2 col-form-label">
						<div class="input-group input-group-sm">
							<label for="biayaAktual" class="col-sm-3 col-form-label">Biaya Aktual</label>
							<input type="text" class="form-control" id="biayaAktual" name="biayaAktual" placeholder="Biaya Aktual" value=<?= $detil['biayaAktual']; ?>>
						</div>
					</div>
					<button type="submit" name="ubah" class="btn btn-warning">Ubah</button>
				</form>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modalTambahPekerjaan" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Pekerjaan</h5>
					<button class="close" type="button" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<?= form_open('Pekerjaan/tambah'); ?>
					<form method="post">
						<div class="form-group">
							<label for="Kode">Kode</label>
							<input type="text" class="form-control" id="kode" name="kode" placeholder="Kode">
						</div>
						<div class="form-group">
							<label for="Nama">Nama Pekerjaan</label>
							<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pekerjaan">
						</div>
						<div class="form-group">
							<label for="biayaPengerjaan">Biaya Pengerjaan</label>
							<input type="text" class="form-control" id="biayaPengerjaan" name="biayaPengerjaan" placeholder="Biaya Pengerjaan">
						</div>
						<div class="form-group">
							<label for="tanggalMulai">Tanggal Mulai</label>
							<input type="text" class="form-control" id="tanggalMulai" name="tanggalMulai" placeholder="YYYY-MM-DD">
						</div>
						<div class="form-group">
							<label for="tanggalMulai">Tanggal Selesai</label>
							<input type="text" class="form-control" id="tanggalSelesai" name="tanggalSelesai" placeholder="YYYY-MM-DD">
						</div>
						<div class="form-group">
							<label for="finishAktual">Finish Aktual</label>
							<input type="text" class="form-control" id="finishAktual" name="finishAktual" placeholder="Finish Aktual">
						</div>
						<div class="form-group">
							<label for="finishRencana">Finish Rencana</label>
							<input type="text" class="form-control" id="finishRencana" name="finishRencana" placeholder="Finish Rencana">
						</div>
						<div class="form-group">
							<label for="biayaAktual">Biaya Aktual</label>
							<input type="text" class="form-control" id="biayaAktual" name="biayaAktual" placeholder="Biaya Aktual">
						</div>
						<button type="submit" name="tambah" class="btn btn-success">Tambah</button>
					</form>
				</div>
			</div>
		</div>
	</div>