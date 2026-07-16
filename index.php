<?php
      session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin - SMKN1 PADAHERANG</title>
    		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity=" sha512-iBBXm8fW90+nuLcSK1bmrPcLa00T92x01BIsZ+ywDWZCvqsWgccV3gFoRBvOz+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 </head>
<body class="bg-light">
    <div class="navbar">
        <div class="container">
            <h2 class="nav-brand float-left"><a href="index.php"></a>SMKN 1 PADAHERANG</h2>
            <ul class = "nav-menu float-left">
                <li><a href="index.php">Dashboard</a></li>

                <?php if ($_SESSION['ulevel'] == 'Super Admin'){ ?>
                
                    <li><a href="pengguna.php">Pengguna</a></li>

                    <?php }elseif ($_SESSION['ulevel'] == 'Admin'){ ?>
                    
                    <li><a href="jurusan.php">Jurusan</a></li>
                    <li><a href="galeri.php">Galeri</a></li>
                    <li><a href="informasi.php">Informasi</a></li>
                    <li>
                        <a href="#">Pengaturan</a>

                        <ul class="dropdown">
                            <li><a href="identitas-sekolah.php">Identitas Sekolah</a></li>
                            <li><a href="tentang-sekolah.php">Tentang Sekolah</a></li>
                            <li><a href="kepala-sekolah.php">Kepala Sekolah</a></li>
                       </ul>
                       </li>

                       <?php }?>

                       <li>
                        <a href="#"><?= $_SESSION['uname']?> (<?= $_SESSION['ulevel']?>)<i class="fa fa-caret-down"></i></a>

                        <ul class="dropdown">
                            <li><a href="ubah-password.php">Ubah Password</a></li>
                            <li><a href="logout.php">Keluar</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="clearfix">

                </div>
                </div>
           </div>
    <div class="content">
    <div class="container">
    <div class="box">
    <div class="box-header">
        Dashboard
    </div>
    <div class="box-body">
<h3> Selamat Datang <?= $_SESSION['uname']?> di Padel Admin SMKN 1 PADAHERANG</h3>
    </div>
    </div>
    </div>
    </div>
    <div class="footer">
        <div class="container text-center">
        Copyright &copy; 2025 - SMKN 1 PADAHERANG
        </div>
    </div>
</body>
</html>