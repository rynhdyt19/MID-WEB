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
  <main>
    <section class="widget">
      <h2>About</h2>
      <div class="table-container">
        <div class="tombol-tambah"><a href="tambah-data-movie.php">Add</a></div>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Deskripsi</th>
              <th>Foto</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Sonic</td>
              <td>2017</td>
              <td>sonic.png</td>
              <td class="tombol-action">
              <div class="tombol-update"><a href="#">Update</a></div>
              <div class="tombol-delete"><a href="#">Delete</a></div>
              </td>
            </tr>
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