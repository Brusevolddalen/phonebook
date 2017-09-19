app.controller('MainController', ['$scope', function($scope, $http){

    $http.get("loadContacts.php")
    .then(function (response) {$scope.contacts = response.data.records;});

    console.log($scope.contacts);

  /*
  $scope.contacts = [
    {
      firstname: 'Mark',
      lastname: 'Otto',
      phone: '42434546',
      email: 'mark@otto.com'
    },
    {
      firstname: 'Larry',
      lastname: 'Bird',
      phone: '41424546',
      email: 'larry@bird.com'
    }
  ];
  */
}]);
