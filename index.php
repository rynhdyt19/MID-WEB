<?php
require 'koneksi.php';
session_start();

$query = "SELECT * FROM movie ORDER BY id DESC LIMIT 8";
$sql = mysqli_query($conn, $query);

$query_tvshow = "SELECT * FROM tv_show ORDER BY id DESC LIMIT 4";
$sql_tvshow = mysqli_query($conn, $query_tvshow);

$query_segera = "SELECT * FROM segera ORDER BY id DESC LIMIT 4";
$sql_segera = mysqli_query($conn, $query_segera);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RanTv | Home</title>
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

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">Mariki Nonton</p>

            <h1 class="h1 hero-title">
              Banyak Sekali <strong>Movie</strong>, TVs Shows, & Lainnya.
            </h1>

          </div>
      </section>
      <!-- 
        - #UPCOMING
      -->

      <section class="upcoming">
        <div class="container">

          <div class="flex-wrapper">

            <div class="title-wrapper">
              <p class="section-subtitle">Tontonan Online</p>

              <h2 class="h2 section-title">COMING SOON...</h2>
            </div>
          </div>

          <ul class="movies-list  has-scrollbar">
            <?php
            while ($result = mysqli_fetch_assoc($sql_segera)) {
            ?>
              <li>
                <div class="movie-card">

                  <a href="#">
                    <figure class="card-banner">
                      <img src="./admin/images/<?php echo $result['gambar_segera'] ?>" alt="The Northman movie poster">
                    </figure>
                  </a>

                  <div class="title-wrapper">
                    <a href="#">
                      <h3 class="card-title"><?php echo $result['judul_segera'] ?></h3>
                    </a>

                    <time datetime="2023"><?php echo $result['tahun_segera'] ?></time>
                  </div>

                  <div class="card-meta">
                    <div class="duration">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="PT137M"><?php echo $result['durasi_segera'] ?></time>
                    </div>

                    <div class="rating">
                      <ion-icon name="star"></ion-icon>

                      <data><?php echo $result['rating_segera'] ?></data>
                    </div>
                  </div>

                </div>
              </li>
            <?php } ?>
          </ul>

        </div>
      </section>

      <!-- 
        - #SERVICE
      -->

      <section class="service">
        <div class="container">

          <div class="service-banner">
            <figure>
              <img src="./assets/images/logo-film.png" alt="HD 4k resolution! only $3.99">
            </figure>

            <a href="./assets/images/service-banner.jpg" download class="service-btn">
              <span>Download</span>

              <ion-icon name="download-outline"></ion-icon>
            </a>
          </div>

          <div class="service-content">

            <p class="service-subtitle">Pelayanan Ta</p>

            <h2 class="h2 service-title">Download ki apa yang disuka!</h2>

            <p class="service-text">
              Lorem ipsum dolor sit amet, consecetur adipiscing elseddo eiusmod tempor.There are many variations of
              passages of lorem
              Ipsum available, but the majority have suffered alteration in some injected humour.
            </p>

            <ul class="service-list">

              <li>
                <div class="service-card">

                  <div class="card-icon">
                    <ion-icon name="tv"></ion-icon>
                  </div>

                  <div class="card-content">
                    <h3 class="h3 card-title">bisa juga terhubung dengan TV</h3>

                    <p class="card-text">
                      Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.
                    </p>
                  </div>

                </div>
              </li>

              <li>
                <div class="service-card">

                  <div class="card-icon">
                    <ion-icon name="videocam"></ion-icon>
                  </div>

                  <div class="card-content">
                    <h3 class="h3 card-title">Bisaki juga nonton dimana saja</h3>

                    <p class="card-text">
                      Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.
                    </p>
                  </div>

                </div>
              </li>

            </ul>

          </div>

        </div>
      </section>

      <!-- 
        - #TOP RATED
      -->

      <section class="top-rated">
        <div class="container">

          <p class="section-subtitle">Tontonan Online</p>

          <h2 class="h2 section-title">FILM TERBARU</h2>

          <ul class="movies-list">
            <?php
            while ($result = mysqli_fetch_assoc($sql)) {
            ?>
              <li>
                <div class="movie-card">

                  <a href="#">
                    <figure class="card-banner">
                      <img src="./admin/images/<?php echo $result['gambar'] ?>" alt="Sonic the Hedgehog 2 movie poster">
                    </figure>
                  </a>

                  <div class="title-wrapper">
                    <a href="#">
                      <h3 class="card-title"><?php echo $result['judul'] ?></h3>
                    </a>

                    <time datetime="2023"><?php echo $result['tahun'] ?></time>
                  </div>

                  <div class="card-meta">
                    <!-- <div class="badge badge-outline">2K</div> -->

                    <div class="duration">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="PT122M"><?php echo $result['durasi'] ?></time>
                    </div>

                    <div class="rating">
                      <ion-icon name="star"></ion-icon>

                      <data><?php echo $result['rating'] ?></data>
                    </div>
                  </div>

                </div>
              </li>
            <?php } ?>

          </ul>

        </div>
      </section>

      <!-- 
        - #TV SERIES
      -->

      <section class="tv-series">
        <div class="container">

          <p class="section-subtitle">TV SHOW</p>

          <h2 class="h2 section-title">ACARA TV TERBARU</h2>

          <ul class="movies-list">
            <?php
            while ($result = mysqli_fetch_assoc($sql_tvshow)) {
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

                    <time datetime="2023">2023</time>
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

      <!-- 
        - #CTA
      -->

      <section class="daftar">
        <div class="container" style="text-align: center;">

          <div class="title-wrapper">
            <h2 class="daftar-title">Ayo Nonton Bersama Keluarga Anda</h2>

            <p class="daftar-text">
              Jangan Terlalu Serius, Kadang Kita Butuh Hiburan
            </p>
          </div>
        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

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
  <!-- ... Bagian lain dari HTML ... -->



  <script>
    document.getElementById('signInBtn').addEventListener('click', function() {
      // Gantilah "sign in.html" dengan path atau URL halaman sign in yang diinginkan
      window.location.href = 'sign in.html';
    });
  </script>

  <!-- ... Bagian lain dari HTML ... -->

</body>

</html>