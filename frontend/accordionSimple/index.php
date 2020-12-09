<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <style>
        .accordeon {
            border: 10px solid #fff;
            box-shadow: 0 0 10px grey;
            margin: 10px;
            margin-bottom:30px
        }

        .acc-head {
            text-align: center;
            padding: 10px 10px;
            background: #c0c0c0;
            cursor: pointer;
            border: 1px solid white;
        }

        .acc-body {
            padding: 10px;
            border-bottom: 1px solid #c0c0c0;
            margin-bottom: 5px;
            display: none;
        }
    </style>
</head>
<body>

<div class="accordeon">
    <div class="acc-head">
        Заголовок 1
    </div>
    <div class="acc-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum saepe ex nesciunt, quidem quis illo cupiditate, quod maxime. Tenetur, ex quos. Magnam quasi iure facere minus velit voluptate accusamus hic!
    </div>
    <div class="acc-head">
        Заголовок 2
    </div>
    <div class="acc-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum saepe ex nesciunt, quidem quis illo cupiditate, quod maxime. Tenetur, ex quos. Magnam quasi iure facere minus velit voluptate accusamus hic!
    </div>
    <div class="acc-head">
        Заголовок 3
    </div>
    <div class="acc-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum saepe ex nesciunt, quidem quis illo cupiditate, quod maxime. Tenetur, ex quos. Magnam quasi iure facere minus velit voluptate accusamus hic!
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.accordeon .acc-head').on('click', f_acc);
    });
    function f_acc(){
        $('.accordeon .acc-body').not($(this).next()).slideUp(500);
        $(this).next().slideToggle(1000);
    }
</script>
</body>
</html>
