<!doctype html>
<html lang="en" ng-app="sixthApp">
<head>
    <meta charset="UTF-8">
    <title>{{title}}</title>
</head>
<body>
<h1>{{title}}</h1>

<div ng-controller="sixthController">
    <p ng-repeat="item in arr | filter:filterFunc">{{item}}</p>
    {{question}}
</div>


<script src="angular.js"></script>
<script>
    var sixthApp = angular.module('sixthApp', []).run(function ($rootScope){$rootScope.title = 'Romanoff';});
    sixthApp.controller('sixthController', function ($scope, sixthFactory) {
        $scope.arr = Array.from(Array(10).keys())
        $scope.filterFunc = function (item){return item % 2 == 0;}
        $scope.question = sixthFactory.question;
    })
    sixthApp.factory('sixthFactory',function (){
        return{
            question:{
                text: 'Какой js-фреймворк лучше использовать?',
                author: 'Иван Иванов',
                date: '20/10/2013',
                answers:
                    [{
                        text: 'AngularJS!',
                        author: 'Вова Сидоров',
                        date: '20/10/2013',
                        rate:2
                    },{
                        text: 'AngularJS лучше всех',
                        author: 'Олег Кузнецов',
                        date: '21/10/2013',
                        rate:3
                    }]
            }
        };
    })
</script>
</body>
</html>