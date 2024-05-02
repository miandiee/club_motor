<?php

include 'connect.php';

if (isset($_POST['submit_validate'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == '' or $password == ''){
        $err.="<li>Silakan masukan username dan juga password!</li>";
    } else {
        $sql1 = "SELECT * FROM users WHERE username = '$username'";
        $q1 = mysqli_query($conn, $sql1);
        $r1 = mysqli_fetch_array($q1);

        if ($r1['username'] == ''){
            $err.="<li>Username <b>$username</b> tidak tersedia</li>";
        } elseif ($r1['password'] != md5($password)){
            $err.="<li>Password yang dimasukkan tidak sesuai.</li>";
        }

        if (empty($err)){
            session_start();
            $_SESSION['session_username'] = $username;
            $_SESSION['session_password'] = md5($password);
            header("location: ../dashboard.php");
        }
    }
}
?>
