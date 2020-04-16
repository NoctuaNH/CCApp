<?php
//Establish connection to database
require_once("connect.php");
?>

<!Index page>
<html>
	<head>
		<title> Returns Database</title>
	<head>
<body>
	<h1>Returns</h1>
	<h2> All current returns below</h2>
	
<?php
db();
global $link;
$query = "SELECT id, date, reason FROM returns";
$result = mysqli_query($link, $query);

//Check for exisitng data 
if(mysqli_num_rows($result) >=1){
	while($row = mysqli_fetch_array($result)){
		$id = $row ['id'];
		$date = $row ['date'];
		$reason = $row['reason'];
?>

	<button type="submit" style="background: white; color: #666; font-size: 1.4em"><a href="list.php?id=<?php echo $id?>"
	a style="text-decoration:none; color:black"><?php echo $id?></button>
	<br>
	<br>
	<a href="edit.php?id=<?php echo $id?>">
	<img src="editicon.png" title="Edit" alt="Edit"></a>
	<br>
	<br>
	<a href="remove.php?id=<?php echo $id?>">
	<img src="removeicon.png" title="Remove" alt="Remove"></a>
	<br>
	<br>
<?php
	}
}
?>

<br>
<button type="submit" style="background: white; color: #666, font-size: 1.4em"><a href="upload.php" a style="text-decoration:none; color:black">Upload</a></button>
</body>
</html>