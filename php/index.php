<?php 
	include_once './login.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	$sql = "SELECT * FROM FOOD;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result))  {
			echo $row['THEMEID'] . "<br>";
		}
	} 
?>
</body>
</html>