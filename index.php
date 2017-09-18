<!DOCTYPE html>
<html>

<head>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">


  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.5/angular.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>




  <!--Let browser know website is optimized for mobile-->
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!--Characterset-->
  <meta charset="UTF-8">
  <title>
    Phonebook
  </title>
</head>

<body ng-app="myApp">
  <div class="header">
    <div class="container">
      <h1>Phonebook!</h1>
    </div>
  </div>

  <div class="main" ng-controller="MainController">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div>
            <a class="waves-effect waves-light btn" style="width:100%">Add contact</a>
          </div>
          <table class="striped">
            <thead class="grey">
              <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phonenumber</th>
                <th>Email-adress</th>
              </tr>
            </thead>
            <tbody>
              <tr ng-repeat="contact in contacts">
                <td class="firstname"> {{ contact.firstname }}</td>
                <td class="lastname"> {{ contact.lastname }}</td>
                <td class="phone"> {{ contact.phone }}</td>
                <td class="email"> {{ contact.email }}</td>

              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src="js/app.js"></script>
  <script src="js/controllers/MainController.js"></script>



</body>

</html>