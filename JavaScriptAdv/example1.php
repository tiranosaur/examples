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
    <canvas id="cc" width="480" height="320"></canvas>
</div>

<script>
    function draw() {
        var canvas = document.getElementById('cc');
        if (canvas.getContext) {
            var ctx = canvas.getContext('2d');
            ctx.beginPath();
            ctx.rect(10, 10, 100, 100);
            ctx.fillStyle = '#FF0000';
            ctx.fill();
            ctx.closePath();

            ctx.beginPath();
            ctx.fillStyle = '#0000FF';
            ctx.rect(50, 50, 150, 150);
            ctx.stroke();
            ctx.closePath();

            ctx.beginPath();
            ctx.arc(240, 160, 20, 0, Math.PI * 2, false);
            ctx.fillStyle = "green";
            ctx.fill();
            ctx.closePath();
        }
    }

    draw();
</script>
</body>
</html>