<?php
require_once 'assets/php/header.php';
?>



<style>
    /* news portion  */

    @import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);

    .row {
        margin-right: 0 !important;
        margin-left: 0 !important;
    }

    figure.snip1253 {
        color: #fff;
        position: relative;
        overflow: hidden;
        margin: 10px;
        min-width: 250px;
        max-width: 310px;
        width: 100%;
        background-color: #ffffff;
        color: #000000;
        text-align: left;
        font-size: 16px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
    }

    figure.snip1253 * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    figure.snip1253 .image {
        max-height: 220px;
        overflow: hidden;
    }

    figure.snip1253 img {
        max-width: 100%;
        vertical-align: top;
        position: relative;
    }

    figure.snip1253 figcaption {
        margin: -40px 15px 0;
        padding: 15px;
        position: relative;
        background-color: #ffffff;
    }

    figure.snip1253 .date {
        background-color: #2980b9;
        top: 15px;
        color: #fff;
        left: 15px;
        min-height: 48px;
        min-width: 48px;
        position: absolute;
        text-align: center;
        font-size: 20px;
        font-weight: 700;
        text-transform: uppercase;
    }

    figure.snip1253 .date span {
        display: block;
        line-height: 24px;
    }

    figure.snip1253 .date .month {
        font-size: 14px;
        background-color: rgba(0, 0, 0, 0.1);
    }

    figure.snip1253 h3,
    figure.snip1253 p {
        margin: 0;
        padding: 0;
    }

    figure.snip1253 h3 {
        min-height: 50px;
        margin-bottom: 10px;
        margin-left: 60px;
        display: inline-block;
        font-weight: 600;
        text-transform: uppercase;
    }

    figure.snip1253 p {
        font-size: 0.8em;
        margin-bottom: 20px;
        line-height: 1.6em;
    }

    figure.snip1253 footer {
        padding: 0 25px;
        background-color: #20638f;
        color: #e6e6e6;
        font-size: 0.8em;
        line-height: 30px;
        text-align: right;
    }

    figure.snip1253 footer>div {
        display: inline-block;
        margin-left: 10px;
    }

    figure.snip1253 footer i {
        color: rgba(255, 255, 255, 0.2);
        margin-right: 5px;
    }

    figure.snip1253 a {
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        position: absolute;
        z-index: 1;
    }

    figure.snip1253:hover img,
    figure.snip1253.hover img {
        -webkit-transform: scale(1.15);
        transform: scale(1.15);
    }





    /* load more button  */
    .load-more {
        background-color: #e1e1e1;
        color: #444;
        display: block;
        height: 3em;
        line-height: 3em;
        margin: 10em auto;
        overflow: hidden;
        text-align: center;
        text-decoration: none;
        transition: all 0.3s ease, background-color 0.01s ease, color 0.01s ease;
        width: 15em;
        margin-top: 2em !important;
    }

    .load-more--loading {
        animation: rotate 1.5s linear infinite;
        animation-delay: 0.2s;
        background-color: transparent;
        border: 0.3em solid #e1e1e1;
        border-radius: 1.5em;
        border-top-color: #444;
        box-sizing: border-box;
        height: 3em;
        color: transparent;
        padding: 0;
        pointer-events: none;
        width: 3em;
    }

    @keyframes rotate {
        100% {
            transform: rotate(360deg);
        }
    }







    /* top athelets list  */

    /* athelets list */


    /******* Fonts Import Start **********/
    @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap");
    /********* Fonts Face CSS End **********/

    /******* Common Element CSS Start ******/
    * {
        margin: 0px;
        padding: 0px;
    }

    /* body {
        font-family: "Roboto", sans-serif;
        font-size: 16px;
    } */

    .hbtn {
        position: relative;
        display: inline-block;
        margin-right: 5px;
        padding: 8px 24px;
        font-weight: 500;
        font-size: 15px;
        color: #ffffff;
        border-radius: 25px;
        border: 0;
        outline: 0;
        overflow: hidden;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .hbtn.hbtn-default {
        background-color: #333c4e;
        color: #adadad;
    }

    .clear {
        clear: both;
    }

    img {
        max-width: 100%;
        border: 0px;
    }

    ul,
    ol {
        list-style: none;
    }

    a {
        text-decoration: none;
        color: inherit;
        outline: none;
        transition: all 0.4s ease-in-out;
        -webkit-transition: all 0.4s ease-in-out;
    }

    a:focus,
    a:active,
    a:visited,
    a:hover {
        text-decoration: none;
        outline: none;
    }

    a:hover {
        color: #e73700;
    }

    h2 {
        margin-bottom: 48px;
        padding-bottom: 16px;
        font-size: 20px;
        line-height: 28px;
        font-weight: 700;
        position: relative;
        text-transform: capitalize;
        color: #f2f2f2;
    }

    h3 {
        margin: 0 0 10px;
        font-size: 28px;
        line-height: 36px;
    }

    /******* Common Element CSS End *********/

    /* -------- title style ------- */
    .line-title {
        position: relative;
        width: 400px;
    }

    .line-title::before,
    .line-title::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        height: 4px;
        border-radius: 2px;
    }

    .line-title::before {
        width: 100%;
        background: #f2f2f2;
    }

    .line-title::after {
        width: 32px;
        background: #e73700;
    }

    /******* Middle section CSS Start ******/
    /* -------- Landing page ------- */
    .game-section {
        padding: 60px 50px;
    }

    .game-section .owl-stage {
        margin: 15px 0;
        display: flex;
        display: -webkit-flex;
    }

    .game-section .item {
        margin: 0 15px 60px;
        width: 320px;
        height: 400px;
        display: flex;
        display: -webkit-flex;
        align-items: flex-end;
        -webkit-align-items: flex-end;
        background: #343434 no-repeat center center / cover;
        border-radius: 16px;
        overflow: hidden;
        position: relative;
        transition: all 0.4s ease-in-out;
        -webkit-transition: all 0.4s ease-in-out;
        cursor: pointer;
    }

    .game-section .item.active {
        width: 500px;
        box-shadow: 12px 40px 40px rgba(0, 0, 0, 0.25);
        -webkit-box-shadow: 12px 40px 40px rgba(0, 0, 0, 0.25);
    }

    .game-section .item:after {
        content: "";
        display: block;
        position: absolute;
        height: 100%;
        width: 100%;
        left: 0;
        top: 0;
        background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 1));
    }

    .game-section .item-desc {
        padding: 0 24px 12px;
        color: #fff;
        position: relative;
        z-index: 1;
        overflow: hidden;
        transform: translateY(calc(100% - 54px));
        -webkit-transform: translateY(calc(100% - 54px));
        transition: all 0.4s ease-in-out;
        -webkit-transition: all 0.4s ease-in-out;
    }

    .game-section .item.active .item-desc {
        transform: none;
        -webkit-transform: none;
    }

    .game-section .item-desc p {
        opacity: 0;
        -webkit-transform: translateY(32px);
        transform: translateY(32px);
        transition: all 0.4s ease-in-out 0.2s;
        -webkit-transition: all 0.4s ease-in-out 0.2s;
    }

    .game-section .item.active .item-desc p {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }

    .game-section .owl-theme.custom-carousel .owl-dots {
        margin-top: -20px;
        position: relative;
        z-index: 5;
    }

    /******** Middle section CSS End *******/

    /***** responsive css Start ******/

    @media (min-width: 992px) and (max-width: 1199px) {
        h2 {
            margin-bottom: 32px;
        }

        h3 {
            margin: 0 0 8px;
            font-size: 24px;
            line-height: 32px;
        }

        /* -------- Landing page ------- */
        .game-section {
            padding: 50px 30px;
        }

        .game-section .item {
            margin: 0 12px 60px;
            width: 260px;
            height: 360px;
        }

        .game-section .item.active {
            width: 400px;
        }

        .game-section .item-desc {
            transform: translateY(calc(100% - 46px));
            -webkit-transform: translateY(calc(100% - 46px));
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        h2 {
            margin-bottom: 32px;
        }

        h3 {
            margin: 0 0 8px;
            font-size: 24px;
            line-height: 32px;
        }

        .line-title {
            width: 330px;
        }

        /* -------- Landing page ------- */
        .game-section {
            padding: 50px 30px 40px;
        }

        .game-section .item {
            margin: 0 12px 60px;
            width: 240px;
            height: 330px;
        }

        .game-section .item.active {
            width: 360px;
        }

        .game-section .item-desc {
            transform: translateY(calc(100% - 42px));
            -webkit-transform: translateY(calc(100% - 42px));
        }
    }

    @media (max-width: 767px) {
        body {
            font-size: 14px;
        }

        h2 {
            margin-bottom: 20px;
        }

        h3 {
            margin: 0 0 8px;
            font-size: 19px;
            line-height: 24px;
        }

        .line-title {
            width: 250px;
        }

        /* -------- Landing page ------- */
        .game-section {
            padding: 30px 15px 20px;
        }

        .game-section .item {
            margin: 0 10px 40px;
            width: 200px;
            height: 280px;
        }

        .game-section .item.active {
            width: 270px;
            box-shadow: 6px 10px 10px rgba(0, 0, 0, 0.25);
            -webkit-box-shadow: 6px 10px 10px rgba(0, 0, 0, 0.25);
        }

        .game-section .item-desc {
            padding: 0 14px 5px;
            transform: translateY(calc(100% - 42px));
            -webkit-transform: translateY(calc(100% - 42px));
        }
    }








    /* you may like section  */
    .section-news {
        padding: 80px 0;
    }

    .section-news .header-section {
        margin-bottom: 8px;
    }

    .section-news .header-section .small-title {
        position: relative;
        text-transform: uppercase;
        color: #333856;
        font-size: 20px;
        font-family: "Ubuntu", sans-serif;
    }

    .section-news .header-section .small-title span {
        display: inline-block;
        height: 2px;
        width: 20px;
        background-color: #fe2782;
        margin-right: 12px;
        transform: translateY(-6px);
    }

    .section-news .header-section .title {
        text-transform: uppercase;
        font-weight: 700;
        color: #333856;
        font-family: "Ubuntu", sans-serif;
        font-size: 50px;
    }

    .section-news .single-news {
        margin-top: 30px;
        box-shadow: 0 8px 15px 0 rgba(0, 0, 0, .15);
    }

    .section-news .single-news img {
        width: 100%;
    }

    .section-news .single-news .content {
        padding: 35px;
    }

    .section-news .single-news .date {
        display: inline-block;
        margin-bottom: 15px;
        background-color: #000;
        color: #fff;
        font-weight: 700;
        font-size: 15px;
        padding: 7px 25px;
    }

    .section-news .single-news .title {
        margin-bottom: 12px;
        text-transform: uppercase;
        font-weight: 700;
        font-family: "Ubuntu", sans-serif;
        font-size: 29px;
    }

    .section-news .single-news .title a {
        text-decoration: none;
        color: #353857;
    }

    .section-news .single-news .text {
        font-size: 18px;
    }

    .section-news .single-news .author {
        margin-right: 28px;
    }

    .section-news .single-news .author,
    .section-news .single-news .comments {
        text-transform: uppercase;
        font-weight: 600;
        color: #000;
        font-size: 18px;
    }

    @media (max-width: 575.99px) {
        .section-news .header-section .small-title {
            font-size: 18px;
        }

        .section-news .header-section .small-title span {
            transform: translateY(-5px);
        }

        .section-news .header-section .title {
            font-size: 32px;
        }
    }

    @media (min-width: 576px) and (max-width: 767.99px) {
        .section-news .header-section .small-title {
            font-size: 18px;
        }

        .section-news .header-section .small-title span {
            transform: translateY(-5px);
        }

        .section-news .header-section .title {
            font-size: 32px;
        }
    }

    @media (min-width: 768px) and (max-width: 991.99px) {
        .section-news .header-section .title {
            font-size: 40px;
        }

        .section-news .single-news .content {
            padding: 25px;
        }

        .section-news .single-news .title {
            font-size: 22px;
        }

        .section-news .single-news .text {
            font-size: 16px;
        }

        .section-news .single-news .author,
        .section-news .single-news .comments {
            font-size: 14px;
        }

        .section-news .single-news .author {
            margin-right: 15px;
        }
    }















    /* news latest  */

    @import url("https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700");

    /* *,
body {
  font-family: "Montserrat", sans-serif;
  font-weight: 400;
} */

    .badge {
        border-radius: 2px;
        padding: 3px 6px;
        text-transform: uppercase;
        font-size: 10px;
        font-weight: 600;
    }

    .badge.badge-danger {
        background-color: #ff2400;
    }

    .badge.badge-info {
        background-color: #58bafc;
    }

    .badge.badge-dark {
        background-color: #406177;
    }

    .hbtn {
        position: relative;
        display: inline-block;
        margin-right: 5px;
        padding: 8px 24px;
        font-weight: 500;
        font-size: 15px;
        color: #ffffff;
        border-radius: 25px;
        border: 0;
        outline: 0;
        overflow: hidden;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .hbtn.hbtn-default {
        background-color: #333c4e;
        color: #adadad;
    }

    .latest-news {
        padding-top: 80px;
        padding-bottom: 80px;
    }

    .latest-news .row-title {
        text-align: left;
        font-size: 27px;
        font-weight: 700;
        color: #f2f2f2;
        margin-bottom: 30px;
    }

    .latest-news .main-btn-holder {
        text-align: right;
        margin-bottom: 30px;
    }

    .latest-news .post-box {
        position: relative;
        border-radius: 15px;
        padding: 115px 35px 40px 35px;
        margin: 20px 0;
        z-index: 1;
    }

    .latest-news .post-box.blue-bg {
        background-color: #4789fc;
    }

    .latest-news .post-box.blue-bg .post-img {
        opacity: 0.45;
    }

    .latest-news .post-box.grey-bg {
        background-color: #333c4e;
    }

    .latest-news .post-box.grey-bg .post-img {
        opacity: 0.15;
    }

    .latest-news .post-box.yellow-bg {
        background-color: #ffc600;
    }

    .latest-news .post-box.yellow-bg .post-img {
        opacity: 0.11;
    }

    .latest-news .post-box .post-img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 15px;
        z-index: -1;
        background-size: 100%;
        background-position: center;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    .latest-news .post-box .badge {
        margin-bottom: 8px;
    }

    .latest-news .post-box .post-title {
        font-size: 19px;
        font-weight: 700;
        line-height: 23px;
        color: #ffffff;
        max-width: 70%;
        margin-bottom: 15px;
    }

    .latest-news .post-box .post-link a {
        font-size: 10.5px;
        font-weight: 600;
        padding: 10px 14px;
        color: #3e6077;
        background-color: #ffffff;
        border-radius: 5px;
        text-decoration: none;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    .latest-news .post-box .post-link a:hover {
        color: #2b91d7;
    }

    .post-box {
        display: inline-block;
        width: 100%;
        max-width: 1070px;
        margin-bottom: 80px;
    }

    .post-box .post-title {
        font-size: 27px;
        font-weight: 700;
        color: #4d5666;
        margin-bottom: 18px;
    }

    .blue-bg {
        background-color: #2a74e3;
    }

    @media (max-width: 1200px) {
        .latest-news .post-box .post-title {
            max-width: 100%;
        }
    }

    @media (max-width: 992px) {
        .latest-news .row-title {
            font-size: 25px;
        }
    }

    @media (max-width: 768px) {
        .latest-news .row-title {
            text-align: center;
        }

        .latest-news .main-btn-holder {
            text-align: center;
        }
    }

    @media (max-width: 480px) {
        .latest-news {
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .latest-news .row-title {
            font-size: 25px;
            text-align: left;
            margin-bottom: 5px;
        }

        .latest-news .main-btn-holder {
            display: none;
        }
    }
</style>


<br>
<br>
<h1 class='text-center' style="color: #ffffff;">Pick a Story to read more</h1>
<br>
<div class="container">

    <!-- news portion  -->
    <div class="row">

        <figure class="snip1253 col-lg-4">
            <div class="image"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_960/f_auto/v1538355600/primary/adm4sgm4aqbnohylsj1h" /></div>
            <figcaption>
                <div class="date"><span class="day">28</span><span class="month">Oct</span></div>
                <h3>WRESTLING GRECO-ROMAN </h3>
                <p>
                    The power of sport at the World Wrestling Championships 2022
                </p>
            </figcaption>
            <footer>
                <div class="views"><i class="ion-eye"></i>2,907</div>
                <div class="love"><i class="ion-heart"></i>623</div>
                <div class="comments"><i class="ion-chatboxes"></i>23</div>
            </footer><a href="Wrestling.php"></a>
        </figure>

        <figure class="snip1253 hover col-lg-4">
            <div class="image"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_640/f_auto/v1538355600/primary/zyspytxpknjccipzwuz7" /></div>
            <figcaption>
                <div class="date"><span class="day">17</span><span class="month">Nov</span></div>
                <h3>ROWING</h3>
                <p>
                    2022 World Rowing Championships: Preview, schedule and stars to watch in Racice
                </p>
            </figcaption>
            <footer>
                <div class="views"><i class="ion-eye"></i>1,870</div>
                <div class="love"><i class="ion-heart"></i>973</div>
                <div class="comments"><i class="ion-chatboxes"></i>85</div>
            </footer><a href="Wrestling.php"></a>
        </figure>

        <figure class="snip1253 col-lg-4">
            <div class="image"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_640/f_auto/v1663061024/primary/vllpt8v0bb8uue38qy6s" /></div>
            <figcaption>
                <div class="date"><span class="day">01</span><span class="month">Dec</span></div>
                <h3>BASKETBALL</h3>
                <p>
                    Trailer released for 'The Redeem Team' about Team USA's quest for redemption at Beijing 2008
                </p>
            </figcaption>
            <footer>
                <div class="views"><i class="ion-eye"></i>928</div>
                <div class="love"><i class="ion-heart"></i>198</div>
                <div class="comments"><i class="ion-chatboxes"></i>23</div>
            </footer><a href="Wrestling.php"></a>
        </figure>

    </div>


    <div class="row">

        <figure class="snip1253 col-lg-4">
            <div class="image"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_480/f_auto/v1538355600/primary/bqgtvnfbpf6djdap7fez" /></div>
            <figcaption>
                <div class="date"><span class="day">28</span><span class="month">Aug</span></div>
                <h3>SHOOTING </h3>
                <p>
                    Doreen Vennekamp claims Paris 2024 Olympic quota spot for Germany by winning 2022 European Championships Pistol title in women's 25m
                </p>
            </figcaption>
            <footer>
                <div class="views"><i class="ion-eye"></i>52</div>
                <div class="love"><i class="ion-heart"></i>4</div>
                <div class="comments"><i class="ion-chatboxes"></i>20</div>
            </footer><a href="Wrestling.php"></a>
        </figure>

        <figure class="snip1253 col-lg-4">
            <div class="image"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_480/f_auto/v1538355600/primary/jwqpl1smxw9glsptouep" /></div>
            <figcaption>
                <div class="date"><span class="day">10</span><span class="month">Oct</span></div>
                <h3>FEATURE | Surfing </h3>
                <p>
                    From using broken boards to chasing Paris 2024: Meet Senegal’s top surfer Cherif Fall
                </p>
            </figcaption>
            <footer>
                <div class="views"><i class="ion-eye"></i>200</div>
                <div class="love"><i class="ion-heart"></i>63</div>
                <div class="comments"><i class="ion-chatboxes"></i>3</div>
            </footer><a href="Wrestling.php"></a>
        </figure>

        <figure class="snip1253 col-lg-4">
            <div class="image"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_760/f_auto/v1538355600/primary/qqxbu0gxkj31ii6mbdj9" /></div>
            <figcaption>
                <div class="date"><span class="day">20</span><span class="month">Jun</span></div>
                <h3>ARTISTIC GYMNASTICS </h3>
                <p>
                    Sunisa Lee: “Getting back into the swing of things” - Artistic gymnastics weekly news roundup
                </p>
            </figcaption>
            <footer>
                <div class="views"><i class="ion-eye"></i>907</div>
                <div class="love"><i class="ion-heart"></i>23</div>
                <div class="comments"><i class="ion-chatboxes"></i>43</div>
            </footer><a href="Wrestling.php"></a>
        </figure>

    </div>


    <div class="row">

        <figure class="snip1253 col-lg-4">
            <div class="image"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_760/f_auto/v1538355600/primary/ekuony33uulkrmkstfs8" /></div>
            <figcaption>
                <div class="date"><span class="day">28</span><span class="month">Feb</span></div>
                <h3>RHYTHMIC GYMNASTICS </h3>
                <p>
                    Sofia Raffaeli makes history with two gold medals at Rhythmic Worlds
                </p>
            </figcaption>
            <footer>
                <div class="views"><i class="ion-eye"></i>7</div>
                <div class="love"><i class="ion-heart"></i>3</div>
                <div class="comments"><i class="ion-chatboxes"></i>0</div>
            </footer><a href="Wrestling.php"></a>
        </figure>

        <figure class="snip1253 col-lg-4">
            <div class="image"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_760/f_auto/v1538355600/primary/bqgtvnfbpf6djdap7fez" /></div>
            <figcaption>
                <div class="date"><span class="day">8</span><span class="month">May</span></div>
                <h3>SHOOTING </h3>
                <p>
                    France, Germany, Poland, Czech Republic and Norway claim Paris 2024 Olympic sport shooting quota spots at the 2022 European Championships
                </p>
            </figcaption>
            <footer>
                <div class="views"><i class="ion-eye"></i>97</div>
                <div class="love"><i class="ion-heart"></i>2</div>
                <div class="comments"><i class="ion-chatboxes"></i>0</div>
            </footer><a href="Wrestling.php"></a>
        </figure>

        <figure class="snip1253 col-lg-4">
            <div class="image"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_760/f_auto/v1538355600/primary/bqgtvnfbpf6djdap7fez" /></div>
            <figcaption>
                <div class="date"><span class="day">12</span><span class="month">Jan</span></div>
                <h3>SHOOTING </h3>
                <p>
                    Doreen Vennekamp claims Paris 2024 Olympic quota spot for Germany by winning 2022 European Championships Pistol title in women's 25m
                </p>
            </figcaption>
            <footer>
                <div class="views"><i class="ion-eye"></i>70</div>
                <div class="love"><i class="ion-heart"></i>3</div>
                <div class="comments"><i class="ion-chatboxes"></i>2</div>
            </footer><a href="Wrestling.php"></a>
        </figure>

    </div>


    <div class="row">

        <figure class="snip1253 col-lg-4">
            <div class="image"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_760/f_auto/v1538355600/primary/ja7hzrigobdmhesod0yz" /></div>
            <figcaption>
                <div class="date"><span class="day">28</span><span class="month">Oct</span></div>
                <h3>Wrestling </h3>
                <p>
                    World Wrestling Championships 2022: Vinesh Phogat wins bronze medal
                </p>
            </figcaption>
            <footer>
                <div class="views"><i class="ion-eye"></i>2</div>
                <div class="love"><i class="ion-heart"></i>0</div>
                <div class="comments"><i class="ion-chatboxes"></i>0</div>
            </footer><a href="Wrestling.php"></a>
        </figure>

        <figure class="snip1253 col-lg-4">
            <div class="image"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_480/f_auto/v1538355600/primary/isehjrj4yyjopflvfawc" /></div>
            <figcaption>
                <div class="date"><span class="day">2</span><span class="month">Dec</span></div>
                <h3>SAILING </h3>
                <p>
                    How to qualify for sailing at Paris 2024. The Olympics qualification system explained
                </p>
            </figcaption>
            <footer>
                <div class="views"><i class="ion-eye"></i>72</div>
                <div class="love"><i class="ion-heart"></i>3</div>
                <div class="comments"><i class="ion-chatboxes"></i>3</div>
            </footer><a href="Wrestling.php"></a>
        </figure>

        <figure class="snip1253 col-lg-4">
            <div class="image"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_480/f_auto/v1538355600/primary/thcxlabsh8cnpt3mjru1" /></div>
            <figcaption>
                <div class="date"><span class="day">28</span><span class="month">Jun</span></div>
                <h3>Tennis </h3>
                <p>
                    WTA Chennai Open 2022 tennis: India’s Ankita Raina crashes out in first round
                </p>
            </figcaption>
            <footer>
                <div class="views"><i class="ion-eye"></i>907</div>
                <div class="love"><i class="ion-heart"></i>3</div>
                <div class="comments"><i class="ion-chatboxes"></i>0</div>
            </footer><a href="Wrestling.php"></a>
        </figure>

    </div>






    <!-- load more button ...  -->
    <a href="#" class="load-more">Load more...</a>


<!-- Top Athletes list  -->

<section class="game-section">
        <h2 class="line-title">Top Athletes</h2>
        <div class="owl-carousel custom-carousel owl-theme">
            <div class="item active" style="background-image: url(https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/primary/p1jcpwht2lfkrqzdt7qr);">
                <div class="item-desc">
                    <h3>Yuto HORIGOME</h3>
                    <p>Born on January 7th, 1999, in Tokyo Japan, Yuto Horigome was sitting on a skateboard before he was standing on one. His father Ryota Horigome, a former street skateboarder, introduced his young son to the sport before he could walk. <a href="Athletes-YUTO.php">Learn more...</a></p>
                </div>
            </div>
            <div class="item" style="background-image: url(https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/v1655996747/primary/cvkohtnfy2gchvxw2w8l);">
                <div class="item-desc">
                    <h3>Rayssa LEAL</h3>
                    <p>Born in 2008, Leal rose to prominence in a way only the youngest generation really know how – through the medium of viral video. A short video clip of Leal perfectly executing a heelflip down a set of stairs while donning a bright <a href="Athletes-YUTO.php">Learn more...</a></p>
                </div>
            </div>
            <div class="item" style="background-image: url(https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/primary/g6lng0pdjmrtll7jo34c);">
                <div class="item-desc">
                    <h3>Katie LEDECKY</h3>
                    <p>It can not be easy to be billed as a future female Michael Phelps. But after pulling off a surprise gold medal at London 2012 at the age of 15, and a subsequent five golds at the 2015 Worlds, it was perhaps no surprise that the <a href="Athletes-YUTO.php">Learn more...</a></p>
                </div>
            </div>
            <div class="item" style="background-image: url(https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/primary/u3bpi1kmm0n9nptnfgon);">
                <div class="item-desc">
                    <h3>Kristof Milak</h3>
                    <p> <a href="Athletes-YUTO.php">Learn more...</a></p>
                </div>
            </div>
            <div class="item" style="background-image: url(https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/primary/heoopmantspbzhbwwjya);">
                <div class="item-desc">
                    <h3>Kaylee MCKEOWN</h3>
                    <p>Born on January 7th, 1999, in Tokyo Japan, Yuto Horigome was sitting on a skateboard before he was standing on one.
                        His father Ryota Horigome, a former street skateboarder, introduced his young son to the sport before he could walk. <a href="Athletes-YUTO.php">Learn more...</a></p>
                </div>
            </div>
            <div class="item" style="background-image: url(https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/primary/kxv7nqrkzzwxkvysxdeo);">
                <div class="item-desc">
                    <h3>Caeleb DRESSEL</h3>
                    <p> It is unlikely that any swimmer will ever surpass Michael Phelps’ astonishing record of 23 Olympic gold medals – but Dressel looks like the aquatic star most likely to be able to accumulate large amounts of medals at summer Games, Phelps-style. The Florida-born 23-year-old, like Phelps, can swim <a href="Athletes-YUTO.php">Learn more...</a></p>
                </div>
            </div>
            <div class="item" style="background-image: url(https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/v1655913118/primary/aopkmtbyyc7fbhoh6gzz);">
                <div class="item-desc">
                    <h3>Flora DUFFY </h3>
                    <p> <a href="Athletes-YUTO.php">Learn more...</a></p>
                </div>
            </div>
            <div class="item" style="background-image: url(https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/primary/o7jvipsa0kfv8uv9hzbm);">
                <div class="item-desc">
                    <h3>Neeraj CHOPRA </h3>
                    <p> Despite his young age, Indian javelin thrower Neeraj Chopra has already etched his name in the history books by becoming the first and only track and field athlete from the country to win an Olympic medal - that too a gold. <a href="Athletes-Neeraj.php">Learn more...</a></p>
                </div>
            </div>
        </div>
    </section>




    <!-- you may like lis too part  -->

    <section class="section-news">
        <div class="container">
            <div class="row" style="margin-right: 0px;">
                <div class="col-sm-10">
                    <h2 class="line-title">YOU MAY LIKE</h2>

                </div>
            </div>
            <div class="row">
                <!-- start single news -->
                <div class="col-12 col-md-4">
                    <div class="single-news">
                        <a href="India-Vs-Norway.php"><img style="max-height: 192px;" src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/ghciazhg3kpcyvko15ez" alt=""></a>
                        <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                            <p class="text" style="color: #ffffff;">India vs Norway, Davis Cup World Group I live streaming: Focus on Ramkumar Ramanathan, Casper Ruud - full schedule</p>
                        </div>
                    </div>
                </div>
                <!-- / end single news -->
                <!-- start single news -->
                <div class="col-12 col-md-4">
                    <div class="single-news">
                        <a href="India-Vs-Norway.php"><img style="max-height: 192px;" src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/xbjf99ixaqbealg6xgb5" alt=""></a>
                        <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                            <p class="text" style="color: #ffffff;">World Wrestling Championships 2022: Full Indian results at a glance </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="single-news">
                        <a href="India-Vs-Norway.php"><img style="max-height: 192px;" src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/xom2vr8u5c3a9omdqvlz" alt=""></a>
                        <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                            <p class="text" style="color: #ffffff;">Darja Varfolomeev, Sofia Raffaeli continue to make history at Rhythmic Gymnastics World Championships </p>
                        </div>
                    </div>
                </div>
                <!-- / end single news -->
            </div>

            <div class="row">
                <!-- start single news -->
                <div class="col-12 col-md-4">
                    <div class="single-news">
                        <a href="India-Vs-Norway.php"><img style="max-height: 192px;" src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/fifgf1h1gwnfb0mjoq0k" alt=""></a>
                        <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                            <p class="text" style="color: #ffffff;">Roger Federer at Grand Slams - Swiss tennis maestro in numbers </p>
                        </div>
                    </div>
                </div>
                <!-- / end single news -->
                <!-- start single news -->
                <div class="col-12 col-md-4">
                    <div class="single-news">
                        <a href="India-Vs-Norway.php"><img style="max-height: 192px;" src="https://tpc.googlesyndication.com/simgad/3482695119929836243?" alt=""></a>
                        <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                            <p class="text" style="color: #ffffff;"> Two-time Olympian Lissane De Witte, takes us on a trip to discover the stories behind the most epic moments from Tokyo 2020</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="single-news">
                        <a href="India-Vs-Norway.php"><img style="max-height: 192px;" src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/xah7mi1cepd1nkggfcky" alt=""></a>
                        <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                            <p class="text" style="color: #ffffff;">World Wrestling Championships 2022: Nisha Dahiya falls short of bronze; Naveen makes repechage</p>
                        </div>
                    </div>
                </div>
                <!-- / end single news -->
            </div>

            <div class="row">
                <!-- start single news -->
                <div class="col-12 col-md-4">
                    <div class="single-news">
                        <a href="India-Vs-Norway.php"><img style="max-height: 192px;" src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/hyvsp2wpvemuu2yqtsq0" alt=""></a>
                        <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                            <p class="text" style="color: #ffffff;">EuroBasket 2022: Semi-finals preview, schedule and how to watch NBA stars in action </p>
                        </div>
                    </div>
                </div>
                <!-- / end single news -->
                <!-- start single news -->
                <div class="col-12 col-md-4">
                    <div class="single-news">
                        <a href="India-Vs-Norway.php"><img style="max-height: 192px;" src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/lviervvasunmggxbtlj8" alt=""></a>
                        <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                            <p class="text" style="color: #ffffff;">WNBA Finals 2022: Alyssa Thomas' historic Game 3 triple double helps Connecticut stave off elimination</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="single-news">
                        <a href="India-Vs-Norway.php"><img style="max-height: 192px;" src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/cool4cyn7vrxw79uyvue" alt=""></a>
                        <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                            <p class="text" style="color: #ffffff;">2022 European Shooting Championships: Denmark, Czech Republic claim Olympic quota spots for Paris 2024</p>
                        </div>
                    </div>
                </div>
                <!-- / end single news -->
            </div>




        </div>
    </section>







    <!-- news for you -->


    <div class="latest-news container-fluid">
        <div class="container">

            <div class="row">
                <div class="col-sm-8">
                    <h2 class="line-title">Latest News</h2>

                </div>
                <div class="col-sm-4">
                    <div class="main-btn-holder">
                        <a href="news.php" class="hbtn hbtn-default">View more</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="post-box blue-bg">
                        <div class="post-img"></div>
                        <span class="badge badge-danger">Hot</span>
                        <div class="post-title">EuroBasket 2022 Final</div>
                        <div class="post-link"><a href="EuroBasket-2022-Final.php">Learn more</a></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="post-box grey-bg">
                        <div class="post-img"></div>
                        <span class="badge badge-info">Hot</span>
                        <div class="post-title">Bigup To Our Sponsors</div>
                        <div class="post-link"><a href="EuroBasket-2022-Final.php">Learn more</a></div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="post-box yellow-bg">
                        <div class="post-img"></div>
                        <span class="badge badge-dark">Hot</span>
                        <div class="post-title">Discover our new website</div>
                        <div class="post-link"><a href="EuroBasket-2022-Final.php">Learn more</a></div>
                    </div>
                </div>
            </div>

        </div>
    </div>










</div>









<br>
<?php
require_once 'assets/php/footer.php';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>


<!-- slide athelets list s -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">





<script type="text/javascript">
    // back to top
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 400);
            return false;
        });
    });

    //check notification
    checkNotification();

    function checkNotification() {
        $.ajax({
            url: 'assets/php/process.php',
            method: 'post',
            data: {
                action: 'checkNotification'
            },
            success: function(response) {
                $("#checkNotification").html(response);
            }
        });
    }

    //checking user is logged in or not
    $.ajax({
        url: 'assets/php/action.php',
        method: 'post',
        data: {
            action: 'checkUser'
        },
        success: function(response) {
            if (response === 'bye') {
                window.location = 'index.php';
            }
        }
    });



    /* Demo purposes only */
    $(".hover").mouseleave(
        function() {
            $(this).removeClass("hover");
        }
    );





    // load more button 
    $(".load-more").click(function(e) {
        e.preventDefault();
        $(this).addClass("load-more--loading");
        setTimeout(function(e) {
            $(".load-more--loading").removeClass("load-more--loading");
        }, 3000);
    });


    // slide athelets list 
    $(".custom-carousel").owlCarousel({
        autoWidth: true,
        loop: true
    });
    $(document).ready(function() {
        $(".custom-carousel .item").click(function() {
            $(".custom-carousel .item").not($(this)).removeClass("active");
            $(this).toggleClass("active");
        });
    });
</script>

</body>

</html>