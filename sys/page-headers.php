<nav id="sidebar">
    <div class="sidebar-header">
        <h6>AgriEase systems</h6>
    </div>

    <ul class="list-unstyled components">
        <p></p>
        <li class="active">
            <a href="dashboard.php" class="fa fa-th"> Dashboard</a>

        </li>
         <li>
            <a href="#pageSubmenuRue"  data-toggle="collapse" aria-expanded="false" class="fa fa-user-circle-o dropdown-toggle"> Farmers</a>
            <ul class="collapse list-unstyled" id="pageSubmenuRue">
                <li>
                    <a href="farms_add.php">Add</a>
                </li>

                <li>
                    <a href="farms_view.php">view</a>
                </li>
            </ul>
        </li>
         
       <li>
            <a href="#pageSubmenuRuebaeRamus"  data-toggle="collapse" aria-expanded="false" class="fa fa-thermometer-half dropdown-toggle"> Weather Updates</a>
            <ul class="collapse list-unstyled" id="pageSubmenuRuebaeRamus">
                <li>
                    <a href="weather_add.php">Add</a>
                </li>

                <li>
                    <a href="weather_view.php">view</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#pageSubmenuRuebae"  data-toggle="collapse" aria-expanded="false" class="fa fa-bug dropdown-toggle"> Agricultural Tips</a>
            <ul class="collapse list-unstyled" id="pageSubmenuRuebae">
                <li>
                    <a href="pest_add.php">Add</a>
                </li>

                <li>
                    <a href="pest_view.php">view</a>
                </li>
            </ul>
        </li>
        
        <li>
            <a href="#pageSubmenu1"  data-toggle="collapse" aria-expanded="false" class="fa fa-users dropdown-toggle"> Users</a>
            <ul class="collapse list-unstyled" id="pageSubmenu1">
                <li>
                    <a href="users_add.php">Add</a>
                </li>
                <li>
                    <a href="users_view.php">view</a>
                </li>

            </ul>
        </li>

        <li>
            <a href="#pageSubmenu2"  data-toggle="collapse" aria-expanded="false" class="fa fa-plant dropdown-toggle"> Crop</a>
            <ul class="collapse list-unstyled" id="pageSubmenu2">
                <li>
                    <a href="crop_add.php">Add</a>
                </li>
                <li>
                    <a href="crop_view.php">view</a>
                </li>

            </ul>
        </li>

        </ul>
</nav>


<!-- Page Content  -->
<div id="content">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        
    

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="logout.php" class="fa fa-power-off">Welcome <?php echo $_SESSION['name'].' '.$_SESSION['surname'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="date_time"></a>
                <script type="text/javascript">window.onload = date_time('date_time');</script>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php" class="fa fa-power-off">logout</a>
            </li>
        </ul>
    </div>
    </div>
</nav>