<?php

include 'sidebar.php';
include 'proses/connect.php';
$id = $_GET['id_produk'];
$produk = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk='$id'");
$row = mysqli_fetch_array($produk);

?>

<body>

   <div class="content bg-light">

      <div class="container mt-5">
         <div class="row mb-3">
            <div class="col">
               <h1>Edit Data Produk</h1>
            </div>
         </div>

         <div class="card col-7">
            <div class="card-body">
               <form class="form-group" action="proses/produk-edit-proses.php" method="post" enctype="multipart/form-data">
                  <input type="hidden" value="<?php echo $row['id_produk']; ?>" name="id_produk">
                  <div class="mb-3">
                     <label for="foto" class="form-label">FOTO</label>
                     <input class="form-control" type="file" name="foto">
                  </div>

                  <div class="mb-3">
                     <label for="nama" class="form-label">NAMA</label>
                     <input class="form-control" type="text" value="<?php echo $row['nama_produk']; ?>" name="nama">
                  </div>
                  <div class="mb-3">
                     <label for="kategori" class="form-label">KATEGORI</label>
                     <input class="form-control" type="text" value="<?php echo $row['kategori']; ?>" name="kategori">
                  </div>
                  <div class="mb-3">
                     <label for="hargajual" class="form-label">HARGA JUAL</label>
                     <input class="form-control" type="text" value="<?php echo $row['harga_jual']; ?>" name="hargajual">
                  </div>
                  <div class="mb-3">
                     <button class="btn btn-primary mt-2" type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                     <a href="produk.php" class="btn btn-secondary mt-2" role="button">Kembali</a>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</body>