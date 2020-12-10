<!doctype html>
<html ng-app="firstApp">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body {
            margin: 30px;
        }
    </style>
</head>
<body>

<div ng-controller="myController">
    <div>
        <input type="text" ng-model="text" placeholder="Название"/>
        <input type="number" ng-model="price" placeholder="Цена"/>
        <button class="btn btn-default" ng-click="addItem(text, price)">Добавить</button>
    </div>
    <table style="border-spacing: 0" border="1px solid black">
        <thead>
        <tr>
            <th>Предмет</th>
            <th>Цена</th>
            <th>Куплено</th>
        </tr>
        </thead>
        <tbody>
        <tr ng-repeat="item in list.items">
            <td>{{item.purchase}}</td>
            <td>{{item.price}}</td>
            <td><input type="checkbox" ng-model="item.done"/></td>
        </tr>
        </tbody>
    </table>
    <div>
        <h3>Click the lang</h3>
        <p ng-repeat="item in list.lang" ng-click="showLang(item)">{{item.l}}</p>
    </div>
</div>

<script src="angular.js"></script>
<script>
    var model = {
        items: [
            {purchase: "Хлеб", done: false, price: 15.9},
            {purchase: "Масло", done: false, price: 60},
            {purchase: "Картофель", done: true, price: 22.6},
            {purchase: "Сыр", done: false, price: 310}
        ],
        lang: [
            {l: 'ru'},
            {l: 'en'},
            {l: 'qz'},
        ]
    };
    var firstApp = angular.module("firstApp", []);
    firstApp.controller("myController", function ($scope) {
        $scope.list = model;
        $scope.addItem = function (text, price) {
            price = parseFloat(price);
            if (text != "" && !isNaN(price)) {
                $scope.list.items.push({purchase: text, price: price, done: false});
            }
        }
        $scope.showLang = function (e) {
            alert(e.l);
        }
    });
</script>
</body>
</html>