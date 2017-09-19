<?php

$db = new MySQLi("eu-cdbr-west-01.cleardb.com", "bacb6cfdc68d53", "f69f4cf4", "heroku_3277c7753087f47");

$db->set_charset('utf8');




if ($db->connect_error) {

	echo $db->connect_error;
}
else{
	var_dump($POST);


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
/*
  $sql = "INSERT INTO Contacts (firstname, lastname, phone, email)
  VALUES ('$contact[firstname]', '$contact[lastname]', '$contact[phone]', '$contact[email]')";


  $result_insert_contact = $db->query($sql);

  if (!$result_insert_contact) {
    echo $db->error;
      //"<script>alert('Error 4 could not add category');</script>"
  }
  else{
    header('Location: https://martin-phonebook.herokuapp.com/');
  }
	*/
}

?>
