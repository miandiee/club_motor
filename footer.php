<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="images/logo2.png">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   <title>Club Motor Digital Talent</title>
</head>

<body>
   <div class="container-fluid position-relative bg-dark bg-light-radial text-white-50 py-6 px-5">
      <hr>
      <div class="footer">
         <footer class="footer">
            <div>
               <section class="">
                  <div class="row">
                     <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                           DIGITALENT CLUB
                        </h6>
                        <p>
                           Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque nihil officiis asperiores veniam officia dignissimos. Explicabo ab sequi et eveniet voluptas quia dicta quisquam. Ullam quam ipsam corporis dolorem ad.
                        </p>
                     </div>

                     <hr class="w-100 clearfix d-md-none" />

                     <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Upcoming Events</h6>
                        <p>
                           <a class="text-white">Sunmori</a>
                        </p>
                        <p>
                           <a class="text-white">Night Ride</a>
                        </p>
                        <p>
                           <a class="text-white">Hunting</a>
                        </p>
                     </div>

                     <hr class="w-100 clearfix d-md-none" />

                     <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                           Products
                        </h6>
                        <?php
                        include 'proses/connect.php';
                        $produk = mysqli_query($conn, "SELECT * FROM produk");
                        foreach ($produk as $row) {
                        ?>
                           <div class="row mb-3">
                              <div class="col-9">
                                 <h5 class="card-title"><?php echo $row['nama_produk']; ?></h5>
                              </div>
                           </div>
                        <?php
                        }
                        ?>
                     </div>

                     <hr class="w-100 clearfix d-md-none" />

                     <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact Us</h6>
                        <p><i class="fas fa-home "></i> Medan Tembung</p>
                        <p><i class="fas fa-envelope "></i> dtsjwd@gmail.com</p>
                        <p><i class="fas fa-phone "></i> + 01 234 567 88</p>
                        <p><i class="fas fa-fax "></i> + 01 234 567 89</p>
                     </div>
                  </div>
               </section>

               <hr class="my-3">

               <section class="p-3 pt-0">
                  <div class="row d-flex align-items-center">
                     <div class="col-md-7 col-lg-8 text-center text-md-start">
                        <div class="p-3">
                           © 2024 Copyright: DIGITALENT CLUB
                        </div>
                     </div>

                     <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                        <a href="https://www.facebook.com" class="btn btn-outline-light btn-floating m-1 text-white" role="button"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com" class="btn btn-outline-light btn-floating m-1 text-white" role="button"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.google.com" class="btn btn-outline-light btn-floating m-1 text-white" role="button"><i class="fab fa-google"></i></a>
                        <a href="https://www.instagram.com" class="btn btn-outline-light btn-floating m-1 text-white" role="button"><i class="fab fa-instagram"></i></a>
                     </div>
                  </div>
               </section>
            </div>
      </div>
   </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</html>