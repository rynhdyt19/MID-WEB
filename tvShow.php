<?php
require 'koneksi.php';
session_start();

$query = "SELECT * FROM tv_show";
$sql = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Filmlane - Best movie collections</title>
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
            while($result = mysqli_fetch_assoc($sql)){
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

      </div>
    </section>
  </main>

  <?php
  include 'include/footer.php';
  ?>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>