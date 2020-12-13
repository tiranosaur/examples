<!doctype html>
<html lang="en" ng-app="fifthApp">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div ng-controller="fifthController">
    <form name="answerForm">
        <fieldset>
            <p><label for="answerText">Текст ответа</label>
                <input id="answerText" ng-model="answer.text" required ng-pattern="/^[a-zA-Z]{3;}$/"
                       placeholder="Введите ответ"/></p>
            <p><label for="answerAuthor">Автор ответа</label>
                <input id="answerAuthor" ng-model="answer.author" required placeholder="Введите автора"/></p>
            <p><label for="answerDate">Дата ответа</label>
                <input id="answerDate" ng-model="answer.date" required ng-pattern="/\d\d/\d\d/\d\d\d\d/"
                       placeholder="Введите дату"/></p>
        </fieldset>
        <button type="submit" ng-click="save(answer, answerForm)">Сохранить</button>
    </form>
    <div>
        <div ng-repeat="item in answers">
            <p>{{item.text}}</p>
            <p>{{item.author}}</p>
            <p>{{item.date}}</p>
            <hr>
        </div>
    </div>
</div>

<script src="angular.js"></script>
<script src="jj.js"></script>
<script>
    var fifthApp = angular.module('fifthApp', []).run(function ($rootScope) {
        $rootScope.pass = 'Romanoff';
    });
    fifthApp.controller('fifthController', function ($scope) {
        $scope.answers = [];
        $scope.save = function (answer, answerForm) {
            if (answerForm.$valid) {
                alert(answer.author + ", ваш ответ сохранен");
                this.answers.push({text: answer.text, author: answer.author, date: answer.date});
            }else {
                console.log(answerForm.$error.author);
            }
        };
    })
</script>
</body>
</html>
