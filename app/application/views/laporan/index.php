	<div class="container">
		<div class="row my-3">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<th>KODE</th>
						<th>NAMA PEKERJAAN</th>
						<th>BIAYA PENGERJAAN</th>
						<th>NILAI RENCANA</th>
						<th>BIAYA AKTUAL</th>
						<th>NILAI HASIL</th>
						<th>CV</th>
						<th>SV</th>
						<th>CPI</th>
						<th>SPI</th>
					</thead>
					<tbody>
						<?php foreach($pekerjaan as $pkj){ ?>
						<tr>
							<td><?= $pkj['kode']; ?></td>
							<td><?= $pkj['nama']; ?></td>
							<td><?= $pkj['biayaPengerjaan']; ?></td>
							<td><?= $pkj['biayaPengerjaan']*$pkj['finishRencana']; ?></td>
							<td><?= $pkj['biayaAktual']; ?></td>
							<td><?= $pkj['biayaPengerjaan']*$pkj['finishAktual']; ?></td>
							<td><?= $pkj['biayaPengerjaan']*$pkj['finishAktual']-$pkj['biayaAktual'];?></td>
							<td><?= $pkj['biayaPengerjaan']*$pkj['finishAktual']-$pkj['biayaPengerjaan']*$pkj['finishRencana']; ?></td>
							<td><?= $pkj['biayaPengerjaan']*$pkj['finishAktual']/$pkj['biayaAktual']; ?></td>
							<td><?= $pkj['biayaPengerjaan']*$pkj['finishAktual']/$pkj['biayaPengerjaan']*$pkj['finishRencana']; ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>