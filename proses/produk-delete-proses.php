<?php

include 'connect.php';

//mendapatkan id mahasiswa
$id = $_GET['id_produk'];

//query SQL untuk delete data
$query = "DELETE FROM produk  WHERE id_produk='$id'";
mysqli_query($conn, $query);

//mengalihkan ke halaman index.php
header("location:../produk.php");
