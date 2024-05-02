<?php

include 'sidebar.php';
include 'proses/connect.php';
$id = $_GET['id_klien'];
$klien = mysqli_query($conn, "SELECT * FROM klien WHERE id_klien='$id'");
$row = mysqli_fetch_array($klien);

//membuat function untuk set aktif radio button
function active_radio_button($value, $input)
{
   //apabila value dari radio sama dengan yang diinput
   $result = $value == $input ? 'checked' : '';
   return $result;
}
?>

<body>

   <div class="content bg-light">

      <div class="container mt-5">
         <div class="row mb-3">
            <div class="col">
               <h1>Edit Data Klien</h1>
            </div>
         </div>

         <div class="card col-7">
            <div class="card-body">
               <form class="form-group" action="proses/klien-edit-proses.php" method="post" enctype="multipart/form-data">
                  <input type="hidden" value="<?php echo $row['id_klien']; ?>" name="id_klien">
                  <div class="mb-3">
                     <label for="foto" class="form-label">FOTO</label>
                     <input class="form-control" type="file" name="foto">
                  </div>

                  <div class="mb-3">
                     <label for="nama" class="form-label">NAMA</label>
                     <input class="form-control" type="text" value="<?php echo $row['nama_klien']; ?>" name="nama">
                  </div>
                  <div class="mb-3">
                     <label for="jenis_kelamin" class="form-label">JENIS KELAMIN</label> <br>
                     <input class="form-check-input" type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button("L", $row['jenis_kelamin']) ?>> Laki Laki &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <input class="form-check-input" type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button("P", $row['jenis_kelamin']) ?>> Perempuan
                  </div>
                  <div class="mb-3">
                     <label for="alamat" class="form-label">ALAMAT</label>
                     <input class="form-control" type="text" value="<?php echo $row['alamat']; ?>" name="alamat">
                  </div>
                  <div class="mb-3">
                     <button class="btn btn-primary mt-2" type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                     <a href="klien.php" class="btn btn-secondary mt-2" role="button">Kembali</a>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</body>