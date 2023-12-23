<?php
require 'koneksi.php'; 

if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "tambah") {

        $judul = $_POST['judul'];
        $tahun = $_POST['tahun'];
        $durasi = $_POST['durasi'];
        $rating = $_POST['rating'];
        $gambar = $_FILES['gambar']['name'];

        $dir = "images/";
        $tmpFile = $_FILES['gambar']['tmp_name'];

        move_uploaded_file($tmpFile, $dir.$gambar);

        $query = "INSERT INTO movie VALUES(null, '$gambar', '$judul', '$tahun', '$durasi', '$rating');";
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            header('location: movie_admin.php');
        } else {
            echo $query;
        }
    } elseif ($_POST['aksi'] == "update") {
        $id_movie = $_POST['id'];
        $judul = $_POST['judul'];
        $tahun = $_POST['tahun'];
        $durasi = $_POST['durasi'];
        $rating = $_POST['rating'];

        $queryShow = "SELECT * FROM movie WHERE id = '$id_movie';";
        $sqlShow = mysqli_query($conn, $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        if($_FILES['gambar']['name'] == ""){
            $gambar = $result['gambar'];
        }else{
            $gambar = $_FILES['gambar']['name'];
            unlink("images/".$result['gambar']);
            move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/'.$_FILES['gambar']['name']);
        }

        $query = "UPDATE movie SET gambar='$gambar', judul='$judul', tahun='$tahun', durasi='$durasi', rating='$rating' WHERE id = '$id_movie';";
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            header('location: movie_admin.php');
        } else {
            echo $query;
        }
    }
}

if (isset($_GET['hapus'])) {
    $id_movie = $_GET['hapus'];

    $queryShow = "SELECT * FROM movie WHERE id = '$id_movie';";
    $sqlShow = mysqli_query($conn, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("images/".$result['gambar']);

    $query = "DELETE FROM movie WHERE id = '$id_movie';";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header('location: movie_admin.php');
    } else {
        echo $query;
    }
}
