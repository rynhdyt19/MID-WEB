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
    <form action="proses_tambah_data.php" method="POST">
        <div class="form-group">
            <label for="judul_movie">Judul Tv Show</label>
            <input type="text" id="judul_movie" name="judul_movie" required>
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
            <label for="gambar_tvshow">Gambar</label>
            <input type="file" id="gambar_tvshow" name="gambar_tvshow" required>
        </div>
        <div class="tombol-keputusan">
            <input class="tambah" type="submit" value="Tambah Data">
            <div class="tombol-batal">
                <a href="tvshow_admin.php">Batal</a>
            </div>
        </div>
    </form>
</body>

</html>