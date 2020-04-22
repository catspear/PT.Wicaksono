<?php
$conn = mysqli_connect("localhost", "root", "", "login");

$sql = mysqli_query($conn, "SELECT * FROM `users`");
while($row =mysqli_fetch_array($sql))
{
	
	echo $row['username'];
	echo "<br>";
}
?>