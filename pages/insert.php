<!DOCTYPE html>
<html>
<body>
	<center>
		<?php
		include ('index.php');
		include ('steamauth/userInfo.php');
		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "sahararp");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$firstname = $_REQUEST['firstname'];
		$background = $_REQUEST['background'];
		$discord = $_REQUEST['discord'];
		$purpose = $_REQUEST['purporse'];
		$age = $_REQUEST['age'];
		$steamID = $steamprofile['steamid'];
		$steamName = $steamprofile['personaname'];
		$steamAvatar = $steamprofile['avatarfull'];
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO users VALUES ('$firstname', '$background', '$discord', '$purpose', '$age', '$steamID', '$steamName', '$steamAvatar')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Du har nu ansøgt :)</h3>"

			echo nl2br("\n$firstname\n $discord \n $background \n $purpose \n $age");
		} else{
			echo "Fejl: $sql. MySQL Fejl:"
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
