<?php
require 'koneksi.php';
session_start();

// Inisialisasi $username dengan nilai default 'Guest'
$username = 'Guest';

// Jika sudah login, ambil informasi username dari session
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
  $username = $_SESSION['username'];
}

// Menentukan jumlah data yang ingin ditampilkan per halaman
$records_per_page = 5;

// Mengambil halaman saat ini dari query string, jika tidak ada, maka akan dianggap halaman pertama
$current_page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

// Hitung offset (pergeseran) untuk query database berdasarkan halaman saat ini
$offset = ($current_page - 1) * $records_per_page;

// Mengambil jumlah total data
$total_pages_query = "SELECT COUNT(*) AS total FROM tv_show";
$result_total_pages = mysqli_query($conn, $total_pages_query);
$total_records = mysqli_fetch_assoc($result_total_pages)['total'];

// Menghitung jumlah halaman yang diperlukan
$total_pages = ceil($total_records / $records_per_page);

// Query untuk mengambil data dengan batasan hasil per halaman
$query = "SELECT * FROM tv_show ORDER BY id DESC LIMIT $offset, $records_per_page";
$sql = mysqli_query($conn, $query);

// Menangani pencarian
$search_keyword = isset($_GET['search']) ? $_GET['search'] : '';

// Ubah query untuk pencarian
$query = "SELECT * FROM tv_show WHERE judul_tvshow LIKE '%$search_keyword%' ORDER BY id DESC LIMIT $offset, $records_per_page";
$sql = mysqli_query($conn, $query);

$no = ($current_page - 1) * $records_per_page;

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
  <?php include 'include/header.php'; ?>
  <?php include 'include/sidebar.php'; ?>
  <main>
    <section class="widget">
      <h2>Tv Show</h2>
      <div class="table-container">
      <div class="atas-table">
          <div class="tombol-tambah"><a href="tambah-data-tvshow.php">Add <i class="fa-solid fa-plus"></i></a></div>
          <div class="cari">
            <form action="" method="GET">
              <!-- <label for="search">Search:</label> -->
              <input type="text" id="search" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>        <?php
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
              <th>Judul Tv Show</th>
              <th>Tahun Tv Show</th>
              <th>Durasi Tv Show</th>
              <th>Rating Tv Show</th>
              <th>Gambar Tv Show</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($result = mysqli_fetch_assoc($sql)) {
            ?>
              <tr>
                <td><?php echo ++$no ?></td>
                <td><?php echo $result['judul_tvshow'] ?></td>
                <td><?php echo $result['tahun_tvshow'] ?></td>
                <td><?php echo $result['durasi_tvshow'] ?></td>
                <td><?php echo $result['rating_tvshow'] ?></td>
                <td class="gambar-admin">
                  <img width="100px" height="120px" src="images/<?php echo $result['gambar_tvshow'] ?>" alt="gambar">
                </td>
                <td>
                  <div class="tombol-action">
                    <div class="tombol-update"><a href="tambah-data-tvshow.php?ubah=<?php echo $result['id'] ?>"><i class="fa-solid fa-pen-to-square"></i> Update</a></div>
                    <div class="tombol-delete"><a type="button" href="proses-tambah-data-tvshow.php?hapus=<?php echo $result['id'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')"><i class="fa-solid fa-trash"></i> Delete</a></div>
                  </div>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
        <div class="pagination">
          <?php if ($current_page > 1) : ?>
            <div class="link-page">
              <a href="?page=<?php echo ($current_page - 1); ?>">Prev</a>
            </div>
          <?php endif; ?>
          <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
            <div class="link-page">
              <a href="?page=<?php echo $i; ?>" <?php if ($i === $current_page) echo 'class="active"'; ?>><?php echo $i; ?></a>

            </div>
          <?php endfor; ?>
          <?php if ($current_page < $total_pages) : ?>
            <div class="link-page">
              <a href="?page=<?php echo ($current_page + 1); ?>">Next</a>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </section>
  </main>
  <?php include 'include/footer.php'; ?>

  <script src="./assets/script.js"></script>
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

  .pagination {
    margin-top: 30px;
    text-align: center;
    display: flex;
    justify-content: center;
  }

  .pagination a{
    text-decoration: none;
    color: #fff;
  }
  
  .pagination .link-page{
    width: 40px;
    background-color: #27374D;
    margin-right: 10px;
  }

  .pagination .active{
    color: #97FFF4;
  }

  .atas-table {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .atas-table .cari input {
    padding: 6px;
    margin-top: 8px;
    font-size: 17px;
    border: 1px solid #ccc;
  }

  .atas-table .cari button {
    float: right;
    padding: 6px 10px;
    margin-top: 8px;
    margin-right: 16px;
    background: #ddd;
    font-size: 17px;
    border: none;
    cursor: pointer;
  }
</style>

</html>