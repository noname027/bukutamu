<?php
include 'lib/library.php';

// Proses form jika metode request adalah POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form, termasuk 'keterangan'
    $id = $_POST['id']; // Pastikan input hidden 'id' disertakan di form
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_hp = $_POST['no_hp'];
    $jenis_tamu = $_POST['jenis_tamu'];
    $keterangan = $_POST['keterangan'];

    // Gunakan prepared statement untuk keamanan
    $stmt = $mysqli->prepare("UPDATE tamu_dishub SET nama = ?, jenis_kelamin = ?, no_hp = ?, jenis_tamu = ?, keterangan = ? WHERE id = ?");
    
    // Binding parameter dengan benar
    $stmt->bind_param("sssssi", $nama, $jenis_kelamin, $no_hp, $jenis_tamu, $keterangan, $id);
    
    // Eksekusi statement
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        // Jika berhasil, redirect ke halaman daftar.php
        header('location: daftar.php');
        exit;
    } else {
        echo "No record was updated.";
    }

    $stmt->close();
}

// Dapatkan ID dari GET request untuk menampilkan data di form edit
$id = $_GET['id'] ?? null; // Pastikan ID didefinisikan

if (empty($id)) {
    header('location: daftar.php');
    exit;
}

// Query untuk mengambil data tamu yang akan di-edit
$sql = "SELECT * FROM tamu_dishub WHERE id = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$tamu_dishub = $result->fetch_assoc();

if (empty($tamu_dishub)) {
    header('location: daftar.php');
    exit;
}

// Tampilkan form edit
include 'views/v_edit.php';
?>
