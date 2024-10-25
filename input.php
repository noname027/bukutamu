
<?php
include 'lib/library.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_hp = $_POST['no_hp'];
    $jenis_tamu = $_POST['jenis_tamu'];
    $keterangan = $_POST['keterangan'];

    // Query SQL yang sudah diperbaiki
    $sql = "INSERT INTO tamu_dishub (nama, jenis_kelamin, no_hp, jenis_tamu, keterangan) VALUES
    ('$nama', '$jenis_kelamin', '$no_hp', '$jenis_tamu', '$keterangan')";

    // Eksekusi query
    $mysqli->query($sql) or die($mysqli->error);

    // Redirect setelah sukses
    header('Location: daftar.php');
    exit;
}

// Menampilkan form input
include 'views/v_input.php';
?>
