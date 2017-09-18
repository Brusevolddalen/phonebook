<?php

$db = new MySQLi("eu-cdbr-west-01.cleardb.com", "bacb6cfdc68d53", "f69f4cf4", "heroku_3277c7753087f47");

$db->set_charset('utf8');

if ($db->connect_error) {
	echo $db->connect_error;
}
else{
  /*
  $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    phone VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    date_added TIMESTAMP
  )";
  */

  $sql = "DROP TABLE MyGuests";

  $result_drop_table = $db->query($sql);

  if (!$result_drop_table) {
    echo $sql;
      //"<script>alert('Error 4 could not add category');</script>"
  }
  else{
    echo "table dropped!";
  }
}

?>
