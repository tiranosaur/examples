<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .forex_analytics_item {
            position: relative;
            background-color: #ccc;
            background-image: radial-gradient(circle at 80%, #c6d3e4, #bbcce4, #b0c6e4, #a5bfe3, #9ab8e3);;
            -webkit-backface-visibility: hidden;
            z-index: 1;
        }

        .forex_analytics_item:after {
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 0.3em;
            background-image: radial-gradient(circle at 80%, #f5eeed, #f7beb5, #f08e7c, #e15c45, #cb1907);
            transition: opacity 0.5s ease-out;
            z-index: 2;
            opacity: 0;
        }

        .forex_analytics_item:hover:after {
            opacity: 1;
        }

        .forex_analytics_item span {
            position: relative;
            z-index: 3;
        }
    </style>
</head>
<body>

<div class="forex_analytics_item" style="width:500px; height: 200px"></div>

</body>
</html>