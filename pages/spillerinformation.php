<!DOCTYPE html>
<html lang="en">
<?php
    require ('steamauth/steamauth.php');
	# You would uncomment the line beneath to make it refresh the data every time the page is loaded
	// unset($_SESSION['steam_uptodate']);
?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- STYLES CSS -->
        <link rel="stylesheet" href="../assets/css/styles.css">
        <?php
        if(!isset($_SESSION['steamid'])) {
            echo "<script>window.location.href='serverinformation.php?login';</script>";
        }
        ?>
        <!-- BOX ICONS CSS-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <title>Dashboard</title>
    </head>
    <body id="body">
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav__logo">
                        <img src="../assets/icons/1346931454.png" alt="" class="nav__logo-icon">
                        <span class="nav__logo-text">SaharaRP</span>
                    </a>
                    <ul class="nav__list">
                        <a href="index.php" class="nav__link">
                            <i class='bx bx-grid-alt nav__icon'></i>
                            <span class="nav__text">Dashboard</span>
                        </a>
                        <a href="#" class="nav__link active">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__text">Spiller Information</span>
                        </a>
                        <a href="serverinformation.php" class="nav__link">
                            <i class='bx bx-server nav__icon' ></i>
                            <span class="nav__text">
                                Server Information
                            </span>
                        </a>                
                    </ul>
                    <a href="#" class="">
                        <?php

            include ('steamauth/userInfo.php');
            echo "<a href=" . $steamprofile['profileurl'] . "";

        echo "<span class='nav__text__user'>". $steamprofile['personaname'] . "</span></br>";

            echo "<img  href='". $steamprofile['profileurl'] ."'class='nav__icon__user' src=" . $steamprofile['avatarfull'] . "></img>";
                         ?>
                        </a>
                </div>
                <a href="?logout" class="nav__link">           
                    <i class='bx bx-log-out-circle nav__icon'></i>
                    <span class="nav__text">Logout</span>
                </a>
                
            </nav>
        </div>
        <h1 class="player_information_header">Spiller Information</h1>

        <div id="player_information" class="dashboard_box_players">
        </div>
    </body>
    <!-- MAIN JS -->
    <script src="../assets/js/main.js"></script>
    <!-- PLAYER JS -->
    <script src="../assets/js/player-information.js"></script>
</html>