<?php
session_start();
session_unset();
session_destroy();
// header('Location: login.php');
echo '<script>
// JavaScript untuk menampilkan pesan konfirmasi sebelum logout
window.onload = function() {
  if (confirm("Apakah Anda yakin ingin logout?")) {
    window.location.href = "login.php"; // Redirect ke halaman login setelah logout
  } else {
    window.location.href = "index.php"; // Redirect ke halaman utama jika tidak logout
  }
};
</script>';
exit;
?>