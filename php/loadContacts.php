<?php

$db = new MySQLi("eu-cdbr-west-01.cleardb.com", "bacb6cfdc68d53", "f69f4cf4", "heroku_3277c7753087f47");

$db->set_charset('utf8');

if ($db->connect_error) {
	echo $db->connect_error;
}
else{

  $sql = "SELECT * FROM Contacts";

	$rows = $db->query($sql);
	$length = $rows->num_rows;

	// empty array

	$result = array();
	for ($i = 0; $i < $length; $i++)
		{
		$row = $rows->fetch_assoc(); //retrieving each row
		array_push($result, $row); //add to the array
		}

	echo json_encode($result); //convert to json and output the result
}

?>
