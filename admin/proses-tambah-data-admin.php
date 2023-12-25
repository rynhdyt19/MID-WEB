<?php
include 'include/proses.php';
require 'koneksi.php';
session_start();


if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "tambah") {
        $berhasil = tambah_data_admin($_POST, $_FILES);

        if ($berhasil) {
            $_SESSION['eksekusi'] = "Data Berhasil Ditambahkan";
            header('location: admin.php');
        } else {
            echo $berhasil;
        }
    }elseif($_POST['aksi'] == "update"){
        $berhasil = update_data_admin($_POST, $_FILES);

        if ($berhasil) {
            $_SESSION['eksekusi'] = "Data Berhasil Diubah";
            header('location: admin.php');
        } else {
            echo $berhasil;
        }
    }
}

if (isset($_GET['hapus'])) {
    $berhasil = hapus_data_admin($_GET);

    if ($berhasil) {
        $_SESSION['eksekusi'] = "Data Berhasil Dihapus";
        header('location: admin.php');
    } else {
        echo $berhasil;
    }
}
