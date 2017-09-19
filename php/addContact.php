<?php

$db = new MySQLi("eu-cdbr-west-01.cleardb.com", "bacb6cfdc68d53", "f69f4cf4", "heroku_3277c7753087f47");

$db->set_charset('utf8');

if ($db->connect_error) {
	echo $db->connect_error;
}
else{
  $contact = $_POST['Contact'];

  echo "connected";
/*
  $sql = "CREATE TABLE Contacts (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    phone VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    date_added TIMESTAMP
  )";
*/
  $sql = "SELECT * FROM Contacts";

  $sql = "INSERT INTO Contacts (firstname, lastname, phone, email)
VALUES ('John', 'Doe', 'john@example.com')";

  print_r($contact)


  //$result_select_all = $db->query($sql);

  if (!$result_select_all) {
    echo $db->error;
      //"<script>alert('Error 4 could not add category');</script>"
  }
  else{
    while ( $rows = $result_select_all->fetch_assoc() ) {
      print_r($rows);//echo "{$row['field']}";
    }
  }
}

?>
