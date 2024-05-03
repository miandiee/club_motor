<?php
include 'connect.php';

// Menyimpan data dari form ke dalam variabel
$id = $_POST['id_produk'];
$nama_produk = $_POST['nama'];
$kategori = $_POST['kategori'];
$harga_jual = $_POST['hargajual'];

// Mengunggah foto baru jika ada
if ($_FILES['foto']['size'] > 0) {
    $rand = rand(); // Untuk memberikan nama unik pada file
    $filename = $_FILES['foto']['name'];
    $tmp_name = $_FILES['foto']['tmp_name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    // Memeriksa ekstensi file
    $allowed_extensions = array('png', 'jpg', 'jpeg');
    if (!in_array($ext, $allowed_extensions)) {
        header("location: ../produk-edit.php?id_produk=$id&alert=gagal_ekstensi");
        exit();
    }

    // Mengunggah foto ke folder 'foto'
    $newName = $rand . '_' . $filename;
    move_uploaded_file($tmp_name, '../foto/' . $newName);

    // Mengupdate foto produk di database
    mysqli_query($conn, "UPDATE produk SET foto_produk='$newName' WHERE id_produk='$id'");
}

// Memperbarui data produk ke dalam database
$query = "UPDATE produk SET nama_produk='$nama_produk', kategori='$kategori', harga_jual='$harga_jual' WHERE id_produk='$id'";
mysqli_query($conn, $query);

// Mengalihkan kembali ke halaman produk.php
header("location:../produk.php");

// Tutup koneksi ke database
mysqli_close($conn);
?>
