<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/style.css">
  <title>Form Tambah Data</title>
</head>

<body>
  <h2>Form Tambah Data</h2>
  <form action="proses-tambah-data-movie.php" method="POST">
    <div class="form-group">
      <label for="judul">Judul Movie</label>
      <input type="text" id="judul" name="judul" required>
    </div>
    <div class="form-group">
      <label for="tahun">Tahun</label>
      <input type="number" id="tahun" name="tahun" required>
    </div>
    <div class="form-group">
      <label for="durasi">Durasi</label>
      <input type="text" id="durasi" name="durasi" required>
    </div>
    <div class="form-group">
      <label for="rating">Rating</label>
      <input type="text" id="rating" name="rating" required>
    </div>
    <div class="form-group">
      <label for="gambar">gambar</label>
      <input type="file" id="gambar" name="gambar">
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