<?php
include 'sidebar.php';
?>

<body>

      <div class="content bg-light">

            <div class="container mt-5">
                  <div class="row mb-3">
                        <div class="col">
                              <h1>Klien</h1>
                        </div>
                        <div class="col text-end">
                              <a href="klien-input.php" class="btn btn-primary mt-2" role="button">Tambah Data</a>
                              <a href="cetak/laporan-klien.php" class="btn btn-outline-secondary mt-2" role="button">Cetak</a>
                        </div>
                  </div>

                  <table class="table">
                        <thead>
                              <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Foto Klien</th>
                                    <th scope="col">Nama Klien</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Pekerjaan</th>
                                    <th scope="col">Testimoni</th>
                                    <th scope="col">Aksi</th>
                              </tr>
                        </thead>
                        <tbody>
                              <?php
                              include 'proses/connect.php';
                              $klien = mysqli_query($conn, "SELECT * from klien");
                              $no = 1;
                              foreach ($klien as $row) {
                                    $jenis_kelamin = $row['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki laki';
                                    $gambar_path = "foto/" . $row['foto_klien'];
                                    echo "<tr>
                                    <td>$no</td>
                                    <td><img src='$gambar_path' alt='Foto Klien' style='width: 100px; height: 100px;'></td>
                                    <td>" . $row['nama_klien'] . "</td>
                                    <td>" . $jenis_kelamin . "</td>
                                    <td>" . $row['alamat'] . "</td>
                                    <td>" . $row['pekerjaan'] . "</td>
                                    <td>" . $row['testimoni'] . "</td>
                                    <td class='text-center'>
                                    <a href='klien-edit.php?id_klien=$row[id_klien]' class='btn btn-outline-warning' role='button'>Edit</a> </br></br>
                                    <a href='proses/klien-delete-proses.php?id_klien=$row[id_klien]' class='btn btn-outline-danger' role='button' onclick='return confirmDelete()'>Delete</a>
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