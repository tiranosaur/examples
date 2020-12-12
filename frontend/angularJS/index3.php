<!doctype html>
<html lang="en" ng-app="thirdApp">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body ng-controller="thirdController">

<div ng-bind="trustedAppTitle"></div>
<div ng-bind-html="trustedAppTitle"></div>

<script src="angular.js"></script>
<script>
    var thirdApp = angular.module('thirdApp', []);
    thirdApp.controller('thirdController', function ($scope, $sce) {
        $scope.appTitle = "<b>[Packt] Parking</b>";
        $scope.trustedAppTitle = $sce.trustAsHtml($scope.appTitle);
    });
</script>
</body>
</html>