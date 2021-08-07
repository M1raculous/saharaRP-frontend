<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <h1>Whitelist</h1>
    <h3> 
        <span>Liste over Whitelist Ansøgere</span>
    </h3>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sahararp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<p>" . $row['steamNavn'] . "</p> <img src=".$row['steamAvatar']."> </img> <hr>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

</center>
</body>
</html>
