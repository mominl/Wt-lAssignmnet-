angular.module('authApp', [])
  .controller('AuthController', function($scope) {
    $scope.currentPage = 'login';
    $scope.users = []; // Simulated user DB
    $scope.message = '';

    $scope.switchPage = function(page) {
      $scope.currentPage = page;
      $scope.message = '';
      $scope.registerData = {};
      $scope.loginData = {};
    };

    $scope.register = function() {
      const exists = $scope.users.some(user => user.username === $scope.registerData.username);
      if (exists) {
        $scope.message = 'Username already exists!';
      } else {
        $scope.users.push(angular.copy($scope.registerData));
        $scope.message = 'Registration successful! Please login.';
        $scope.switchPage('login');
      }
    };

    $scope.login = function() {
      const user = $scope.users.find(user =>
        user.username === $scope.loginData.username &&
        user.password === $scope.loginData.password
      );
      if (user) {
        $scope.message = `Welcome, ${user.firstName} ${user.lastName}!`;
      } else {
        $scope.message = 'Invalid username or password.';
      }
    };
  });
