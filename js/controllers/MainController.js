app.controller('MainController', ['$scope', function($scope){
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
}]);
