<?php
include 'navbar.php';
?>

<body>

   <div class="container-fluid position-relative bg-dark bg-light-radial text-white-50 py-6 px-5">

      <!-- Carousel Start -->
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="d-block w-100" src="images/slider1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
               <img class="d-block w-100" src="images/slider3.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
               <img class="d-block w-100" src="images/slider2.jpg" alt="Third slide">
            </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
         </a>
      </div>
      <!-- Carousel End -->

      <!-- Prakata Start -->
      <div class="jumbotron jumbotron-fluid container-fluid position-relative bg-dark bg-light-radial text-white-50 py-6 px-5 mt-5" style="border: 1px solid white;">
         <div class="container">
            <h1 class="text-uppercase mb-4 font-weight-bold text-light">PRA<span class="text-secondary">KATA</span></h1>
            <p class="lead">
               Selamat datang di Club Motor Digital Talent, tempat di mana kegembiraan berkendara dan semangat bersama berkumpul menjadi satu. Kami dengan bangga mempersembahkan wadah bagi para pecinta motor untuk menjelajahi keindahan perjalanan, berbagi pengalaman, dan memperluas jaringan dalam komunitas yang penuh semangat ini.
               <br><br>
               Dengan dedikasi kami untuk menyatukan para penggemar motor dari berbagai latar belakang, kami menawarkan pengalaman yang menginspirasi dan mendalam dalam dunia motor. Setiap putaran roda adalah kesempatan untuk menciptakan kenangan yang tak terlupakan dan ikatan yang kuat di antara sesama pecinta motor.
               <br><br>
               Saat Anda memasuki komunitas kami, Anda tidak hanya menjadi anggota, tetapi juga bagian dari sebuah perjalanan. Bersama-sama, mari kita nikmati momen tak terduga, pemandangan yang menakjubkan, dan persahabatan yang abadi di jalanan yang menunggu untuk dijelajahi. Selamat bergabung dengan Club Motor Digital Talent - tempat di mana petualangan tak pernah berakhir!
            </p>
         </div>
      </div>
      <!-- Prakata End -->

      <!-- About Us Start -->
      <section id="about">
         <div class="text-center mx-auto mt-5" style="max-width: 600px;">
            <h1 class="text-uppercase mb-4 font-weight-bold text-secondary">TENTANG <span class="text-light"> KAMI</span> !!!</h1>
         </div>
         <div class="card-deck container-fluid position-relative bg-dark bg-light-radial text-white-50 py-6 px-5">
            <div class="card">
               <div class="card-body text-dark">
                  <h5 class="card-title text-center">TENTANG KAMI</h5>
                  <p class="card-text">
                     Club Motor Digital Talent didirikan sebagai wadah bagi para penggemar motor untuk saling bertukar pengalaman, pengetahuan, dan kecintaan terhadap dunia motor. Sejak berdiri, kami telah menjadi rumah bagi ribuan anggota yang berbagi semangat dan kebersamaan dalam menjelajahi keindahan dunia motor.
                  </p>
                  <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
               </div>
            </div>
            <div class="card">
               <div class="card-body text-dark">
                  <h5 class="card-title text-center">VISI & MISI</h5>
                  <p class="card-text">
                     Menjadi komunitas motor terkemuka yang menginspirasi dan menyatukan para pecinta motor di seluruh dunia. <br>
                     • Membangun komunitas yang solid dan inklusif bagi penggemar motor, <br>
                     • Menyediakan pengalaman berkendara yang memuaskan dan bermanfaat, <br>
                     • Mendorong kesadaran dan keamanan berkendara yang bertanggung jawab, <br>
                     • Berkontribusi pada perkembangan positif industri otomotif. <br>
                  </p>
                  <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
               </div>
            </div>
            <div class="card">
               <div class="card-body text-dark">
                  <h5 class="card-title text-center">PROFIL</h5>
                  <p class="card-text">
                     Club Motor Digital Talent adalah komunitas motor yang telah memiliki pengalaman dalam mengadakan berbagai acara dan kegiatan berkualitas. Kami mengutamakan keselamatan dan kepuasan anggota, serta berkomitmen untuk memberikan pengalaman terbaik dalam setiap aktivitas yang kami selenggarakan.
                  </p>
                  <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
               </div>
            </div>
         </div>
      </section>
      <!-- About Us End -->

      <!-- Produk Start -->
      <section id="#produk">
         <div class="container-fluid bg-dark py-6 px-5 mt-5">
            <div class="text-center mx-auto" style="max-width: 600px;">
               <h1 class="text-uppercase mb-4 font-weight-bold text-light">Produk <span class="text-secondary">Kami</span> !!!</h1>
            </div>
            <div class="card bg-secondary mb-5">
               <h5 class="card-header text-light">Daftar Produk</h5>
               <div class="card-body">
                  <?php
                  include 'proses/connect.php';
                  $produk = mysqli_query($conn, "SELECT * FROM produk");
                  $row = mysqli_fetch_assoc($produk); // Mengambil baris pertama dari hasil query
                  ?>
                  <div class="row mb-3">
                     <div class="col-3">
                        <img src="foto/<?php echo $row['foto_produk']; ?>" alt="Foto Produk" class="img-fluid" width="300" height="300">
                     </div>
                     <div class="col-9">
                        <h5 class="card-title"><?php echo $row['nama_produk']; ?></h5>
                        <p class="card-text"><strong>Kategori:</strong> <?php echo $row['kategori']; ?></p>
                        <p class="card-text"><strong>Harga Jual:</strong> <?php echo $row['harga_jual']; ?></p>
                     </div>
                  </div>
                  <a href="#" class="btn btn-outline-warning">See more...</a>
               </div>
            </div>
         </div>
      </section>
      <!-- Produk End -->

      <!-- Media Start -->
      <section id="media">
         <div class="container-fluid bg-dark py-6 px-5 mt-5">
            <div class="text-center mx-auto" style="max-width: 600px;">
               <h1 class="text-uppercase mb-4 font-weight-bold text-secondary">Med<span class="text-light">ia</span></h1>
            </div>

            <div class="row justify-content-around">
               <div class="col-md-4">
                  <div class="card bg-dark text-white mb-3" style="max-width: 30rem;">
                     <img class="card-img-top" src="images/event.jpg" alt="event">
                     <div class="card-body">
                        <h5 class="card-title">Event</h5>
                        <p class="card-text">Sunmori</p>
                        <a href="#" class="btn btn-outline-warning">Lihat lainnya</a>
                     </div>
                  </div>
               </div>

               <div class="col-md-4">
                  <div class="card bg-dark text-white mb-3" style="max-width: 30rem;">
                     <img class="card-img-top" src="images/galeri.jpg" alt="galeri">
                     <div class="card-body">
                        <h5 class="card-title">Galeri</h5>
                        <p class="card-text">Koleksi unit baru</p>
                        <a href="#" class="btn btn-outline-warning">Lihat lainnya</a>
                     </div>
                  </div>
               </div>

               <div class="col-md-4">
                  <div class="card bg-dark text-white mb-3" style="max-width: 30rem;">
                     <img class="card-img-top" src="images/artikel.jpg" alt="artikel">
                     <div class="card-body">
                        <h5 class="card-title">Artikel</h5>
                        <p class="card-text">Reparasi bebas biaya bagi klien setia</p>
                        <a href="#" class="btn btn-outline-warning">Lihat lainnya</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Media End -->

      <!-- Client Start -->
      <section id="#klien">
         <div class="container-fluid bg-dark py-6 px-5 mt-5">
            <div class="text-center mx-auto">
               <h1 class="text-uppercase mb-4 font-weight-bold text-light">Klien <span class="text-secondary">Kami</span> !!!</h1>
            </div>
            <div class="row gx-0 align-items-center">
               <div class="col-xl-8 col-lg-7 col-md-12">
                  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner mb-5">

                        <?php
                        include 'proses/connect.php';
                        $klien = mysqli_query($conn, "SELECT * from klien");
                        $no = 1;
                        foreach ($klien as $row) {
                           $gambar_path = "foto/" . $row['foto_klien'];
                           // Tambahkan kelas 'active' untuk item pertama
                           $active_class = $no == 1 ? 'active' : '';
                        ?>
                           <div class="carousel-item <?php echo $active_class; ?>">
                              <!-- Tambahkan gaya CSS untuk mengatur ukuran gambar -->
                              <img style="width: 45%;" class="img-fluid p-lg-3 mb-4 mb-md-0" src="<?php echo $gambar_path; ?>" alt="Foto Klien">
                              <h4 class="text-uppercase mb-0"><?php echo $row['nama_klien']; ?></h4>
                              <p><?php echo $row['pekerjaan']; ?></p>
                              <p><?php echo '"' . $row['testimoni'] . '"'; ?></p>
                              <!-- Tambahkan detail lainnya sesuai kebutuhan -->
                           </div>
                        <?php
                           $no++;
                        }
                        ?>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Client End -->

   </div>

</body>

<?php
include 'footer.php';
?>