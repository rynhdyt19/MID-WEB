<?php
require 'koneksi.php';
session_start();

$query = "SELECT * from about;";
$sql = mysqli_query($conn, $query);

$no = 0;

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header('Location: login.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="shortcut icon" href="../favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="./assets/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
  <header>
    <h1>RANTv</h1>
  </header>
  <?php include 'include/sidebar.php'; ?>
  <main>
    <section class="widget">
      <h2>About</h2>
      <div class="table-container">
        <div class="tombol-tambah"><a href="tambah-data-about.php">Add</a></div>
        <?php
        if (isset($_SESSION['eksekusi'])) :
        ?>

          <div class="notif">
            <div class="alert alert-success alert-white rounded">
              <div class="icon"><i class="fa fa-check"></i></div>
              <?php echo $_SESSION['eksekusi']; ?>
            </div>
          </div>
        <?php
          session_destroy();
        endif ?>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Deskripsi</th>
              <th>Foto</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($result = mysqli_fetch_assoc($sql)) {
            ?>
              <tr>
                <td><?php echo ++$no ?></td>
                <td><?php echo $result['nama'] ?></td>
                <td><?php echo $result['deskripsi'] ?></td>
                <td class="gambar-admin">
                  <img width="100px" height="120px" src="images/<?php echo $result['gambar_about'] ?>" alt="gambar">
                </td>
                <td>
                  <div class="tombol-action">
                    <div class="tombol-update"><a href="tambah-data-about.php?ubah=<?php echo $result['id'] ?>">Update</a></div>
                    <div class="tombol-delete"><a type="button" href="proses-tambah-data-about.php?hapus=<?php echo $result['id'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')">Delete</a></div>
                  </div>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </section>
  </main>
  <footer>
    <p>&copy; 2023 Dashboard</p>
  </footer>
  <script src="./assets/script.js"></script>
  <script>
    // script.js
    document.addEventListener('DOMContentLoaded', function() {
      var sidebarLinks = document.querySelectorAll('#sidebar nav ul li a');
      sidebarLinks.forEach(function(link) {
        link.addEventListener('click', function() {
          sidebarLinks.forEach(function(item) {
            item.classList.remove('active');
          });
          this.classList.add('active');
        });
      });
    });
  </script>
</body>

<style>
  .notif {
    margin-top: 20px;
  }

  .alert {
    display: flex;
    align-items: center;
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
  }

  .alert .icon i {
    color: #c9e2b3;
    background-color: #3c763d;
    padding: 10px;
    border-radius: 50%;
    margin-right: 20px;
  }

  .alert-success {
    background-color: #dff0d8;
    border-color: #d6e9c6;
    color: #3c763d;
  }

  .alert-success hr {
    border-top-color: #c9e2b3;
  }

  .alert-success .alert-link {
    color: #2b542c;
  }
</style>


</html>