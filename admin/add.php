<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("../config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$Time = mysqli_real_escape_string($mysqli, $_POST['Time']);
    $Url = mysqli_real_escape_string($mysqli, $_POST['Url']);
    $Category = mysqli_real_escape_string($mysqli, $_POST['Category']);
	$Text = mysqli_real_escape_string($mysqli, $_POST['Text']);
		
	// checking empty fields
	if(empty($name) || empty($Time) || empty($Text)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($Time)) {
			echo "<font color='red'>Time field is empty.</font><br/>";
		}
		
		if(empty($Url)) {
			echo "<font color='red'>Text field is empty.</font><br/>";
		}
        if(empty($Category)) {
			echo "<font color='red'>SElect Something.</font><br/>";
		}
        if(empty($Text)) {
			echo "<font color='red'>Text field is empty.</font><br/>";
		}
		
		//link to the previous pTime
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO Story(name,Time,Url,Category,Text) VALUES('$name','$Time','$Url','$Category','$Text')");
		
		//display success messTime
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
