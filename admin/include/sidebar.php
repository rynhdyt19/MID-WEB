<aside id="sidebar" style="height: 100vh;position:fixed;margin-top:-110px;">
    <div class="logo">
        <img src="../assets/images/rantv.png" alt="">
    </div>
    <nav>
        <ul>
            <li><a href="index.php"><i class="fa-solid fa-house"></i> Dashboard</a></li>
            <li><a href="tvshow_admin.php"><i class="fa-solid fa-tv"></i> Tv Show</a></li>
            <li><a href="movie_admin.php"><i class="fa-solid fa-film"></i> Movie</a></li>
            <li><a href="about_admin.php"><i class="fa-solid fa-circle-info"></i> About</a></li>
            <li><a href="segera_admin.php"><i class="fa-solid fa-calendar-days"></i> Segera</a></li>
            <li><a href="admin.php"><i class="fa-solid fa-user"></i> Admin</a></li>
            <li><a href="logout.php"><i class="fa-solid fa-right-to-bracket"></i> Logout</a></li>
        </ul>
    </nav>
</aside>
<style>
    #sidebar{
        width: 250px;
        background-color: #fff;
        border-right: .5px solid #EEE2DE;
    }
    #toggleSidebar {
        margin-left: 10px;
    }

    main{
        margin-left: 250px;
    }

    .logo{
        margin: 50px 0 0 40px ;
    }

    .logo img{
        width: 200px;
        height: 90px;
    }

    #sidebar nav ul li a:hover{
        background-color: #27374D;
        border-radius: 5px;
    }
</style>