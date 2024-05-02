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
   header("location: ../produk-input.php?alert=gagal_ekstensi");
   exit();
}

// Memeriksa ukuran file
if ($ukuran > 1044070) { // 1MB = 1044070 bytes
   header("location: ../produk-input.php?alert=gagal_ukuran");
   exit();
}

// Mengatur nama baru untuk file yang diunggah
$newName = $rand . '_' . $filename;

// Menyimpan file yang diunggah ke folder 'foto'
$upload_dir = '../foto/';
if (!move_uploaded_file($tmp_name, $upload_dir . $newName)) {
   header("location: ../produk-input.php?alert=gagal_upload");
   exit();
}

// Menyimpan data produk ke dalam variabel
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$hargajual = $_POST['hargajual'];

// Query SQL untuk insert data produk
$query = "INSERT INTO produk (nama_produk, kategori, harga_jual, foto_produk) VALUES ('$nama', '$kategori', '$hargajual', '$newName')";

// Menjalankan query
if (mysqli_query($conn, $query)) {
   // Jika berhasil, alihkan ke halaman produk-input.php dengan alert berhasil
   header("location: ../produk.php");
} else {
   // Jika gagal, alihkan ke halaman produk-input.php dengan alert gagal
   header("location: ../produk-input.php?alert=gagal");
}

// Tutup koneksi database
mysqli_close($conn);
