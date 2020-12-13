<!doctype html>
<html lang="en" ng-app="seventhApp">
<head>
    <meta charset="UTF-8">
    <title>{{title}}</title>
</head>
<body>
<h1>{{title}}</h1>

<div ng-controller="seventhController">
    <div>
        <button ng-click="downloadData()">Download</button>
        <p ng-repeat="item in question.answers">{{item.author}} - {{item.text}}</p>
    </div>
    <hr>
    <div>
        <div ng-if="!isSent">
            <p ng-bind="username"></p>
            <input type="text" ng-model="username" placeholder="input username">
            <button ng-click="sendData(username)">Send</button>
        </div>
        <div ng-if="isSent">
            <p ng-bind="username"></p>
        </div>
    </div>
    <hr>
    <div>
        <h4>send get data</h4>
        <button ng-click="sendGetData()">Send</button>
    </div>
    <div>
        <h4>send error</h4>
        <button ng-click="sendError()">Send</button>
    </div>
</div>


<script src="angular.js"></script>
<script>
    var seventhApp = angular.module('seventhApp', []).run(function ($rootScope){$rootScope.title = 'Http service';$rootScope.isSent=false;});
    seventhApp.controller('seventhController', function ($scope, $http) {
        $scope.downloadData = function (){
            $http({method: 'GET', url: '/frontend/angularJS/testJson.php'})
                .then(function success(response) {
                    $scope.question = response.data.question;
                });
        }
        $scope.sendData = function (username) {
            $http({
                method: 'POST',
                url: '/frontend/angularJS/testResponse.php',
                data: 'message=Hello&user=' + username,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            })
                .then(function success(response) {
                    $scope.isSent = true;
                    $scope.username = response.data;
                    console.log(response);
                })
        }
        $scope.sendGetData = function (username) {
            $http({
                method: 'GET',
                url: '/frontend/angularJS/testResponse.php',
                params:{user:'tiran', message:'hello'}
            })
                .then(function success(response) {
                    alert(response.data)
                })
        }
        $scope.sendError = function (username) {
            $http({
                method: 'POST',
                url: '/frontend/angularJS/testResponse.php',
                data: 'error=1',
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            })
                .then(
                    function success(response) {
                        console.log("1");
                    },
                    function error(err) {
                        alert('err code - '+err.status);
                    }
                    //same
                    // function (response) {
                    //     console.log("1");
                    // },
                    // function (err) {
                    //     alert('err code - '+err.status);
                    // }
                )
        }
    })
</script>
</body>