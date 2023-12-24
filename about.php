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

  <?php
  include 'include/footer.php';
  ?>





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