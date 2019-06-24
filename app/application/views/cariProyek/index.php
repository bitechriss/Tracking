	<div class="container">
		<div class="row my-3">
			<div class="col-md-7">
				<form method="post">
					<div class="input-group">
						<input class="form-control" type="search" id="cari" name="cari" placeholder="Cari Proyek">
						<div class="input-group-append">
							<button class="btn btn-outline-success" type="submit">Cari</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-2 offset-md-1">
				<a class="btn btn-success" data-toggle="modal" role="button" href="#modalTambahProyek">Tambah</a>
			</div>
			<div class="col-md-2">
				<a class="btn btn-danger" data-toggle="collapse" role="button" href="#tombolHapus">Hapus</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<th>NAMA</th>
						<th>PEMILIK</th>
						<th>LOKASI</th>
						<th>PIMPRO</th>
						<th></th>
					</thead>
					<tbody>
						<?php foreach($proyek as $pyk){ ?>
						<tr>
							<td><a href="<?= base_url(); ?>Pekerjaan/index/<?= $pyk['id'] ?>" style="text-decoration: none; color: black;"><?= $pyk['nama']; ?></a></td>
							<td><a href="<?= base_url(); ?>Pekerjaan/index/<?= $pyk['id'] ?>" style="text-decoration: none; color: black;"><?= $pyk['pemilik']; ?></a></td>
							<td><a href="<?= base_url(); ?>Pekerjaan/index/<?= $pyk['id'] ?>" style="text-decoration: none; color: black;"><?= $pyk['lokasi']; ?></a></td>
							<td><a href="<?= base_url(); ?>Pekerjaan/index/<?= $pyk['id'] ?>" style="text-decoration: none; color: black;"><?= $pyk['pimpro']; ?></a></td>
							<td><a href="<?= base_url(); ?>CariProyek/hapus/<?= $pyk['id'] ?>" class="badge badge-danger float-center collapse" id='tombolHapus'>Hapus</a></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modalTambahProyek" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Proyek</h5>
					<button class="close" type="button" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<?= form_open('CariProyek/tambah'); ?>
					<form method="post">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
						</div>
						<div class="form-group">
							<label for="pemilik">Pemilik</label>
							<input type="text" class="form-control" id="pemilik" name="pemilik" placeholder="Pemilik">
						</div>
						<div class="form-group">
							<label for="lokasi">Lokasi</label>
							<input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi">
						</div>
						<div class="form-group">
							<label for="pimpro">Pimpro</label>
							<input type="text" class="form-control" id="pimpro" name="pimpro" placeholder="Pimpro">
						</div>
						<button type="submit" name="tambah" class="btn btn-success">Tambah</button>
					</form>
				</div>
			</div>
		</div>
	</div>