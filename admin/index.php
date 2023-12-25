<?php
session_start();
require 'koneksi.php';

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header('Location: login.php');
  exit;
}

// Inisialisasi $username dengan nilai default 'Guest'
$username = 'Guest';

// Jika sudah login, ambil informasi username dari session
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
  $username = $_SESSION['username'];
}

$sql_tvshow = "SELECT COUNT(*) AS total_tvshow FROM tv_show";
$result_tvshow = $conn->query($sql_tvshow);
$sql_movie = "SELECT COUNT(*) AS total_movie FROM movie";
$result_movie = $conn->query($sql_movie);
$sql_segera = "SELECT COUNT(*) AS total_segera FROM segera";
$result_segera = $conn->query($sql_segera);
$sql_admin = "SELECT COUNT(*) AS total_admin FROM admin_film";
$result_admin = $conn->query($sql_admin);
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
  <?php include 'include/header.php'; ?>
  <?php include 'include/sidebar.php'; ?>
  <main>
    <section class="widget">
      <h2>Dashboard</h2>
      <div class="kartu">
        <div class="card">
          <div class="keterangan">
            <div class="atas">
              <h3>TV SHOW</h3>
              <p>Jumlah Data</p>
            </div>
            <?php
          if ($result_tvshow->num_rows > 0) {
            $row_tvshow = $result_tvshow->fetch_assoc();
            $totalRows_tvshow = $row_tvshow["total_tvshow"];
            ?>
            <div class="angka-card">
              <p>
                <?php
              echo $totalRows_tvshow;
            } else {
              echo "0";
            }
            ?>
              </p>
            </div>
            </div>
        </div>
        <div class="card">
        <div class="keterangan">
            <div class="atas">
              <h3>MOVIE</h3>
              <p>Jumlah Data</p>
            </div>
            <?php
          if ($result_movie->num_rows > 0) {
            $row_movie = $result_movie->fetch_assoc();
            $totalRows_movie = $row_movie["total_movie"];
            ?>
            <div class="angka-card">
              <p>
                <?php
              echo $totalRows_movie;
            } else {
              echo "0";
            }
            ?>
              </p>
            </div>
            </div>
        </div>
        <div class="card">
        <div class="keterangan">
            <div class="atas">
              <h3>COMING SOON</h3>
              <p>Jumlah Data</p>
            </div>
            <?php
          if ($result_segera->num_rows > 0) {
            $row_segera = $result_segera->fetch_assoc();
            $totalRows_segera = $row_segera["total_segera"];
            ?>
            <div class="angka-card">
              <p>
                <?php
              echo $totalRows_segera;
            } else {
              echo "0";
            }
            ?>
              </p>
            </div>
            </div>
        </div>
        <div class="card">
        <div class="keterangan">
            <div class="atas">
              <h3>ADMIN</h3>
              <p>Jumlah Data</p>
            </div>
            <?php
          if ($result_admin->num_rows > 0) {
            $row_admin = $result_admin->fetch_assoc();
            $totalRows_admin = $row_admin["total_admin"];
            ?>
            <div class="angka-card">
              <p>
                <?php
              echo $totalRows_admin;
            } else {
              echo "0";
            }
            ?>
              </p>
            </div>
            </div>
        </div>
      </div>
    </section>
  </main>
  <?php include 'include/footer.php'; ?>
  <script src="./assets/script.js"></script>
</body>
<style>
  main {
    height: 75vh;
  }

  main .card {
    background-color: #fff;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    padding: 10px;
    flex: 1 1 20%;
    /* Adjust the width as needed */
    margin: 10px;
  }

  .angka-card p{
    font-size: 50px;
    font-weight: bold;
  }

  .keterangan{
    display: flex;
    justify-content: space-around;
    align-items: center;
  }
</style>

</html>