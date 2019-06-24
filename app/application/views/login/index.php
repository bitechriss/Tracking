 <div class="container-fluid" style="align-items: center; padding-top: 11vh;">
 	<div class="jumbotron" style="width: 65vh; margin: auto;">
 		<h1>Login</h1>
 		<hr>
 		<?= form_open('Login/validasi'); ?>
 		<form method="post">
 			<div class="form-group">
 				<label for="namaPengguna">Nama Pengguna</label>
 				<input type="text" class="form-control" id="namaPengguna" name="namaPengguna" placeholder="Nama Pengguna">
 			</div>
 			<div class="form-group">
 				<label for="kataSandi">Kata Sandi</label>
 				<input type="password" class="form-control" id="kataSandi" name="kataSandi" placeholder="Kata Sandi">
 			</div>
 			<button type="submit" name="login" class="btn btn-primary">Login</button>
 		</form>
 	</div>
 </div>