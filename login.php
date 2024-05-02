<?php

session_start();
$err = "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="images/logo2.png">
   <title>Club Motor Digital Talent</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="js/login-validasi.js"></script>
   <style>
      body {
         /* background-color: whitesmoke; */
         background-image: url('images/slider1.jpg');
         background-size: cover;
      }

      .login-container {
         max-width: 400px;
         margin: auto;
         margin-top: 100px;
         padding: 20px;
         background-color: whitesmoke;
         border-radius: 10px;
         box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
      }

      .buttonn {
         background-color: burlywood;
      }

      .btn:hover {
         background-color: wheat;
      }
   </style>
</head>

<body>
   <div class="container">
      <div class="row">
         <div class="col-md-6 offset-md-3 login-container">
            <h2 class="text-center mb-4">Login</h2>

            <?php
            if ($err) { ?>
               <div id="login-alert" class="alert alert-danger col-sm-12">
                  <ul><?php echo $err ?></ul>
               </div>
            <?php
            }
            ?>

            <form method="post" action="proses/login-proses.php" name="login">
               <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username">
               </div>
               <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password">
               </div>
               <button type="submit" name="submit_validate" class="btn btn-light btn-block buttonn">Login</button>
            </form>
         </div>
      </div>
   </div>

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>