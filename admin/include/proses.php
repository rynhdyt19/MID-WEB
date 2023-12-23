<?php
require 'koneksi.php';

function tambah_data_movie($data, $files)
{
    if ($_POST['aksi'] == "tambah") {

        $judul = $data['judul'];
        $tahun = $data['tahun'];
        $durasi = $data['durasi'];
        $rating = $data['rating'];

        $split = explode('.', $files['gambar']['name']);

        $ekstensi = $split[count($split) - 1];

        $gambar = $judul . '.' . $ekstensi;

        $dir = "images/";
        $tmpFile = $files['gambar']['tmp_name'];

        move_uploaded_file($tmpFile, $dir . $gambar);

        $query = "INSERT INTO movie VALUES(null, '$gambar', '$judul', '$tahun', '$durasi', '$rating');";
        $sql = mysqli_query($GLOBALS['conn'], $query);

        return true;
    }
}

function update_data_movie($data, $files)
{
    if ($data['aksi'] == 'update') {
        $id_movie = $data['id'];
        $judul = $data['judul'];
        $tahun = $data['tahun'];
        $durasi = $data['durasi'];
        $rating = $data['rating'];

        $queryShow = "SELECT * FROM movie WHERE id = '$id_movie';";
        $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        if ($files['gambar']['name'] == "") {
            $gambar = $result['gambar'];
        } else {
            $split = explode('.', $files['gambar']['name']);
            $ekstensi = $split[count($split)-1];

            $gambar = $result['judul'].'.'.$ekstensi;
            unlink("images/" . $result['gambar']);
            move_uploaded_file($files['gambar']['tmp_name'], 'images/' . $gambar);
        }

        $query = "UPDATE movie SET gambar='$gambar', judul='$judul', tahun='$tahun', durasi='$durasi', rating='$rating' WHERE id = '$id_movie';";
        $sql = mysqli_query($GLOBALS['conn'], $query);
    }

    return true;
}

function hapus_data_movie($ambil)
{
    $id_movie = $ambil['hapus'];

    $queryShow = "SELECT * FROM movie WHERE id = '$id_movie';";
    $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("images/" . $result['gambar']);

    $query = "DELETE FROM movie WHERE id = '$id_movie';";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
}
