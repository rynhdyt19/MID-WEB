<!DOCTYPE html>

<?php 
require 'koneksi.php';

  $username = '';
  $email = '';
  $password = '';

if(isset($_GET['ubah'])){
  $id_admin = $_GET['ubah'];
  $query = "SELECT * FROM admin_film WHERE id = '$id_admin';";
  $sql = mysqli_query($conn, $query);
  $result = mysqli_fetch_assoc($sql);
  
  $username = $result['username'];
  $email = $result['email'];
  $password = $result['password'];
}

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/style.css">
  <title>Form Tambah Data</title>
</head>

<body>
  <h2>Form Tambah Data</h2>
  <form action="proses-tambah-data-admin.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" value="<?php echo $id_admin ?>" name="id">
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required value="<?php echo $username ?>">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required value="<?php echo $email ?>">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required value="<?php echo $password ?>">
    </div>
    
    <div class="tombol-keputusan">
      <?php
      if (isset($_GET['ubah'])) {
      ?>
        <button class="tambah" name="aksi" type="submit" value="update">Update Data</button>
      <?php
      } else {
      ?>
        <button class="tambah" name="aksi" type="submit" value="tambah">Tambah Data</button>
      <?php
      }
      ?>
      <div class="tombol-batal">
        <a href="admin.php">Batal</a>
      </div>
    </div>
  </form>
</body>

</html>