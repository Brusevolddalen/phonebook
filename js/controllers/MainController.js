app.controller('MainController', ['$scope', '$http', function($scope, $http) {

  $scope.getContacts = function() {
    $http.get('php/loadContacts.php')
      .then(function(response) {

        var data = response.data;
        var status = response.status;
        var statusText = response.statusText;
        var headers = response.headers;
        var config = response.config;
        $scope.contacts = data;
      });
  };

  $scope.addContact = function() {

      $http({
          url: 'php/addContact.php',
          method: "POST",
          data: {firstname: $scope.firstname, lastname: $scope.lastname, newPhone: $scope.phone, newEmail: $scope.email },
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
          }
        })
        .then(function(response) {
          //$scope.getContacts();
          console.log(response)
        });
  };


  $scope.deleteContact = function(phone) {

    $(document).on('click', '.delete-btn', function(event) {

      let row = $(this).closest("tr"); // Finds the closest row <tr>
      let tds = row.find("td"); // Finds all children <td> elements
      let phone = $(tds[2]).text();

      $http({
          url: 'php/deleteContact.php',
          method: "POST",
          data: 'phoneNumber=' + phone,
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
          }
        })
        .then(function(response) {
          $scope.getContacts();
        });

    });
  };
  $scope.getContacts();
}]);
