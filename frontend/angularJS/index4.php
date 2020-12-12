<!doctype html>
<html lang="en" ng-app="fourthApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body ng-controller="fourthController">

<p ng-repeat="item in arr | orderBy: sortParam | limitTo: 5">{{item.name | formatText}}</p>
<hr>
<p ng-repeat="item in arr | filter: filterFunc">{{item.name}}</p>

<script src="angular.js"></script>
<script>
    var fourthApp = angular.module('fourthApp', []);
    fourthApp.filter('formatText', function () {
        return function (param) {
            return param == 'aaa' ? 111 : param
        }
    })
    fourthApp.controller('fourthController', function ($scope) {
        $scope.sortParam = 'name'
        $scope.arr = [
            {name: 'aaa', age: 1},
            {name: 'zzz'},
            {name: 'xxx', age: 20},
            {name: 'jjj', age: 30},
            {name: 'bbb'},
            {name: 'fff'},
        ]
        $scope.filterFunc = function (item) {
            return item.age >= 20;
        }
    })
</script>
</body>
</html>