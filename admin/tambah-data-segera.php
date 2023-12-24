<!DOCTYPE html>

<?php 
require 'koneksi.php';

  $judul = '';
  $tahun = '';
  $durasi = '';
  $rating = '';

if(isset($_GET['ubah'])){
  $id_segera = $_GET['ubah'];
  $query = "SELECT * FROM segera WHERE id = '$id_segera';";
  $sql = mysqli_query($conn, $query);
  $result = mysqli_fetch_assoc($sql);
  
  $judul = $result['judul_segera'];
  $tahun = $result['tahun_segera'];
  $durasi = $result['durasi_segera'];
  $rating = $result['rating_segera'];
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
  <form action="proses-tambah-data-segera.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" value="<?php echo $id_segera ?>" name="id">
    <div class="form-group">
      <label for="judul_segera">Judul</label>
      <input type="text" id="judul_segera" name="judul_segera" required value="<?php echo $judul ?>">
    </div>
    <div class="form-group">
      <label for="tahun_segera">Tahun</label>
      <input type="number" id="tahun_segera" name="tahun_segera" required value="<?php echo $tahun ?>">
    </div>
    <div class="form-group">
      <label for="durasi_segera">Durasi</label>
      <input type="text" id="durasi_segera" name="durasi_segera" required value="<?php echo $durasi ?>">
    </div>
    <div class="form-group">
      <label for="rating_segera">Rating</label>
      <input type="text" id="rating_segera" name="rating_segera" required value="<?php echo $rating ?>">
    </div>
    <div class="form-group">
      <label for="gambar_segera">Gambar</label>
      <input type="file" id="gambar_segera" name="gambar_segera" <?php if(!isset($_GET['ubah'])){echo "required";} ?> accept="image/*">
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
        <a href="segera_admin.php">Batal</a>
      </div>
    </div>
  </form>
</body>

</html>