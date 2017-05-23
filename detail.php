<?php
//including the database connection file
include_once("config.php");
$nam = $_POST['nam'];
//$result = mysql_query("SELECT * FROM Story ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM Story WHERE name='$nam'"); // using mysqli_query instead
?>
<!doctype html>
<html>
<head>
<title></title>

</head>
<body>
    <?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 
    
		echo '<h1 name="nam">'.$res['name'].'<h1>';
        echo '<img src="'.$res['Url'].'" width="150"/>';
		echo "<p>".$res['Text']."</p>";	
	}
	?>
</body>
</html>
