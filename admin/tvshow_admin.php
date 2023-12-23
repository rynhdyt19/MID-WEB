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
  <?php include 'include/sidebar.php'; ?>
  <main>
    <section class="widget">
      <h2>Tv Show</h2>
      <div class="table-container">
        <div class="tombol-tambah"><a href="tambah-data-tvshow.php">Add</a></div>
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
            <tr>
              <td>1</td>
              <td>Sonic</td>
              <td>2017</td>
              <td>306 Menit</td>
              <td>7.8</td>
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
  <script>
   // script.js
document.addEventListener('DOMContentLoaded', function() {
  var sidebarLinks = document.querySelectorAll('#sidebar nav ul li a');
  sidebarLinks.forEach(function(link) {
    link.addEventListener('click', function() {
      sidebarLinks.forEach(function(item) {
        item.classList.remove('active');
      });
      this.classList.add('active');
    });
  });
});
  </script>
</body>

</html>