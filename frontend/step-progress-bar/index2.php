<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .progressbar {
            margin: 50px 0 50px 0;
            counter-reset: step;
        }

        .progressbar li {
            list-style-type: none;
            width: 25%;
            float: left;
            font-size: 12px;
            position: relative;
            text-align: center;
            text-transform: uppercase;
            color: #7d7d7d;
        }

        .progressbar li:before {
            width: 15px;
            height: 15px;
            content: '';
            line-height: 30px;
            border: 2px solid #7d7d7d;
            background-color: #7d7d7d;
            display: block;
            text-align: center;
            margin: 0 auto 10px auto;
            border-radius: 50%;
            transition: all .8s;
        }

        .progressbar li:after {
            width: 100%;
            height: 2px;
            content: '';
            position: absolute;
            background-color: #7d7d7d;
            top: 7px;
            left: -50%;
            z-index: -1;
            transition: all .8s;
        }

        .progressbar li:first-child:after {
            content: none;
        }

        .progressbar li.active:before {
            border-color: #55b776;
            background-color: #55b776;
            transition: all .8s;
        }

        .progressbar li.active:after {
            background-color: #55b776;
            transition: all .8s;
        }

        .btn {
            background-color: #55b776;
            margin: 5px;
            width: 75px;
            color: white;
        }

        .btn:hover {
            color: white;
        }

        .btn:focus {
            color: white;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            width: 100%;
            position: absolute;
            bottom: 0;
        }

        body {
            background-color: #333333;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <ul id="progress-bar" class="progressbar">
                <li class="active">Details</li>
                <li class="active">Address</li>
                <li>add friends</li>
                <li>Confirm</li>
            </ul>
        </div>
    </div>
</div>
<div class="btn-container">
    <button class="btn" id="Back" onclick="back()">Back</button>
    <button class="btn" id="Next" onclick="next()">Next</button>
    <button class="btn" id="Reset" onclick="reset()">Reset</button>
</div>
<script>
    function back() {
        var elements = Array.from(document.querySelectorAll('#progress-bar .active'));
        var elem = elements.pop();
        if (elem !== undefined) {
            elem.classList.remove('active');
        }
    }

    function next() {
        var elements = Array.from(document.querySelectorAll('#progress-bar .active'));
        var elem = elements.pop();
        if (elem === undefined) {
            elem = document.querySelector('#progress-bar li');
        }else {
            elem = elem.nextElementSibling;
        }
        try{
            elem.classList.add('active');
        }catch (e) {
        }
    }

    function reset() {
        document.querySelectorAll('#progress-bar li').forEach((x) => x.classList.remove('active'));
    }
</script>
</body>
</html>