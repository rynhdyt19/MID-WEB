<?php
require 'koneksi.php';

$query = "SELECT * from movie;";
$sql = mysqli_query($conn, $query);

$no = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
  <header>
    <h1>RANTv</h1>
  </header>
  <aside id="sidebar">
    <button id="toggleSidebar">Toggle Sidebar</button>
    <nav>
      <ul>
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="tvshow_admin.php">Tv Show</a></li>
        <li><a href="movie_admin.php">Movie</a></li>
        <li><a href="about_admin.php">About</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </nav>
  </aside>
  <main style="height: fit-content;">
    <section class="widget">
      <h2>Movie</h2>
      <div class="table-container">
        <div class="tombol-tambah"><a href="tambah-data-movie.php">Add</a></div>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Judul</th>
              <th>Tahun</th>
              <th>Durasi</th>
              <th>Rating</th>
              <th>Gambar</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($result = mysqli_fetch_assoc($sql)) {
            ?>
              <tr>
                <td><?php echo ++$no ?></td>
                <td><?php echo $result['judul'] ?></td>
                <td><?php echo $result['tahun'] ?></td>
                <td><?php echo $result['durasi'] ?></td>
                <td><?php echo $result['rating'] ?></td>
                <td class="gambar-admin">
                  <img width="100px" height="120px" src="images/<?php echo $result['gambar'] ?>" alt="gambar">
                </td>
                <td class="tombol-action">
                  <div class="tombol-update"><a href="tambah-data-movie.php?ubah=<?php echo $result['id'] ?>">Update</a></div>
                  <div class="tombol-delete"><a type="button" href="proses-tambah-data-movie.php?hapus=<?php echo $result['id'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')">Delete</a></div>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </section>
  </main>
  <footer>
    <p>&copy; 2023 Dashboard</p>
  </footer>
  <script src="./assets/script.js"></script>
</body>

</html>