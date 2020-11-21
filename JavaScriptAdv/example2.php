<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        canvas {
            background: #eee;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<div id="root">
    <canvas width="480" height="320"></canvas>
</div>

<script>
    window.x = 1;
    window.y = 1;

    function draw() {
        var x = window.x;
        var y = window.y;
        var canvas = document.querySelector('canvas')

        if (canvas.getContext) {
            var ctx = canvas.getContext('2d');
            ctx.beginPath();
            ctx.fillStyle = '#' + parseInt((x + y), 16)
            ctx.rect(x * 1, y * 1, x * 1 + 100, y * 1 + 100);
            ctx.fill();
            ctx.closePath();
        }
        window.x++;
        window.y++;
    }

    setInterval(draw, 100);
</script>
</body>
</html>