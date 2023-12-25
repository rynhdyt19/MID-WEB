<?php
$query_admin = "SELECT * from admin_film;";
$sql_admin = mysqli_query($conn, $query_admin);
$hasil = mysqli_fetch_assoc($sql_admin);
?>

<header>
    <h4><?php echo $hasil['username']; ?></h4>
</header>
<style>
    header{
        color: #ffff;
        background-color: #27374D;
    }
    h4 {
        margin-right: 20px;
        text-align: right;
    }
</style>