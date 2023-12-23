<?php
require 'koneksi.php';

if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "tambah") {
        $judul = $_POST['judul'];
        $tahun = $_POST['tahun'];
        $durasi = $_POST['durasi'];
        $rating = $_POST['rating'];
        $gambar = "series-4.png";

        $query = "INSERT INTO movie VALUES(null, '$gambar', '$judul', '$tahun', '$durasi', '$rating');";
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            header('location: movie_admin.php');
        } else {
            echo $query;
        }
    } elseif ($_POST['aksi'] == "update") {
        echo "update data";
    }
}

if (isset($_GET['hapus'])) {
    $id_movie = $_GET['hapus'];
    $query = "DELETE FROM movie WHERE id = '$id_movie';";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header('location: movie_admin.php');
    } else {
        echo $query;
    }
}
