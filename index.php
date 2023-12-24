<?php 
require 'koneksi.php';
session_start();

$query = "SELECT * FROM movie LIMIT 8";
$sql = mysqli_query($conn, $query);

$query_tvshow = "SELECT * FROM tv_show LIMIT 4";
$sql_tvshow = mysqli_query($conn, $query_tvshow);

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

              <h2 class="h2 section-title">Film yang mau tayang</h2>
            </div>  
          </div>

          <ul class="movies-list  has-scrollbar">

            <li>
              <div class="movie-card">

                <a href="#">
                  <figure class="card-banner">
                    <img src="./assets/images/upcoming-1.png" alt="The Northman movie poster">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="#">
                    <h3 class="card-title">The Northman</h3>
                  </a>

                  <time datetime="2023">2023</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">HD</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT137M">137 min</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>8.5</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="movie-card">

                <a href="#">
                  <figure class="card-banner">
                    <img src="./assets/images/upcoming-2.png"
                      alt="Doctor Strange in the Multiverse of Madness movie poster">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="#">
                    <h3 class="card-title">Doctor Strange in the Multiverse of Madness</h3>
                  </a>

                  <time datetime="2023">2023</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">4K</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT126M">126 min</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>Belumpi Direting</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="movie-card">

                <a href="#">
                  <figure class="card-banner">
                    <img src="./assets/images/upcoming-3.png" alt="Memory movie poster">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="#">
                    <h3 class="card-title">Memory</h3>
                  </a>

                  <time datetime="2023">2023</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">2K</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="">N/A</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>Belumpi Direting</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="movie-card">

                <a href="#">
                  <figure class="card-banner">
                    <img src="./assets/images/upcoming-4.png"
                      alt="The Unbearable Weight of Massive Talent movie poster">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="#">
                    <h3 class="card-title">The Unbearable Weight of Massive Talent</h3>
                  </a>

                  <time datetime="2023">2023</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">HD</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT107M">107 min</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>Belumpi Direting</data>
                  </div>
                </div>

              </div>
            </li>

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

          <h2 class="h2 section-title">Film Terkenal</h2>

          <ul class="movies-list">
          <?php
            while($result = mysqli_fetch_assoc($sql)){
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

          <p class="section-subtitle">Acara TV Bagus</p>

          <h2 class="h2 section-title">Acara TV Paling Bagus Didunia</h2>

          <ul class="movies-list">
          <?php
            while($result = mysqli_fetch_assoc($sql_tvshow)){
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
        <div class="container">

          <div class="title-wrapper">
            <h2 class="daftar-title">Daftar Maki Gratisji </h2>

            <p class="daftar-text">
              Kasi Masukmi Emailta Disini.
            </p>
          </div>

          <form action="" class="daftar-form">
            <input type="email" name="email" required placeholder="Enter your email" class="email-field">

            <button type="submit" class="daftar-form-btn">Get started</button>
          </form>

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