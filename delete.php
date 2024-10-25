<?php
include 'lib/library.php';
include 'lib/helper.php';
cekLogin();

// Terima parameter nis dari URL
$id = isset($_GET['id']) ? $_GET['id'] : '';

// Query untuk menghapus data siswa berdasarkan NIS
$sql = "DELETE FROM tamu_dishub WHERE id = '$id'";
$result = $mysqli->query($sql);

// Periksa apakah penghapusan berhasil
if ($result) {
    // Jika berhasil, redirect kembali ke halaman sebelumnya (indeks)
    header("Location: index.php");
    exit();
} else {
    // Jika gagal, tampilkan pesan kesalahan atau tindakan yang sesuai
    echo "Gagal menghapus data.";
}
?>
