<?php
include 'sidebar.php';
?>

<body>

      <div class="content bg-light">

            <div class="container mt-5">
                  <div class="row mb-3">
                        <div class="col">
                              <h1>Produk</h1>
                        </div>
                        <div class="col text-end">
                              <a href="produk-input.php" class="btn btn-primary mt-2" role="button">Tambah Data</a>
                              <a href="cetak/laporan-produk.php" class="btn btn-outline-secondary mt-2" role="button">Cetak</a>
                        </div>
                  </div>

                  <table class="table">
                        <thead>
                              <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Foto Produk</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Harga Jual</th>
                                    <th scope="col">Aksi</th>
                              </tr>
                        </thead>
                        <tbody>
                              <?php
                              include 'proses/connect.php';
                              $produk = mysqli_query($conn, "SELECT * FROM produk");
                              $no = 1;
                              foreach ($produk as $row) {
                                    echo "<tr>
                                    <td>$no</td>
                                    <td><img src='foto/" . $row['foto_produk'] . "' alt='Foto Produk' style='width: 100px; height: 100px;'></td>
                                    <td>" . $row['nama_produk'] . "</td>
                                    <td>" . $row['kategori'] . "</td>
                                    <td>" . $row['harga_jual'] . "</td>
                                    <td>
                                    <a href='produk-edit.php?id_produk=$row[id_produk]' class='btn btn-outline-warning' role='button'>Edit</a>
                                    <a href='proses/produk-delete-proses.php?id_produk=$row[id_produk]' class='btn btn-outline-danger' role='button' onclick='return confirmDelete()'>Delete</a>
                                    </td>
                              </tr>";
                                    $no++;
                              }
                              ?>


                        </tbody>
                  </table>
            </div>
      </div>
</body>

<script>
      function confirmDelete() {
            return confirm("Apakah Anda yakin ingin menghapus data ini?");
      }
</script>