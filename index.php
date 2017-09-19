<!DOCTYPE html>
<html>

<head>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.5/angular.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script src="js/loadModal.js"></script>




  <!--Let browser know website is optimized for mobile-->
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!--Characterset-->
  <meta charset="UTF-8">
  <title>
    Phonebook
  </title>
</head>

<body class="teal cyan lighten-4" ng-app="myApp">
  <div class="header">
    <div class="container">
      <h1 class="center-align">Phonebook!</h1>
    </div>
  </div>

  <div class="main" ng-controller="MainController">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div>
            <a class="waves-effect waves-light btn modal-trigger" style="width:100%" href="#addContactModal">Add Contact</a>
          </div>
          <table class="bordered centered responsive-table white">
            <thead class="grey">
              <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phonenumber</th>
                <th>Email-adress</th>
                <th style="width:12%">Delete</th>
              </tr>
            </thead>
            <tbody>
              <tr ng-repeat="contact in contacts">
                <td class="firstname"> {{ contact.firstname }}</td>
                <td class="lastname"> {{ contact.lastname }}</td>
                <td class="phone"> {{ contact.phone }}</td>
                <td class="email"> {{ contact.email }}</td>
                <td class="delete" > <button class="btn material-icons delete-btn" ng-click="deleteContact( contact.phone )">delete</button> </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div id="addContactModal" class="modal">
    <form action="php/addContact.php" method="post">
      <div id="editTableContainer" class="modal-content">
      <h4>Add Contact</h4>
      <div class="row">
        <div class="input-field col s6 m6 l6">
          <input id="firstname" type="text" name="Contact[firstname]" class="validate">
          <label for="firstname" data-success="You did it!">Firstname</label>
        </div>
        <div class="input-field col s6 m6 l6">
          <input id="lastname" type="text" name="Contact[lastname]" class="validate">
          <label for="lastname" data-success="You did it!">Lastname</label>
        </div>
        <div class="input-field col s6 m6 l6">
          <input id="phone" type="number" name="Contact[phone]" class="validate">
          <label for="phone" data-success="You did it!">Phone</label>
        </div>
        <div class="input-field col s6 m6 l6">
          <input id="email" type="email" name="Contact[email]" class="validate">
          <label for="email" data-success="You did it!">Email</label>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn waves-effect waves-light start-btn" type="submit" name="action">Add</button>
      </div>
      </div>
    </form>
  </div>



  <script src="js/app.js"></script>
  <script src="js/controllers/MainController.js"></script>


</body>

</html>
