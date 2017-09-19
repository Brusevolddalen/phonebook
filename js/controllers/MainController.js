app.controller('MainController', ['$scope', '$http', function($scope, $http) {

  $http.get('php/loadContacts.php')
    .then(function(response) {

      var data = response.data;
      var status = response.status;
      var statusText = response.statusText;
      var headers = response.headers;
      var config = response.config;

      $scope.contacts = data;
    });

  $scope.deleteContact = function() {

    $(document).on('click', '.delete-btn', function(event) {

      let row = $(this).closest("tr"); // Finds the closest row <tr>
      let tds = row.find("td"); // Finds all children <td> elements
      let phone = $(tds[2]).text();

      $http.post("php/deleteContact.php", phone)
      .then(function(response) {
        console.log("should have deleted");
      }, function(response) {
        console.log("not deleted");
      });

      /*
            $.post("php/deleteContact.php", {
              phoneNumber: phone
            });
      */
      //location.reload();



    });

  };

}]);
