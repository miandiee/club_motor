<?php

include 'sidebar.php';
include 'proses/connect.php';
?>


<body>

      <div class="content bg-light">

            <div class="container mt-5">
                  <div class="row mb-3">
                        <div class="col">
                              <h1>Tambah Data Klien</h1>
                        </div>
                  </div>

                  <div class="card col-7">
                        <div class="card-body">
                              <form class="form-group" action="proses/klien-input-proses.php" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                          <label for="foto" class="form-label">FOTO</label>
                                          <input class="form-control" type="file" name="foto">
                                    </div>
                                    <div class="mb-3">
                                          <label for="nama" class="form-label">NAMA</label>
                                          <input class="form-control" type="text" name="nama">
                                    </div>
                                    <div class="mb-3">
                                          <label for="jenis_kelamin" class="form-label">JENIS KELAMIN</label> <br>
                                          <input class="form-check-input" type="radio" name="jenis_kelamin" value="L"> Laki Laki &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <input class="form-check-input" type="radio" name="jenis_kelamin" value="P"> Perempuan
                                    </div>
                                    <div class="mb-3">
                                          <label for="alamat" class="form-label">ALAMAT</label>
                                          <input class="form-control" type="text" name="alamat">
                                    </div>
                                    <div class="mb-3">
                                          <label for="pekerjaan" class="form-label">PEKERJAAN</label>
                                          <input class="form-control" type="text" name="pekerjaan">
                                    </div>
                                    <div class="mb-3">
                                          <label for="testimoni" class="form-label">TESTIMONI</label>
                                          <textarea class="form-control" name="testimoni" rows="5"></textarea>
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