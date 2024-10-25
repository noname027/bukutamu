<?php include 'lib/library.php'; ?>
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
    <!-- Tambahkan jQuery dan DataTables CSS & JS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        /* Mengecilkan tabel */
        .table-wrapper {
            max-width: 800px; /* Atur ukuran maksimal tabel menjadi lebih kecil */
            margin-top: 120px;
            font-size: 10px; /* Mengecilkan ukuran font tabel */
            padding: 2px;
        }

       
        .table {
            margin-top: 200px; /* Sesuaikan jarak atas tabel */
            width: 1000%; /* Memastikan tabel menggunakan lebar penuh container */
            font-size: 15px; /* Mengatur ukuran font lebih kecil */
        }

        /* Atur margin dan padding tabel */
        .table thead th, .table tbody td {
            padding: 2px; /* Kurangi padding untuk mengecilkan tinggi kolom */
            text-align: center;
            border: 1px solid black; /* Menambahkan border di setiap sel */
        }

        .table tbody td {
            padding: 100px; /* Kurangi padding pada isi tabel lebih lanjut */
            text-align: center;
            width: 100%;
        }

        /* Menetapkan lebar kolom aksi */
        .table th:nth-child(7), .table td:nth-child(7) {
            width: 1000px; /* Ubah ukuran sesuai kebutuhan */
            padding: 5px;
        }

        /* Mengecilkan ukuran ikon dalam aksi */
        .btn-group {
            gap: 500px; /* Jarak antar tombol */
            color: black;
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
    

    <div class="h2"> <h2>Input Tamu</h2></div>
    <!-- Table Wrapper -->
    <div class="container table-wrapper">
        <!-- Menambahkan div container untuk border -->
        <div class="table-container">
            <table id="myTable" class="table table-bordered table-hover border-info">
                <thead>
                    <tr>
                        <th>No.</th>  
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>No.HP/ WhatsApp</th>
                        <th>Jenis Tamu</th>
                        <th>Keterangan</th>
                        <th style="width: 100px;">Aksi</th> <!-- Menetapkan lebar kolom Aksi -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Ambil data dari database
                    $data = mysqli_query($mysqli, "SELECT * FROM tamu_dishub");
                    $i = 1;
                    while ($tamu_dishub = mysqli_fetch_array($data)) {    
                    ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $tamu_dishub['nama'] ?></td>
                        <td><?= $tamu_dishub['jenis_kelamin'] ?></td>
                        <td><?= $tamu_dishub['no_hp'] ?></td>
                        <td><?= $tamu_dishub['jenis_tamu'] ?></td>
                        <td><?= $tamu_dishub['keterangan'] ?></td>
                        <td>
                            <a href="edit.php?id=<?= $tamu_dishub['id'] ?>" class="btn-group">Edit</a>    
                            <a href="delete.php" onclick="showDeleteModal(<?= $tamu_dishub['id'] ?>)" class="btn-group">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                    <script>
                        $(document).ready(function() {
                            $('#myTable').DataTable({
                                "paging": true,        // Enable pagination
                                "searching": true,     // Enable search feature
                                "info": true,          // Show info about current page and total records
                                "lengthChange": false, // Disable changing number of entries per page
                                "pageLength": 5       // Set default number of rows per page
                            });
                        });
                    </script>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QP95lPGE0lYqjq3LFHsaHA67IYHlrRmVBBnpPvI3Of7gfpG6nSNCC/j9UQYjzAKG" crossorigin="anonymous"></script>
</body>
</html>
