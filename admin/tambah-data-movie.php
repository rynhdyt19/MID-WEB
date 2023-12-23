<!DOCTYPE html>

<?php 
require 'koneksi.php';

  $judul = '';
  $tahun = '';
  $durasi = '';
  $rating = '';

if(isset($_GET['ubah'])){
  $id_movie = $_GET['ubah'];
  $query = "SELECT * FROM movie WHERE id = '$id_movie';";
  $sql = mysqli_query($conn, $query);
  $result = mysqli_fetch_assoc($sql);
  
  $judul = $result['judul'];
  $tahun = $result['tahun'];
  $durasi = $result['durasi'];
  $rating = $result['rating'];
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
  <form action="proses-tambah-data-movie.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" value="<?php echo $id_movie ?>" name="id">
    <div class="form-group">
      <label for="judul">Judul Movie</label>
      <input type="text" id="judul" name="judul" required value="<?php echo $judul ?>">
    </div>
    <div class="form-group">
      <label for="tahun">Tahun</label>
      <input type="number" id="tahun" name="tahun" required value="<?php echo $tahun ?>">
    </div>
    <div class="form-group">
      <label for="durasi">Durasi</label>
      <input type="text" id="durasi" name="durasi" required value="<?php echo $durasi ?>">
    </div>
    <div class="form-group">
      <label for="rating">Rating</label>
      <input type="text" id="rating" name="rating" required value="<?php echo $rating ?>">
    </div>
    <div class="form-group">
      <label for="gambar">gambar</label>
      <input type="file" id="gambar" name="gambar" <?php if(!isset($_GET['ubah'])){echo "required";} ?> accept="image/*">
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
        <a href="movie_admin.php">Batal</a>
      </div>
    </div>
  </form>
</body>

</html>