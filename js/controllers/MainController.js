app.controller('MainController', ['$scope', function($scope, $http) {

  /*
  $http.get('/php/loadContacts.php').success(function(data) {

  });
  */
  $.getJSON("php/loadContacts.php", function(data) {

    $scope.test = data;

    console.log($scope.test);

  });


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
  console.log($scope.contacts);
}]);
