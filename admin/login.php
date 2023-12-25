<?php
require 'koneksi.php';
session_start();

// $admin_username = 'username';
// $admin_password = 'password';
$keterangan = "username atau password salah!";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa apakah username dan password cocok
    $query = "SELECT * FROM admin_film WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $_SESSION['loggedin'] = true;
        header('Location: index.php');
        exit;
    } else {
        $_SESSION['error_message'] = "Username atau password salah!";
        header('Location: login.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
  <div class="login-container">
    <div class="logo">
        <img src="../assets/images/rantv.png" alt="">
    </div>
    <h2>Login</h2>
    <?php
    if (isset($_SESSION['error_message'])) {
        echo '<div class="notif">';
        echo '<div class="alert alert-success alert-white rounded">';
        echo '<div class="icon"><i class="fa fa-check"></i></div>';
        echo $_SESSION['error_message'];
        echo '</div>';
        echo '</div>';
        unset($_SESSION['error_message']); // Hapus pesan kesalahan setelah ditampilkan
    }
    ?>
    <form action="login.php" method="POST">
      <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" autocomplete="off" required>
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit">Login</button>
    </form>
  </div>
</body>

<style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.login-container {
    width: 400px;
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

img{
    margin-left: 45px;
}

h2 {
  text-align: center;
  margin-bottom: 20px;
}

.input-group {
  margin-bottom: 15px;
}

.input-group label {
  display: block;
  margin-bottom: 5px;
  color: #333;
}

.input-group input {
  width: 95%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

button {
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #0056b3;
}

.notif{
    margin-top: 20px;
  }
  .alert {
    display: flex;
    align-items: center;
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
  }

  .alert .icon i{
    color: #FFEADD;
    background-color: #FCAEAE;
    padding: 5px;
    border-radius: 50%;
    margin-right: 20px;
  }

  .alert-success {
    background-color: #FF6666;
    border-color: #CD1818;
    color: #FFEADD;
  }

  .alert-success hr {
    border-top-color: #c9e2b3;
  }

  .alert-success .alert-link {
    color: #2b542c;
  }

</style>

</html>