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
    function draw() {
        var canvas = document.querySelector('canvas');
        if (canvas.getContext) {
            var ctx = canvas.getContext('2d');
            var d = 30;
            var x = canvas.width - d - d / 3;
            var y = canvas.height - d - d / 3;
            var dx = -3;
            var dy = -2;
            setInterval(drawBall, 10);

            function drawBall() {
                ctx.clearRect(0, 0, canvas.width, canvas.height); // clear canvas

                ctx.beginPath();
                ctx.fillStyle = '#FF00FF';
                ctx.arc(x, y, d, 0, Math.PI * 2);
                ctx.fill();
                ctx.closePath();
                if (x < (d + d / 3) || y < (d + d / 3)) {
                    dx*=-1;
                    dy*=-1;
                }
                if (x > (canvas.width - d - d / 3) || y > (canvas.height - d - d / 3)){
                    dx*=-1;
                    dy*=-1;
                }
                x += dx;
                y += dy;

            }
        }
    }

    draw();
</script>
</body>
</html>