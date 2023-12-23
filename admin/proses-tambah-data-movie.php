<?php
include 'include/proses.php';
require 'koneksi.php';

if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "tambah") {
        $berhasil = tambah_data_movie($_POST, $_FILES);

        if ($berhasil) {
            header('location: movie_admin.php');
        } else {
            echo $berhasil;
        }
    }elseif($_POST['aksi'] == "update"){
        $berhasil = update_data_movie($_POST, $_FILES);

        if ($berhasil) {
            header('location: movie_admin.php');
        } else {
            echo $berhasil;
        }
    }
}

if (isset($_GET['hapus'])) {
    $berhasil = hapus_data_movie($_GET);

    if ($berhasil) {
        header('location: movie_admin.php');
    } else {
        echo $berhasil;
    }
}
