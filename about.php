<?php
require 'koneksi.php';
session_start();

$query = "SELECT * FROM about";
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

  <main>
    <div class="container-team">
      <?php
      while ($result = mysqli_fetch_assoc($sql)) {
      ?>
        <div class="team-card">
          <img src="./admin/images/<?php echo $result['gambar_about'] ?>">
          <h2><?php echo $result['nama'] ?></h2>
          <p><?php echo $result['deskripsi'] ?></p>
        </div>
      <?php } ?>
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