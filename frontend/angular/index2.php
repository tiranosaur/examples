<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>{{pass}}</h1>
<div ng-app="secondApp">
    <div ng-controller="zeroController">
        <p ng-repeat="item in list.peoples" ng-click="alarmItem(item)">{{item.name}} - {{item.age}}</p>
    </div>

    <div ng-controller="zeroController">
        <h1 ng-repeat="item in list.peoples" ng-click="alarmItem(item)">{{item.name}} - {{item.age}}</h1>
    </div>
</div>

<script src="angular.js"></script>
<script>
    var model = {
        peoples: [
            {name: 'Tom', age: 35},
            {name: 'Eva', age: 15},
            {name: 'Kim', age: 88}
        ]
    }
    var secondApp = angular.module('secondApp', []).run(function ($rootScope){
        $rootScope.pass = 'Romanoff';
    });
    secondApp.controller('zeroController', function ($scope) {
        $scope.list = model;
        $scope.alarmItem = function (item) {
            alert(item.name + '-' + item.age);
        }
    })
</script>
</body>
</html>