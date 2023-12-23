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
      <h2>Dashboard</h2>
      <div class="kartu">
        <div class="card">
            <h3>Card 1</h3>
            <p>Content of Card 1 goes here.</p>
          </div>
          <div class="card">
            <h3>Card 2</h3>
            <p>Content of Card 2 goes here.</p>
          </div>
          <div class="card">
            <h3>Card 3</h3>
            <p>Content of Card 3 goes here.</p>
          </div>
      </div>
    </section>
  </main>
  <footer>
    <p>&copy; 2023 Dashboard</p>
  </footer>
  <script src="./assets/script.js"></script>
</body>
</html>
