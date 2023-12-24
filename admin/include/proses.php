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
            $ekstensi = $split[count($split) - 1];

            $gambar = $result['judul'] . '.' . $ekstensi;
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

//proses tv show
function tambah_data_tvshow($data, $files)
{
    if ($_POST['aksi'] == "tambah") {

        $judul = $data['judul_tvshow'];
        $tahun = $data['tahun_tvshow'];
        $durasi = $data['durasi_tvshow'];
        $rating = $data['rating_tvshow'];

        $split = explode('.', $files['gambar_tvshow']['name']);

        $ekstensi = $split[count($split) - 1];

        $gambar = $judul . '.' . $ekstensi;

        $dir = "images/";
        $tmpFile = $files['gambar_tvshow']['tmp_name'];

        move_uploaded_file($tmpFile, $dir . $gambar);

        $query = "INSERT INTO tv_show VALUES(null, '$gambar', '$judul', '$tahun', '$durasi', '$rating');";
        $sql = mysqli_query($GLOBALS['conn'], $query);

        return true;
    }
}

function update_data_tvshow($data, $files)
{
    if ($data['aksi'] == 'update') {
        $id_tvshow = $data['id'];
        $judul = $data['judul_tvshow'];
        $tahun = $data['tahun_tvshow'];
        $durasi = $data['durasi_tvshow'];
        $rating = $data['rating_tvshow'];

        $queryShow = "SELECT * FROM tv_show WHERE id = '$id_tvshow';";
        $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        if ($files['gambar_tvshow']['name'] == "") {
            $gambar = $result['gambar_tvshow'];
        } else {
            $split = explode('.', $files['gambar_tvshow']['name']);
            $ekstensi = $split[count($split) - 1];

            $gambar = $result['judul_tvshow'] . '.' . $ekstensi;
            unlink("images/" . $result['gambar_tvshow']);
            move_uploaded_file($files['gambar_show']['tmp_name'], 'images/' . $gambar);
        }

        $query = "UPDATE tv_show SET gambar_tvshow='$gambar', judul_tvshow='$judul', tahun_tvshow='$tahun', durasi_tvshow='$durasi', rating_tvshow='$rating' WHERE id = '$id_tvshow';";
        $sql = mysqli_query($GLOBALS['conn'], $query);
    }

    return true;
}

function hapus_data_tvshow($ambil)
{
    $id_tvshow = $ambil['hapus'];

    $queryShow = "SELECT * FROM tv_show WHERE id = '$id_tvshow';";
    $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("images/" . $result['gambar_tvshow']);

    $query = "DELETE FROM tv_show WHERE id = '$id_tvshow';";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
}

//proses film segera
function tambah_data_segera($data, $files)
{
    if ($_POST['aksi'] == "tambah") {

        $judul = $data['judul_segera'];
        $tahun = $data['tahun_segera'];
        $durasi = $data['durasi_segera'];
        $rating = $data['rating_segera'];

        $split = explode('.', $files['gambar_segera']['name']);

        $ekstensi = $split[count($split) - 1];

        $gambar = $judul . '.' . $ekstensi;

        $dir = "images/";
        $tmpFile = $files['gambar_segera']['tmp_name'];

        move_uploaded_file($tmpFile, $dir . $gambar);

        $query = "INSERT INTO segera VALUES(null, '$judul', '$tahun', '$durasi', '$rating', '$gambar');";
        $sql = mysqli_query($GLOBALS['conn'], $query);

        return true;
    }
}

function update_data_segera($data, $files)
{
    if ($data['aksi'] == 'update') {
        $id_segera = $data['id'];
        $judul = $data['judul_segera'];
        $tahun = $data['tahun_segera'];
        $durasi = $data['durasi_segera'];
        $rating = $data['rating_segera'];

        $queryShow = "SELECT * FROM segera WHERE id = '$id_segera';";
        $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        if ($files['gambar_segera']['name'] == "") {
            $gambar = $result['gambar_segera'];
        } else {
            $split = explode('.', $files['gambar_segera']['name']);
            $ekstensi = $split[count($split) - 1];

            $gambar = $result['judul_segera'] . '.' . $ekstensi;
            unlink("images/" . $result['gambar_segera']);
            move_uploaded_file($files['gambar_show']['tmp_name'], 'images/' . $gambar);
        }

        $query = "UPDATE segera SET judul_segera='$judul', tahun_segera='$tahun', durasi_segera='$durasi', rating_segera='$rating', gambar_segera='$gambar' WHERE id = '$id_segera';";
        $sql = mysqli_query($GLOBALS['conn'], $query);
    }

    return true;
}

function hapus_data_segera($ambil)
{
    $id_segera = $ambil['hapus'];

    $queryShow = "SELECT * FROM segera WHERE id = '$id_segera';";
    $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("images/" . $result['gambar_segera']);

    $query = "DELETE FROM segera WHERE id = '$id_segera';";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
}


//proses about
function tambah_data_about($data, $files)
{
    if ($_POST['aksi'] == "tambah") {

        $nama = $data['nama'];
        $deskripsi = $data['deskripsi'];

        $split = explode('.', $files['gambar_about']['name']);

        $ekstensi = $split[count($split) - 1];

        $gambar = $nama . '.' . $ekstensi;

        $dir = "images/";
        $tmpFile = $files['gambar_about']['tmp_name'];

        move_uploaded_file($tmpFile, $dir . $gambar);

        $query = "INSERT INTO about VALUES(null, '$nama', '$deskripsi', '$gambar');";
        $sql = mysqli_query($GLOBALS['conn'], $query);

        return true;
    }
}

function update_data_about($data, $files)
{
    if ($data['aksi'] == 'update') {
        $id_about = $data['id'];
        $nama = $data['nama'];
        $deskripsi = $data['deskripsi'];

        $queryShow = "SELECT * FROM about WHERE id = '$id_about';";
        $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        if ($files['gambar_about']['name'] == "") {
            $gambar = $result['gambar_about'];
        } else {
            $split = explode('.', $files['gambar_about']['name']);
            $ekstensi = $split[count($split) - 1];

            $gambar = $result['nama'] . '.' . $ekstensi;
            unlink("images/" . $result['gambar_about']);
            move_uploaded_file($files['gambar_about']['tmp_name'], 'images/' . $gambar);
        }

        $query = "UPDATE about SET nama='$nama', deskripsi='$deskripsi', gambar_about='$gambar' WHERE id = '$id_about';";
        $sql = mysqli_query($GLOBALS['conn'], $query);
    }

    return true;
}

function hapus_data_about($ambil)
{
    $id_about = $ambil['hapus'];

    $queryShow = "SELECT * FROM about WHERE id = '$id_about';";
    $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("images/" . $result['gambar_about']);

    $query = "DELETE FROM about WHERE id = '$id_about';";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
}
