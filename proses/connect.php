<!-- Kode ini digunakan untuk membuat koneksi ke database MySQL menggunakan MySQLi (MySQL Improved).  -->

<?php
    // Membuat koneksi ke database menggunakan MySQLi
    $conn = mysqli_connect("localhost", "root", "", "db_cm");

    // Memeriksa apakah koneksi berhasil
    if (!$conn) {
        echo "Gagal Koneksi"; // Menampilkan pesan jika koneksi tidak berhasil
    }
?>
