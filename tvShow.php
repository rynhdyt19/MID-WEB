<?php
require 'koneksi.php';
session_start();

// Menentukan jumlah data yang ingin ditampilkan per halaman
$records_per_page = 8;

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
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RanTv | Tv Show</title>
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="top">

  <?php
  include 'include/header.php';
  ?>


  <main style="margin-top: 50px;">
    <section class="tv-series">
      <div class="container">

        <ul class="movies-list">
          <?php
          while ($result = mysqli_fetch_assoc($sql)) {
          ?>
            <li>
              <div class="movie-card">

                <a href="#">
                  <figure class="card-banner">
                    <img src="./admin/images/<?php echo $result['gambar_tvshow'] ?>" alt="Moon Knight movie poster">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="#">
                    <h3 class="card-title"><?php echo $result['judul_tvshow'] ?></h3>
                  </a>

                  <time datetime="2023"><?php echo $result['tahun_tvshow'] ?></time>
                </div>

                <div class="card-meta">
                  <!-- <div class="badge badge-outline">2K</div> -->

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT47M"><?php echo $result['durasi_tvshow'] ?></time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data><?php echo $result['rating_tvshow'] ?></data>
                  </div>
                </div>

              </div>
            </li>
          <?php } ?>

        </ul>
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

  <?php
  include 'include/footer.php';
  ?>

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up"></ion-icon>
  </a>

  <script src="./assets/js/script.js"></script>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
<style>
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
</style>