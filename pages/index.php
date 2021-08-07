<!DOCTYPE html>
<html lang="en">
<?php
    require ('steamauth/steamauth.php');
	# You would uncomment the line beneath to make it refresh the data every time the page is loaded
	// unset($_SESSION['steam_uptodate']);
?>
<?php
if(!isset($_SESSION['steamid'])) {
    echo "<script>window.location.href='index.php?login';</script>";
}
?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- STYLES CSS -->
        <link rel="stylesheet" href="../assets/css/styles.css">

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
                        <a href="#" class="nav__link active">
                            <i class='bx bx-grid-alt nav__icon'></i>
                            <span class="nav__text">Dashboard</span>
                        </a>
                        <a href="spillerinformation.php" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__text">Spiller Information</span>
                        </a>
                        <a href="serverinformation.php" class="nav__link">
                            <i class='bx bx-server nav__icon' ></i>
                            <span class="nav__text">Server Information</span>
                        </a>                
                    </ul>
                </div>
         <?php
            include ('steamauth/userInfo.php');
            echo "<img href=" . $steamprofile['profileurl'] . " </img>";

        echo "<span class='nav__text__user'>". $steamprofile['personaname'] . "</span></br>";

            echo "<img  class='nav__icon__user' src=" . $steamprofile['avatarfull'] . "></img>";
            // echo "<img href=" . $steamprofile['profileurl'] . " </img>";
// <img class="nav__icon__user"src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/36/364021fe039836de136de68f0e2f87a5488dbdaf_full.jpg" alt="user picture">
?>
<hr> </hr>
<span class="nav__text__user">M1raculous</span>

            </a>
                <a href="?logout" class="nav__link">           
                    <i class='bx bx-log-out-circle nav__icon'></i>
                    <span class="nav__text">Logout</span>
                </a>
            </nav>
        </div>
        
        <h1 class="dashboard_title">Dashboard</h1>
        <p class="dashboard_guide_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Atque optio odio officiis nostrum nesciunt quam libero. 
            Cumque impedit veritatis, quibusdam nulla accusantium illo. 
            In velit laboriosam obcaecati quaerat eaque beatae.Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Atque optio odio officiis nostrum nesciunt quam libero. 
            Cumque impedit veritatis, quibusdam nulla accusantium illo. 
            In velit laboriosam obcaecati quaerat eaque beatae.</p>
    </body>
    <!-- MAIN JS -->
    <script src="../assets/js/main.js"></script>
    <!-- MAIN PHP -->
    <!DOCTYPE html>
<html lang="en">

<head>
	<title>GFG- Store Data</title>
</head>

<body>
	<center>
		<h1>Storing Form data in Database</h1>

		<form action="insert.php" method="post">
            <h2>Karakter Information</h2>		
<p>			
    <label for="firstName">Navn:</label>
	<input type="text" name="firstname" id="firstName">
			</p>
            <p>
    			<label for="purporse">Formål:</label>
				<input type="text" name="purporse" id="purporse">
			</p>
            <p>
    			<label for="background">Karakter Baggrund:</label>
				<input type="text" name="background" id="background">
			</p>
<p>
		<h2>Information om dig</h2>
            <label for="age">Alder:</label>
                <input type="text" name="age" id="age">
            </p>
<p>
    <label for="discord">Discord ID & Navn</label>
				<input type="text" name="discord" id="discordId" placeholder="415443330026045440 og M1raculous#1337">
			</p>
			<input type="submit" value="Submit">
		</form>
	</center>
</body>

</html>

<?php
     if(!isset($_SESSION['steamid'])) {
        loginbutton(); //login button
        
    }  else {
    
        //Protected content
        // echo "Welcome back " . $steamprofile['personaname'] . "</br>";
        // echo "here is your avatar: </br>" . '<img src="'.$steamprofile['avatarfull'].'" title="" alt="" /><br>'; // Display their avatar!
    
    } ?>
</html>