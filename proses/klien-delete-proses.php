<?php

include 'connect.php';

//mendapatkan id mahasiswa
$id = $_GET['id_klien'];

//query SQL untuk delete data
$query = "DELETE FROM klien  WHERE id_klien='$id'";
mysqli_query($conn, $query);

//mengalihkan ke halaman index.php
header("location:../klien.php");
