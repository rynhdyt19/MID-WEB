<!DOCTYPE html>

<?php 
require 'koneksi.php';

  $nama = '';
  $deskripsi = '';
  $gambar = '';

if(isset($_GET['ubah'])){
  $id_about = $_GET['ubah'];
  $query = "SELECT * FROM about WHERE id = '$id_about';";
  $sql = mysqli_query($conn, $query);
  $result = mysqli_fetch_assoc($sql);
  
  $nama = $result['nama'];
  $deskripsi = $result['deskripsi'];
  $gambar = $result['gambar_about'];
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
  <form action="proses-tambah-data-about.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" value="<?php echo $id_about ?>" name="id">
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" id="nama" name="nama" required value="<?php echo $nama ?>">
    </div>
    <div class="form-group">
      <label for="deskripsi">Deskripsi</label>
      <input type="text" id="deskripsi" name="deskripsi" required value="<?php echo $deskripsi ?>">
    </div>
    <div class="form-group">
      <label for="gambar_about">Foto</label>
      <input type="file" id="gambar_about" name="gambar_about" <?php if(!isset($_GET['ubah'])){echo "required";} ?> accept="image/*">
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
        <a href="about_admin.php">Batal</a>
      </div>
    </div>
  </form>
</body>

</html>