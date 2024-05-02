<?php
include 'connect.php';

// Menyimpan data dari form ke dalam variabel
$id = $_POST['id_klien'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

// Mengunggah foto baru jika ada
if ($_FILES['foto']['size'] > 0) {
    $rand = rand(); // Untuk memberikan nama unik pada file
    $filename = $_FILES['foto']['name'];
    $tmp_name = $_FILES['foto']['tmp_name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    // Memeriksa ekstensi file
    $allowed_extensions = array('png', 'jpg', 'jpeg');
    if (!in_array($ext, $allowed_extensions)) {
        header("location: ../klien-edit.php?id_klien=$id&alert=gagal_ekstensi");
        exit();
    }

    // Mengunggah foto ke folder 'foto'
    $newName = $rand . '_' . $filename;
    move_uploaded_file($tmp_name, '../foto/' . $newName);

    // Mengupdate foto klien di database
    mysqli_query($conn, "UPDATE klien SET foto_klien='$newName' WHERE id_klien='$id'");
}

// Memperbarui data klien ke dalam database
$query = "UPDATE klien SET nama_klien='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat' WHERE id_klien='$id'";
mysqli_query($conn, $query);

// Mengalihkan kembali ke halaman klien.php
header("location:../klien.php");

// Tutup koneksi ke database
mysqli_close($conn);
?>
