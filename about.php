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

<header class="header" data-header>
      <div class="container">
  
        <div class="overlay" data-overlay></div>
  
        <a href="./index.html" class="logo">
          <img src="./assets/images/rantv.png" alt="Filmlane logo">
        </a>
  
        <div class="header-actions">
  
          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>
  
  
          <!-- <button class="btn btn-primary">Sign in</button> -->
  
        </div>
  
        <button class="menu-open-btn" data-menu-open-btn>
          <ion-icon name="reorder-two"></ion-icon>
        </button>
  
        <nav class="navbar" data-navbar>
  
          <div class="navbar-top">
  
            <a href="./index.php" class="logo">
              <img src="./assets/images/logo.svg" alt="Filmlane logo">
            </a>
  
            <button class="menu-close-btn" data-menu-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>
  
          </div>
  
          <ul class="navbar-list">
  
            <li>
              <a href="./index.php" class="navbar-link">Home</a>
            </li>
  
            <li>
              <a href="./movies.php" class="navbar-link">Movie</a>
            </li>
  
            <li>
              <a href="./tvShow.php" class="navbar-link">Tv Show</a>
            </li>
    
            <li>
              <a href="about.php" class="navbar-link">About Us</a>
            </li>
  
          </ul>
  
        </nav>
  
      </div>
    </header>

  <main>
    <div class="container-team">
        <div class="team-card">
            <img src="./assets/images/fotoku.png">
            <h2>Ryan Hidayat</h2>
            <p>Manusia Biasa</p>
        </div>
        <div class="team-card">
            <img src="./assets/images/aul.png">
            <h2>Dia Auliani</h2>
            <p>Manusia Biasa</p>
        </div>
        <div class="team-card">
            <img src="./assets/images/nurul.jpg">
            <h2>Andi Nurul Ain Nasmin</h2>
            <p>Manusia Biasa</p>
        </div>
    </div>
  </main>

  <footer class="footer" style="margin-top: 30px;">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand-wrapper">

          <a href="./index.html" class="logo">
            <img src="./assets/images/rantv.png" alt="Filmlane logo">
          </a>

          <ul class="footer-list">

            <li>
              <a href="./index.html" class="footer-link">Home</a>
            </li>

            <li>
              <a href="./movies.html" class="footer-link">Movie</a>
            </li>

            <li>
              <a href="./tvShow.html" class="footer-link">TV Show</a>
            </li>

            <li>
              <a href="./about.html" class="footer-link">About Us</a>
            </li>

          </ul>

        </div>

        <div class="divider"></div>

        <div class="quicklink-wrapper">
          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2023 <a href="#">RANTv</a>
        </p>
      </div>
    </div>

  </footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up"></ion-icon>
  </a>



<script src="./assets/js/script.js"></script>

<!-- 
- ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
  document.getElementById('signInBtn').addEventListener('click', function() {
    // Gantilah "sign in.html" dengan path atau URL halaman sign in yang diinginkan
    window.location.href = 'sign in.html';
  });
</script>
</body>
</html>