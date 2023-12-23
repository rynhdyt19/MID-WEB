<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Sign In</title>
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
</head>

<body>
  <header class="header">
    <div class="container">
      <a href="./index.html" class="logo">
        <img src="assets/images/rantv.png" alt="Filmlane logo">
      </a>
    </div>
  </header>
  <section class="sign-in-section">
    <div class="container">
      <form class="sign-in-form" action="movies.html" method="GET">
        <h2 class="h2">Sign In</h2><br>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button class="btn btn-primary" type="submit">Sign In</button>
      </form>
    </div>
  </section>
  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand-wrapper">

         

        <div class="divider"></div>

        <div class="quicklink-wrapper">
          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

      </div>
    </div>
    <script src="./assets/js/script.js"></script>

    <!-- 
      - ionicon link
    -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  
  
    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2023 <a href="#">RANTv</a>
        </p>
      </div>
    </div>

  </footer>
</body>

</html>
