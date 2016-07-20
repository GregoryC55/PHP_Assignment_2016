// var widow = angular.module('widow', [])
// var tukayyid = anuglar.module('tukayyid', [])
var app = angular.module('quizApp', [])

app.controller('mainCtrl', function($scope) {
  $scope.widow = function () {
    alert('December 7, 3057');
  };
});

app.controller('secondCtrl', function($scope) {
  $scope.tukayyid = function () {
    alert('May 1, 3052');
  };
});

app.controller('thirdCtrl', function($scope) {
  $scope.marik = function () {
    alert('House Marik');
  };
});

app.controller('fourthCtrl', function($scope) {
  $scope.mackie = function () {
    alert('Mackie');
  };
});

app.controller('fifthCtrl', function($scope) {
  $scope.strana = function () {
    alert('Strana Mechty');
  };
});

app.controller('sixthCtrl', function($scope) {
  $scope.ian = function () {
    alert('Ian Davion');
  };
});

app.controller('seventhCtrl', function($scope) {
  $scope.shiro = function () {
    alert('Shiro Kurita');
  };
});

app.controller('eighthCtrl', function($scope) {
  $scope.hesperus = function () {
    alert('Hesperus II');
  };
});

app.controller('ninthCtrl', function($scope) {
  $scope.sian = function () {
    alert('Sian');
  };
});

app.controller('tenthCtrl', function($scope) {
  $scope.star = function () {
    alert('July 9, 2571');
  };
});
