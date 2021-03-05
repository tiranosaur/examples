<style>
    .mycls li {
        overflow: hidden;
        position: relative;
        height: 100%;
    }

    .show .mycls a {
        display: block;
        float: left;
        text-align: center;
    }


    /* Обертка */

    .mycls li {
        overflow: hidden;
        position: relative;
    }

    .show {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        -webkit-transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -ms-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
        -webkit-transform: translateY(100px);
        -moz-transform: translateY(100px);
        -ms-transform: translateY(100px);
        -o-transform: translateY(100px);
        transform: translateY(100px);
    }


    /* Наведение */

    ul:hover .show {
        -webkit-transform: translateY(0px);
        -moz-transform: translateY(0px);
        -ms-transform: translateY(0px);
        -o-transform: translateY(0px);
        transform: translateY(0px);
        position: absolute;
    }

    .mycls {
        width: 220px;
        height: 310px;
        float: left;
        border: 1px solid #808080;
        border-radius: 5px;
        padding: 5px;
        margin: 0px 10px 10px 0px;
        /*margin between item*/
    }
</style>
<ul class="mycls">

    <li align="center">
        <img src="https://tehnot.com/wp-content/uploads/2017/03/android-o-00.jpg" class="img-responsive" width="220" height="200" />
        </div>
        <div class="show">
            <a><input type="button" value="В корзину" class="btn btn-default btn-outline" /></a>
        </div>
    </li>
</ul>