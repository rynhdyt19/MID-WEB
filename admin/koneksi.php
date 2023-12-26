<?php
$servername = "localhost"; // Nama server
$username = "root"; // Username MySQL
$password = ""; // Password MySQL
$dbname = "web_teori"; // Nama database

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

mysqli_select_db($conn, $dbname);
