<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tamu</title>
    <!-- icon -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
      body {
        background-color: #808080; /* Latar belakang abu-abu */
    }

    .container {
        margin-left: 200px;
        margin-top: 100px;
        margin-bottom: -20px; 
        padding: 20px; 
        width: 1500px; 
        font-size: 10px; 
    }

    form {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom:150px;
    }

    .form-group {
        margin-bottom: 10px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-group input[type="text"],
    .form-group input[type="radio"],
    .form-group textarea {
        width: 500px;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 12px; /* Ukuran font lebih kecil untuk input */
    }

    .form-group input[type="radio"] {
        width: auto;
        margin-right: 5px;
    }

    .form-group .radio-label {
        display: block;
        margin-left: 900px; /* Membuat jarak kiri */
        margin-bottom: 10px;
    }

    .submit-container input[type="submit"] {
        background-color: #6a1b9a;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .submit-container input[type="submit"]:hover {
        background-color: #7e47c5;
    }

    .text-border {
        padding: 30px;
        width: 1200px;
        text-align: left;
        font-family: Arial, sans-serif;
        font-size: 35px;
        color: black;
        margin: 100px;
        margin-left: 200px;
        margin-top: -540px;
        background-color: #C0C0C0;
    }
    </style>
    </head>
<body>
  
    <!-- Sidebar -->
    <section id="sidebar">
        <div class="sidebar-content">
            <img class="mt-3" src="assets/images/Icon dishub.png" alt="" style="width: 100px; margin-left: 50px">
            <hr>
            <p>HOME</p>
            <div class="sidebar-menu">
                <div class="list-item">
                    <a href="menu.php">
                        <li style="margin-top: 5px; margin-bottom: 40px">
                            <i class="fi fi-rs-people-roof"></i>
                            <span style="margin-left: 10px;">Dashboard</span>
                        </li>
                    </a>
                </div>
                <hr>
                <p class="mt-4">MENU</p>
                <div class="list-menu">
                    <div class="list-item">
                        <a href="input.php">
                            <li>
                                <i class="fi fi-rs-user-add"></i>
                                <span style="margin-left: 10px;">Input Data</span>
                            </li>
                        </a>
                    </div>
                    <div class="list-item">
                        <a href="daftar.php">
                            <li style="margin-top: 5px">
                                <i class="fi fi-rs-users-alt"></i>
                                <span style="margin-left: 10px;">Daftar Tamu</span>
                            </li>
                        </a>
                    </div>
                </div>
                <a href="auth-login-petugas.php"><button class="signin">Log Out</button></a>
            </div>
            <div class="text-border">Dinas Perhubungan Kota Bandung</div>
        </div>
    </section>
    

    <!-- Daftar Tamu -->
    <div class="h2-text">
        <h2>Daftar Tamu</h2></div>
  <div class="container">
  <div class="h2"> <h2>Input Tamu</h2></div>
  <?php
  $action = 'input.php';
  if (!empty($tamu_dishub)) $action = 'edit.php';
     ?>  
    <form action="<?php echo $action ?>" method="POST">
        <div class="form-group">
            <label for="nama">NAMA LENGKAP</label>
            <input type="text" name="nama" id="nama" value="<?= @$tamu_dishub['nama_lengkap'] ?>" placeholder="Tulis Nama Lengkap Anda...">
        </div>

        <div class="form-group">
            <label>JENIS KELAMIN</label>
            <input type="radio" name="jenis_kelamin" value="Laki-laki" <?= @$tamu_dishub['jenis_kelamin'] == 'Laki-laki' ? 'checked' : '' ?>> Laki-laki
            <input type="radio" name="jenis_kelamin" value="Perempuan" <?= @$tamu_dishub['jenis_kelamin'] == 'Perempuan' ? 'checked' : '' ?>> Perempuan
        </div>

        <div class="form-group">
            <label for="no_hp">HP/WHATSAPP</label>
            <input type="text" name="no_hp" id="no_hp" value="<?= @$tamu_dishub['no_hp'] ?>" placeholder="Tulis No HP atau WhatsApp Aktif...">
        </div>

        <div class="form-group">
            <label>JENIS TAMU</label>
            <br> 
            <input type="radio" name="jenis_tamu" value="Perorangan/Masyarakat Umum" <?= @$tamu_dishub['Perorangan/Masyarakat Umum'] == 'Perorangan/Masyarakat Umum' ? 'checked' : '' ?>> Perorangan/Masyarakat Umum
            <br>
            <input type="radio" name="jenis_tamu" value="Lembaga/Instansi" <?= @$tamu_dishub['Lembaga/Instansi'] == 'Lembaga/Instansi' ? 'checked' : '' ?>> Lembaga/Instansi
        </div>

        

        <div class="form-group">
            <label for="keterangan">KETERANGAN TERKAIT KEPERLUAN ANDA</label>
            <textarea name="keterangan" id="keterangan" value="<?= @$tamu_dishub['keterangan'] ?>" placeholder="Tulis keterangan keperluan Anda..."></textarea>
        </div>

        <div class="submit-container">
            <input type="submit" value="Simpan Data">
        </div>
    </form>
</div>

</body>
</html>
