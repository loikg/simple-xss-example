<?php

$name = '" or ""="';
$pass = '" or ""="';

$db = mysqli_connect("127.0.0.1", "root", "", "test");

$query = "SELECT * FROM USers WHERE name=\"" . $name . "\" AND pass=\"" . $pass . "\"";
mysqli_query($db, $query) or die('Error querying database.\n');

$result = mysqli_query($db, $query);

$row = mysqli_fetch_array($result);
print_r($row);
while ($row = mysqli_fetch_array($result)) {
	print_r($row);
}

mysqli_close($db);
?>

