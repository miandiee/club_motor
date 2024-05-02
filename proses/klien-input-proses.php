<?php
include 'connect.php';

// Untuk random nama file
$rand = rand();

// Mengambil informasi file yang diunggah
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$tmp_name = $_FILES['foto']['tmp_name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

// Mengatur ekstensi yang diizinkan
$allowed_extensions = array('png', 'jpg', 'jpeg');

// Memeriksa ekstensi file
if (!in_array($ext, $allowed_extensions)) {
   header("location: ../klien-input.php?alert=gagal_ekstensi");
   exit();
}

// Memeriksa ukuran file
if ($ukuran > 1044070) { // 1MB = 1044070 bytes
   header("location: ../klien-input.php?alert=gagal_ukuran");
   exit();
}

// Mengatur nama baru untuk file yang diunggah
$newName = $rand . '_' . $filename;

// Menyimpan file yang diunggah ke folder 'foto'
$upload_dir = '../foto/';
if (!move_uploaded_file($tmp_name, $upload_dir . $newName)) {
   header("location: ../klien-input.php?alert=gagal_upload");
   exit();
}

// Menyimpan data klien ke dalam variabel
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

// Query SQL untuk insert data klien
$query = "INSERT INTO klien (nama_klien, jenis_kelamin, alamat, foto_klien) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$newName')";

// Menjalankan query
if (mysqli_query($conn, $query)) {
   // Jika berhasil, alihkan ke halaman klien-input.php dengan alert berhasil
   header("location: ../klien.php");
} else {
   // Jika gagal, alihkan ke halaman klien-input.php dengan alert gagal
   header("location: ../klien-input.php?alert=gagal");
}

// Tutup koneksi database
mysqli_close($conn);
