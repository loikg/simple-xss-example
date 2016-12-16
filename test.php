<?php

$test = "4654896451 or 1=1";

$db = mysqli_connect("127.0.0.1", "root", "", "test");

$query = "SELECT * FROM USers WHERE id=" . $test;
mysqli_query($db, $query) or die('Error querying database.\n');

$result = mysqli_query($db, $query);

$row = mysqli_fetch_array($result);
print_r($row);
while ($row = mysqli_fetch_array($result)) {
	print_r($row);
}

mysqli_close($db);
?>

