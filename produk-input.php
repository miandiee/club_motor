<?php

include 'sidebar.php';
include 'proses/connect.php';
?>


<body>

      <div class="content bg-light">

            <div class="container mt-5">
                  <div class="row mb-3">
                        <div class="col">
                              <h1>Tambah Data Produk</h1>
                        </div>
                  </div>

                  <div class="card col-7">
                        <div class="card-body">
                              <form class="form-group" action="proses/produk-input-proses.php" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                          <label for="foto" class="form-label">FOTO</label>
                                          <input class="form-control" type="file" name="foto">
                                    </div>
                                    <div class="mb-3">
                                          <label for="nama" class="form-label">NAMA PRODUK</label>
                                          <input class="form-control" type="text" name="nama">
                                    </div>
                                    <div class="mb-3">
                                          <label for="kategori" class="form-label">KATEGORI</label>
                                          <input class="form-control" type="text" name="kategori">
                                    </div>
                                    <div class="mb-3">
                                          <label for="hargajual" class="form-label">HARGA JUAL</label>
                                          <input class="form-control" type="text" name="hargajual">
                                    </div>
                                    <div class="mb-3">
                                          <button class="btn btn-primary" type="submit" value="simpan">SIMPAN</button>
                                    </div>
                              </form>
                        </div>
                  </div>
            </div>
      </div>
</body>