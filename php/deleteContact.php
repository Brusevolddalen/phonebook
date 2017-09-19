<?php

$db = new MySQLi("eu-cdbr-west-01.cleardb.com", "bacb6cfdc68d53", "f69f4cf4", "heroku_3277c7753087f47");

$db->set_charset('utf8');

if ($db->connect_error) {

	echo $db->connect_error;
}
else{

  $phoneNumber = $_POST['phone'];


  $sql = "DELETE FROM Contacts WHERE phone = '$phoneNumber'";


  $result_delete_contact = $db->query($sql);

  echo $sql;

  if (!$result_delete_contact) {
    echo $db->error;
      //"<script>alert('Error 4 could not add category');</script>"
  }
  else{
    header('Location: https://martin-phonebook.herokuapp.com/');
  }
}

?>
