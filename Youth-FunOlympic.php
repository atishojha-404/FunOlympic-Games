<?php
require_once 'assets/php/header.php';
?>


<style>
    /* image place  */
    @import url("https://fonts.googleapis.com/css?family=Maven+Pro:400,500,600,700,800,900&display=swap");

    /* * {
        font-family: "Maven Pro", sans-serif;
    } */

    .bg-dark {
        background-color: #000000 !important;
    }

    .form-control {
        background-color: #000000 !important;
    }


    @import url(http://weloveiconfonts.com/api/?family=brandico);
    @import url(https://fonts.googleapis.com/css?family=Junge);

    * {
        margin: 0;
        padding: 0;


    }

    /* brandico */
    [class*="brandico-"]:before {
        font-family: 'brandico', sans-serif;
    }

    .content {
        background: url('https://cdn.dmcl.biz/media/image/120978/o/GettyImages-454016614.jpg')no-repeat;
        background-size: cover;
        font-family: junge, georgia;
        text-align: center;
    }

    .welcomeText,
    .form,
    .social {
        width: 100%;
    }

    /*welcome text*/
    .welcome {
        height: 100px;
        position: relative;
        border-bottom: 1px solid;
        overflow: hidden;
    }

    .greet {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 100%;
        font-size: 50px;
        text-align: center;
        line-height: 100px;
        transition: all .5s;
    }

    /*taglines*/
    .subText {
        width: 100%;
        height: 100px;
        position: relative;
        font-size: 30px;
        overflow: hidden;
    }

    .subText p {
        height: 100%;
        line-height: 100px;
        text-align: center;

    }

    .subTexts {
        width: 100%;
        position: absolute;
        bottom: 100%;
        text-align: center;
        overflow: hidden;
        transition: all .5s;
    }

    /*FORM*/
    .form {
        width: 100%;
        height: 100px;
        position: relative;
    }

    .sub {
        width: 35%;
        height: 50px;
        margin: auto;
        opacity: 0;
        border: none;
        border-radius: 50px;
        background: #ffffff;
        box-shadow: inset 0 0 5px rgba(0, 0, 0, .4), 0 0 0px 5px rgba(0, 0, 0, .1);
        transition: all .5s;
    }

    .email {
        width: 70%;
        height: 70%;
        margin: 1% 0;
        padding-left: 10px;
        background: none;
        border: none;
        font-size: 20px;
    }

    input:focus {
        outline: none;
    }

    .button {
        width: 20%;
        height: 100%;
        float: right;
        border: none;
        border-radius: 0 50px 50px 0;
        font-size: 16px;
        background: red;
        background-color: #49afcd;
        background-image: linear-gradient(top, #5bc0de, #2f96b4);
        cursor: pointer;
        transition: all .5s;
    }

    .button:hover {
        background: #2f96b4;
        box-shadow: inset 0 1px 5px rgba(0, 0, 0, .3);
    }

    /*footer-follow us*/
    .follow {
        width: 100%;
        height: 100px;
        position: relative;
        overflow: hidden;
    }

    .followUs {
        width: 100%;
        height: 100%;
        position: absolute;
        bottom: 100%;
        line-height: 100px;
        text-align: center;
        font-size: 40px;
        transition: all .5s;
    }

    @media screen and (max-width:930px) {
        .subTexts p {
            font-size: 20px
        }

        .button {
            font-size: 12px
        }

    }

    @media screen and (max-width:600px) {

        .welcome,
        .subText,
        .sub {
            background: rgba(255, 255, 255, .3);
        }

        .welcome {
            border-radius: 20px 20px 0 0;
        }

        .subText {
            border-radius: 0 0 20px 20px;
        }

        .sub {
            border: 1px solid;
        }

        .greet {
            font-size: 30px
        }

        .subTexts p {
            font-size: 16px;
        }

        .button {
            font-size: 8px;
            margin-right: -3%
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
</style>












<br>
<br>
<!-- IMAGE place  -->

<div class="content" style="height: 670px;">
    <div class="welcomeText">
        <div class="welcome">
            <h1 class="greet" style="color: #ffffff;">FunOLYMPIC RESULTS</h1>
        </div>
        <h3 class="subscribe" style="color: #ffffff;">Your source for event results and medalists from every FunOlympic Games.</h3>
    </div>

    <br>
    <br>

    <div class="social">
        <div class="follow">
            <p class="followUs" style="color: #ffffff!important;"> </p>
        </div>
    </div>
</div>


<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <h1 style="color: #ffffff; font-size: 4rem; font-weight: 700;  line-height: 4rem; margin: 2.4rem 0px; text-transform: uppercase; width: auto;">
                About the <br>YOG
            </h1>
        </div>
        <div class="col-lg-2"></div>
        <div class="col-lg-6">
            <h2 style="color: #ffffff; font-size: 1.3rem; line-height: 2.3rem; margin-top: 2.4rem;">
                The Youth Olympic Games (YOG) are an elite sporting event for young people from all over the world - but an event distinct from other youth sports competitions. The YOG also include a series of educational activities with three areas of focus: protecting the athletes, working on performance, and assisting the athletes outside sport.
            </h2>
        </div>
    </div>
</div>






<!-- you may like lis too part  -->

<section class="section-news">
    <div class="container">
        <div class="row" style="margin-right: 0px;">
            <div class="col-sm-10">
                <h2 class="line-title" style="color: #ffffff;">YOU MAY LIKE</h2>

            </div>
        </div>
        <div class="row">
            <!-- start single news -->
            <div class="col-12 col-md-4">
                <div class="single-news">
                    <a href="India-Vs-Norway.php"><img style="max-height: 170px;" src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/ghciazhg3kpcyvko15ez" alt=""></a>
                    <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                        <p class="text" style="color: #ffffff;">India vs Norway, Davis Cup World Group I live streaming: Focus on Ramkumar Ramanathan, Casper Ruud - full schedule</p>
                    </div>
                </div>
            </div>
            <!-- / end single news -->
            <!-- start single news -->
            <div class="col-12 col-md-4">
                <div class="single-news">
                    <a href="India-Vs-Norway.php"><img style="max-height: 170px;" src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/xbjf99ixaqbealg6xgb5" alt=""></a>
                    <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                        <p class="text" style="color: #ffffff;">World Wrestling Championships 2022: Full Indian results at a glance </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="single-news">
                    <a href="India-Vs-Norway.php"><img style="max-height: 170px;" src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/xom2vr8u5c3a9omdqvlz" alt=""></a>
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
                    <a href="India-Vs-Norway.php"><img style="max-height: 170px;" src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/fifgf1h1gwnfb0mjoq0k" alt=""></a>
                    <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                        <p class="text" style="color: #ffffff;">Roger Federer at Grand Slams - Swiss tennis maestro in numbers </p>
                    </div>
                </div>
            </div>
            <!-- / end single news -->
            <!-- start single news -->
            <div class="col-12 col-md-4">
                <div class="single-news">
                    <a href="India-Vs-Norway.php"><img style="max-height: 170px;" src="https://tpc.googlesyndication.com/simgad/3482695119929836243?" alt=""></a>
                    <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                        <p class="text" style="color: #ffffff;"> Two-time Olympian Lissane De Witte, takes us on a trip to discover the stories behind the most epic moments from Tokyo 2020</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="single-news">
                    <a href="India-Vs-Norway.php"><img style="max-height: 170px;" src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/xah7mi1cepd1nkggfcky" alt=""></a>
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
                    <a href="India-Vs-Norway.php"><img style="max-height: 170px;" src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/hyvsp2wpvemuu2yqtsq0" alt=""></a>
                    <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                        <p class="text" style="color: #ffffff;">EuroBasket 2022: Semi-finals preview, schedule and how to watch NBA stars in action </p>
                    </div>
                </div>
            </div>
            <!-- / end single news -->
            <!-- start single news -->
            <div class="col-12 col-md-4">
                <div class="single-news">
                    <a href="India-Vs-Norway.php"><img style="max-height: 170px;" src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/lviervvasunmggxbtlj8" alt=""></a>
                    <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                        <p class="text" style="color: #ffffff;">WNBA Finals 2022: Alyssa Thomas' historic Game 3 triple double helps Connecticut stave off elimination</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="single-news">
                    <a href="India-Vs-Norway.php"><img style="max-height: 170px;" src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/cool4cyn7vrxw79uyvue" alt=""></a>
                    <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                        <p class="text" style="color: #ffffff;">2022 European Shooting Championships: Denmark, Czech Republic claim Olympic quota spots for Paris 2024</p>
                    </div>
                </div>
            </div>
            <!-- / end single news -->
        </div>




    </div>
</section>






<br>
<?php
require_once 'assets/php/footer.php';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        // back to top
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


    });



    // image part 
    window.addEventListener('load', function() {
        var welcome = document.querySelector('.greet'),
            subtext = document.querySelector('.subTexts'),
            form = document.querySelector('.sub'),
            follow = document.querySelector('.followUs'),
            social = document.querySelectorAll('.socialIcon'),
            delay = 1000;


        setTimeout(function() {
            welcome.style.top = '0';
        }, delay);
        setTimeout(function() {
            subtext.style.bottom = '0%';
        }, delay * 2);
        setTimeout(function() {
            subtext.style.bottom = '-100%';
        }, delay * 4);
        setTimeout(function() {
            form.style.opacity = '1';
        }, delay * 5);
        setTimeout(function() {
            follow.style.bottom = '0%';
        }, delay * 6);
        setTimeout(
            function() {
                social[0].style.marginTop = '0px';
                social[1].style.marginTop = '0px';
                social[2].style.marginTop = '0px';
            }, delay * 7
        );

    });
</script>

</body>

</html>