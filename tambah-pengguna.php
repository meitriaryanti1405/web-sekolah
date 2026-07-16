<?php include 'header.php' ?>

		<!-- content -->
		<div class="content">

			<div class="container">

				<div class="box">

					<div class="box-header">
						Tambah Pengguna
					</div>

					<div class="box-body">
						
						<form action="" method="POST">
							
							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" required>
							</div>

							<div class="form-group">
								<label>Username</label>
								<input type="text" name="user" placeholder="Username" class="input-control" required>
							</div>

							<div class="form-group">
								<label>Level</label>
								<select name="level" class="input-control" required>
									<option value="">Pilih</option>
									<option value="Super Admin">Super Admin</option>
									<option value="Admin">Admin</option>
								</select>
							</div>

							<button type="button" class="btn" onclick="window.location = 'pengguna.php'">Kembali</button>
							<input type="submit" name="submit" value="Simpan" class="btn btn-blue">

						</form>

						<?php

							if(isset($_POST['submit'])){

								$nama 	= addslashes(ucwords($_POST['nama']));
								$user 	= addslashes($_POST['user']);
								$level 	= $_POST['level'];
								$pass 	= '123456';

								$cek 	= mysqli_query($conn, "SELECT username FROM tb_pengguna WHERE username = '".$user."' ");
								if(mysqli_num_rows($cek) > 0){
									echo '<div class="alert alert-error">Username sudah digunakan</div>';
								}else{

									// misalnya kamu ambil id terakhir, lalu +1
								$ambil_id = mysqli_query($conn, "SELECT MAX(id) as id_terakhir FROM tb_pengguna");
								$data_id  = mysqli_fetch_assoc($ambil_id);
								$id_baru  = $data_id['id_terakhir'] + 1;

								$simpan = mysqli_query($conn, "INSERT INTO tb_pengguna (id, nama, username, password, level, created_at, update_at) VALUES (
                                            '".$id_baru."',
                                            '".$nama."',
                                            '".$user."',
                                            '".MD5($pass)."',
                                            '".$level."',
                                            NOW(),
                                            NOW()
                                    )");

								if($simpan){
									echo '<div class="alert alert-success">Simpan Berhasil</div>';
								}else{
									echo 'gagal simpan '.mysqli_error($conn);
								}

								}

							}

						?>

					</div>

				</div>

			</div>

		</div>

<?php include 'footer.php' ?>