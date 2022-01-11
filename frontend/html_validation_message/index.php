<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="">
    <div>
        <label for="name"></label>
        <input type="text" id="name" name="name" required pattern="^[A-Za-zА-Яа-я\s\-]{6,64}$" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('custom error message')">
        <input type="submit">
    </div>
</form>
</body>
</html>