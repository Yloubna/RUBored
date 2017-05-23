<?php
//including the database connection file
include_once("config.php");
$Category = $_POST['Category'];
$Time = $_POST['Time'];
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM Story ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM Story WHERE Time='$Time' AND Category='$Category' ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>HomepTime</title>
</head>

<body>
<style>
    
    td{
        width:20%;
    }  
    table{
        margin-left: auto;
        margin-right: auto;
    }
    
</style>
	
    
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 
        echo '<form method="POST" action="detail.php">';
        echo '<input style="visibility: hidden;" type="text" name="nam" value="'.$res['name'].'"/>';
		echo '<h1>'.$res['name'].'<h1>';
        echo '<img src="'.$res['Url'].'" width="150"/>';
		
        $string = $res['Text'];
        $stringCut = substr($string, 0, 30);
        echo "<p>".$stringCut."</p>";	
        
        echo '<input type="submit" /> </form> ';
	}
	?>
</body>
</html>
