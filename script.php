<?php
/**
 * Created by PhpStorm.
 * User: zacharyspangler
 * Date: 10/18/17
 * Time: 12:13 PM
 */

//variables
$countId = 0;
$dateTimeOfPun = date("m.d.y");
$countofPun = 1;

$countId = ++$countId;

echo $countId . PHP_EOL;
echo $dateTimeOfPun . PHP_EOL;
echo $countofPun . PHP_EOL;

/**
//create new connection
$conn = new mysqli($)

//check the connection
if ($conn->connect_error) {
	die("Connection failed: " . mysqli_connect_error());
}

//
$sql = "INSET INTO puncounter (countId, dateofpun, countofpun) VALUES (
$countId, Now(),$countofPun)

if ($conn->query($sql) === TRUE {
	echo "Pun has been added";
} else {
	echo "Connection failed: " . mysqli_connect_error());
}
	
$conn->close()
**/
?>