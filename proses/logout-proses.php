<?php
session_start(); // Memulai sesi

// Hapus semua data sesi
session_unset();

// Hancurkan sesi
session_destroy();

// Redirect ke halaman login atau halaman lain yang sesuai
header("location: ../login.php");
exit();
?>
