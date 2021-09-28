<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
<style>
    .news-tabs-block {
        display: none;
        flex-direction: row;
        justify-content: center;
    }

    .news-tabs-block>.news-tabs-item {
        width: 20%;
        max-width: 20%;
        text-align: center;
        border-bottom: 1px solid rgba(0, 0, 0, 0.2);
        cursor: pointer;
    }

    .news-dropdown-content>.news-tabs-item {
        font-size: 16px;
        line-height: 30px;
    }

    .arrow {
        width: 10px;
        height: 10px;
        border-top: 1px solid rgba(0, 0, 0, 0.2);
        border-right: 1px solid rgba(0, 0, 0, 0.2);
        background-color: white;
        position: relative;
        margin-right: auto;
        margin-left: auto;
        left: 0;
        right: 0;
        text-align: center;
        transform: rotate(135deg);
        top: 6px;
        display: none;
    }

    .news-content-block-item {
        margin-top: 20px;
        display: none;
    }

    .news-tabs-item.active > .arrow,
    .news-content-block-item.active {
        display: block;
    }

    /*dropdown*/
    .news-tabs-dropdown-main{
        width: 100%;
        text-align: center;
    }
    .news-dropbtn {
        color: black;
        background-color: white;
        padding: 10px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .news-dropbtn:active, .news-dropbtn:hover, .news-dropbtn:focus {
        color: red;
    }

    .news-tabs-dropdown {
        position: relative;
        display: inline-block;
    }

    .news-dropdown-content {
        display: none;
        position: absolute;
        left: 50%;
        transform: translate(-50%, 0%);
        padding: 15px 10px;
        background-color: white;
        box-shadow:0 0 5px 2px rgba(0,0,0,0.3);
        border-radius: 3px;
        min-width: fit-content;
        z-index: 1;
    }

    .news-dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .show {
        display: block;
    }
    @media (min-width: 768px) {
        .news-tabs-dropdown-main{display: none;}
        .news-tabs-block{display: flex;}
    }
</style>
<div class="news-tabs-main">
    <div class="news-tabs-block">
        <div class="news-tabs-item item1 active" onclick="setActiveNewsTabs('item1')">aaaaaaaaaaaa
            <div class="arrow"></div>
        </div>
        <div class="news-tabs-item item2" onclick="setActiveNewsTabs('item2')">sssssssssssssssssssss
            <div class="arrow"></div>
        </div>
        <div class="news-tabs-item item3" onclick="setActiveNewsTabs('item3')">ddddddddddddddddd
            <div class="arrow"></div>
        </div>
        <div class="news-tabs-item item4" onclick="setActiveNewsTabs('item4')">ffffffffffffff
            <div class="arrow"></div>
        </div>
        <div class="news-tabs-item item5" onclick="setActiveNewsTabs('item5')">zzzzzzzzzzzzzzzzzzz
            <div class="arrow"></div>
        </div>
    </div>

    <div class="news-tabs-dropdown-main">
        <div class="news-tabs-dropdown">
            <button onclick="openDropdown()" class="news-dropbtn">Dropdown <span style="font-size: 20px;">&#x2304;</span></button>
            <div id="news-dropdown" class="news-dropdown-content">
                <div class="news-tabs-item item1 active" onclick="setActiveNewsTabs('item1')">aaaaaaaaaaaa</div>
                <div class="news-tabs-item item2" onclick="setActiveNewsTabs('item2')">sssssssssssssssssssss</div>
                <div class="news-tabs-item item3" onclick="setActiveNewsTabs('item3')">ddddddddddddddddd</div>
                <div class="news-tabs-item item4" onclick="setActiveNewsTabs('item4')">ffffffffffffff</div>
                <div class="news-tabs-item item5" onclick="setActiveNewsTabs('item5')">zzzzzzzzzzzzzzzzzzz</div>
            </div>
        </div>
    </div>

    <div class="news-content-block">
        <div class="news-content-block-item item1 active">
            111
            console.log("console.log("console.log("");console.log("")console.log("");consoleog("")console.log("");");");
        </div>
        <div class="news-content-block-item item2">
            222 BufferedReader reader=new BufferedReader(new InputStreamReader(System.in));
        </div>
        <div class="news-content-block-item item3">
            333 sdfsdfsdfs
        </div>
        <div class="news-content-block-item item4">
            444 Bufconsole.log("");feredReaBufferedBufferedBufferedBufferedBufconsole.log("");feredBufferedReader
            reader=new
            444 BufferedReader(new InputStreamReader(System.in));
        </div>
        <div class="news-content-block-item item5">
            555
            console.log("System.out.println("console.log(""BufferedRconsole.log("System.out.println(""console.log("");BufferedReader
            555 reader=new BufferedReader(new InputStreamReader(System.in));");");");
        </div>
    </div>
</div>
<script>
    var newsTabsItem = document.querySelectorAll('.news-tabs-item');
    var newsContentBlockItem = document.querySelectorAll('.news-content-block-item');

    function setActiveNewsTabs(itemNum) {
        newsTabsItem.forEach(function (item) {
            item.classList.remove("active")
        });
        newsContentBlockItem.forEach(function (item) {
            item.classList.remove("active")
        });
        document.querySelector(".news-content-block-item." + itemNum).classList.add("active")
        document.querySelector(".news-tabs-item." + itemNum).classList.add("active")
    }

    function openDropdown() {
        document.getElementById("news-dropdown").classList.toggle("show");
    }

    window.onclick = function (e) {
        if (!e.target.matches('.news-dropbtn')) {
            var myDropdown = document.getElementById("news-dropdown");
            if (myDropdown.classList.contains('show')) {
                myDropdown.classList.remove('show');
            }
        }
    }
</script>
</body>
</html>