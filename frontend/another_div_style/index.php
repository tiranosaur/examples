<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        <style>
        label {width: 35px;height: 35px;transform: scale(.8);}

        #tile1_label {background-color:green;}
        :checked + #tile1_label {background-color:red}
        :hover + #tile1_label {background-color:green}
        :hover~#feedback_rating_title::before{content: '111111111111111111111'!important;background-color: red!important}
        #tile1:checked~#feedback_rating_title::before {content: '111111111111';background-color: red}

        #tile2_label {background-color:green}
        :checked + #tile2_label {background-color:  red}
        :hover + #tile2_label {background-color: green}
        #tile2_label:hover~#feedback_rating_title::before{content: '22222222222222222222222'!important;background-color: gold!important}
        #tile2:checked~#feedback_rating_title::before {content: '222222222222222';background-color: gold}

        #tile3_label {background-color: green}
        :checked + #tile3_label {background-color: red}
        :hover + #tile3_label {background-color: green}
        #tile3_label:hover~#feedback_rating_title::before{content: '3333333333333333333'!important;background-color: red!important}
        #tile3:checked~#feedback_rating_title::before {content: '33333333333333333';background-color: red}

        #tile4_label {background-color: green}
        :checked + #tile4_label {background-color: red}
        :hover + #tile4_label {background-color:green}
        #tile4_label:hover~#feedback_rating_title::before{content: '444444444444444444'!important;background-color: brown!important}
        #tile4:checked~#feedback_rating_title::before {content: '44444444444444444';background-color: brown}
    </style>
</head>
<body>
<input class="d-none" type="radio" id="tile1" value="1" name="rating"><label for="tile1" id="tile1_label">111111111</label><br>
<input class="d-none" type="radio" id="tile2" value="2" name="rating"><label for="tile2" id="tile2_label">2222222222</label><br>
<input class="d-none" type="radio" id="tile3" value="3" name="rating"><label for="tile3" id="tile3_label">333333333</label><br>
<input class="d-none" type="radio" id="tile4" value="4" name="rating" checked><label for="tile4" id="tile4_label">4444444444444</label>
<p class="mb-3" style="opacity: 0.6" id="feedback_rating_title"></p>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div>
</body>
</html>