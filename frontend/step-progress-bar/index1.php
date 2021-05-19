<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container {
            width: 600px;
            margin: 100px auto;
        }
        .progress-bar {
            counter-reset: step;
        }
        .progress-bar li {
            list-style-type: none;
            width: 25%;
            float: left;
            font-size: 12px;
            position: relative;
            text-align: center;
            text-transform: uppercase;
            color: #7d7d7d;
        }
        .progress-bar li:before {
            width: 30px;
            height: 30px;
            content: counter(step);
            counter-increment: step;
            line-height: 30px;
            border: 2px solid #7d7d7d;
            display: block;
            text-align: center;
            margin: 0 auto 10px auto;
            border-radius: 50%;
            background-color: white;
        }
        .progress-bar li:after {
            width: 100%;
            height: 2px;
            content: '';
            position: absolute;
            background-color: #7d7d7d;
            top: 15px;
            left: -50%;
            z-index: -1;
        }
        .progress-bar li:first-child:after {
            content: none;
        }
        .progress-bar li.active {
            color: green;
        }
        .progress-bar li.active:before {
            border-color: #55b776;
        }
        .progress-bar li.active + li:after {
            background-color: #55b776;
        }
    </style>
</head>
<body>
<div class="container">
    <ul class="progress-bar">
        <li class="active">login</li>
        <li class="active">choose interest</li>
        <li>add friends</li>
        <li>View map</li>
    </ul>
</div>
<div class="btn-container">
    <button class="btn" id="Back" onclick="back()">Back</button>
    <button class="btn" id="Next" onclick="next()">Next</button>
    <button class="btn" id="Reset" onclick="reset()">Reset</button>
</div>
<script>
    function back() {
        var elements = Array.from(document.querySelectorAll('.progress-bar .active'));
        var elem = elements.pop();
        if (elem !== undefined) {
            elem.classList.remove('active');
        }
    }

    function next() {
        var elements = Array.from(document.querySelectorAll('.progress-bar .active'));
        var elem = elements.pop();
        if (elem === undefined) {
            elem = document.querySelector('.progress-bar li');
        }else {
            elem = elem.nextElementSibling;
        }
        try{
            elem.classList.add('active');
        }catch (e) {
        }
    }

    function reset() {
        document.querySelectorAll('.progress-bar li').forEach((x) => x.classList.remove('active'));
    }
</script>
</body>
</html>
