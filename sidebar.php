<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="images/logo2.png">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <title>Club Motor Digital Talent</title>
      <style>
            /* Custom CSS for sidebar */
            main {
                  display: flex;
                  flex-direction: row;
                  min-height: 100vh;
            }

            .sidebar {
                  width: 250px;
                  /* Lebar sidebar */
                  background-color: #343a40;
                  color: #fff;
                  padding: 20px;
                  position: fixed;
                  /* Mengunci posisi sidebar */
                  top: 0;
                  /* Meletakkan sidebar di atas */
                  left: 0;
                  /* Meletakkan sidebar di sisi kiri */
                  bottom: 0;
            }

            .content {
                  flex: 1;
                  padding: 20px;
                  margin-left: 250px;
                  /* Mengatur margin kiri agar konten tidak tertutup oleh sidebar */
            }

            .nav-link {
                  color: #fff;
            }
      </style>
</head>

<body data-new-gr-c-s-check-loaded="14.1170.0" data-gr-ext-installed>
      <div class="sidebar">
            <h1>Menu</h1>
            <hr>
            <ul class="nav flex-column">
                  <li class="nav-item">
                        <a href="dashboard.php" class="nav-link active" aria-current="page">
                              Dashboard
                        </a>
                  </li>
                  <hr>
                  <p>Data</p>
                  <li>
                        <a href="klien.php" class="nav-link">
                              Klien
                        </a>
                  </li>
                  <li>
                        <a href="produk.php" class="nav-link">
                              Produk
                        </a>
                  </li>
                  <hr>
                  <p>Media</p>
                  <li>
                        <a href="galeri.php" class="nav-link">
                              Galeri
                        </a>
                  </li>
                  <li>
                        <a href="artikel.php" class="nav-link">
                              Artikel
                        </a>
                  </li>
                  <li>
                        <a href="event.php" class="nav-link">
                              Event
                        </a>
                  </li>
                  <hr>
                  <p>Settings</p>
                  <li>
                        <a href="#" class="nav-link">
                              Logout
                        </a>
                  </li>
            </ul>
            <hr>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-rtVRHp46j3rdjiV/MgOsYXNZ0DrUgOqFyE69gZ7jOV2i1H4DWV0voM2auiD37p3d" crossorigin="anonymous"></script>
</body>

</html>