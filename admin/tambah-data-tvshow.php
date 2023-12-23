<!DOCTYPE html>

<?php 
require 'koneksi.php';

  $judul = '';
  $tahun = '';
  $durasi = '';
  $rating = '';

if(isset($_GET['ubah'])){
  $id_tvshow = $_GET['ubah'];
  $query = "SELECT * FROM tv_show WHERE id = '$id_tvshow';";
  $sql = mysqli_query($conn, $query);
  $result = mysqli_fetch_assoc($sql);
  
  $judul = $result['judul_tvshow'];
  $tahun = $result['tahun_tvshow'];
  $durasi = $result['durasi_tvshow'];
  $rating = $result['rating_tvshow'];
}

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/style.css">
  <title>Form Tambah Data Tv Show</title>
</head>

<body>
  <h2>Form Tambah Data Tv Show</h2>
  <form action="proses-tambah-data-tvshow.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" value="<?php echo $id_tvshow ?>" name="id">
    <div class="form-group">
      <label for="judul_tvshow">Judul Tv Show</label>
      <input type="text" id="judul_tvshow" name="judul_tvshow" required value="<?php echo $judul ?>">
    </div>
    <div class="form-group">
      <label for="tahun_tvshow">Tahun</label>
      <input type="number" id="tahun_tvshow" name="tahun_tvshow" required value="<?php echo $tahun ?>">
    </div>
    <div class="form-group">
      <label for="durasi_tvshow">Durasi</label>
      <input type="text" id="durasi_tvshow" name="durasi_tvshow" required value="<?php echo $durasi ?>">
    </div>
    <div class="form-group">
      <label for="rating_tvshow">Rating</label>
      <input type="text" id="rating_tvshow" name="rating_tvshow" required value="<?php echo $rating ?>">
    </div>
    <div class="form-group">
      <label for="gambar_tvshow">gambar</label>
      <input type="file" id="gambar_tvshow" name="gambar_tvshow" <?php if(!isset($_GET['ubah'])){echo "required";} ?> accept="image/*">
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
        <a href="tvshow_admin.php">Batal</a>
      </div>
    </div>
  </form>
</body>

</html>