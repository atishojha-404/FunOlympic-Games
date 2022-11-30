<?php
require_once 'assets/php/header.php';
?>


<style>
    /* profile */

    .user-profile {
        margin: auto;
        width: 25em;
        height: 11em;
        background: #000;
        border-radius: .3em;
    }

    .user-profile .username {
        margin: auto;
        margin-top: -4.40em;
        margin-left: 5.80em;
        color: #658585;
        font-size: 1.53em;
        font-family: "Coda", sans-serif;
        font-weight: bold;
    }

    .user-profile .bio {
        margin: auto;
        display: inline-block;
        margin-left: 10.43em;
        color: #e76043;
        font-size: .87em;
        font-family: "varela round", sans-serif;
    }

    .user-profile>.description {
        margin: auto;
        margin-top: 1.35em;
        margin-right: 4.43em;
        width: 14em;
        color: #c0c5c5;
        font-size: .87em;
        font-family: "varela round", sans-serif;
    }

    .user-profile>img.avatar {
        padding: .7em;
        margin-left: .3em;
        margin-top: .3em;
        height: 6.23em;
        width: 6.23em;
        border-radius: 18em;
    }

    .user-profile ul.data {
        margin: 2em auto;
        height: 3.70em;
        background: #4eb6b6;
        text-align: center;
        border-radius: 0 0 .3em .3em;
    }

    .user-profile li {
        margin: 0 auto;
        padding: 1.30em;
        width: 33.33334%;
        display: table-cell;
        text-align: center;
    }

    .user-profile span {
        font-family: "varela round", sans-serif;
        color: #e3eeee;
        white-space: nowrap;
        font-size: 1.27em;
        font-weight: bold;
    }

    .user-profile span:hover {
        color: #daebea;
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







    /* video of athletes  */

    .video_img {
        width: 100%;
        margin-bottom: 30px;
    }

    .youtube-video-play-button {
        height: 30px;
        width: 45px;
        background-color: rgba(50, 50, 50, 0.75);
        border-radius: 5px;
        opacity: 0.6;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
    }

    .openbox:hover .youtube-video-play-button {
        background-color: rgba(255, 69, 70, 0.9);
        opacity: 1.0;
        cursor: pointer;
    }

    .youtube-video-play-button:after {
        content: "";
        display: block;
        position: absolute;
        top: 7px;
        left: 16px;
        margin: 0 auto;
        border-style: solid;
        border-width: 8px 0 8px 16px;
        border-color: transparent transparent transparent rgba(255, 255, 255, 1);
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
<!-- profile place  -->
<div class="user-profile">
    <img class="avatar" src="https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/primary/o7jvipsa0kfv8uv9hzbm" alt="Ash" />
    <div class="username">Neeraj Chopra</div>
    <div class="bio">
        IND
    </div>
    <div class="description">
        Athletics
    </div>
</div>






<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <h1 style="color: #ffffff; font-size: 4rem; font-weight: 700;  line-height: 4rem; margin: 2.4rem 0px; text-transform: uppercase; width: auto;">
                Biography
            </h1>
        </div>
        <div class="col-lg-2"></div>
        <div class="col-lg-6">
            <h2 style="color: #ffffff; font-size: 1.3rem; line-height: 2.3rem; margin-top: 2.4rem;">
                Despite his young age, Indian javelin thrower Neeraj Chopra has already etched his name in the history books by becoming the first and only track and field athlete from the country to win an Olympic medal – that too a gold.
                <br>
                Neeraj Chopra’s gold medal at Tokyo 2020 was also India’s second individual Olympic gold medal after shooter Abhinav Bindra’s 10m air rifle glory at Beijing 2008.

            </h2>
        </div>
    </div>

    <!-- load more button ...  -->
    <a href="#" class="load-more">Load more...</a>
</div>



<div class="container">
    <div class="row" style="margin-right: 0px;">
        <div class="col-sm-10">
            <h2 class="line-title" style="color: #ffffff;">Videos</h2>

        </div>
    </div>
</div>
<!-- videos of athletes -->
<div class="container">
    <div class="row">
        <div id="video-gallery">
            <div class="col-sm-6 openbox" style="max-width: 100%!important;" data-src="https://youtu.be/rW_fwcmyIfk" data-poster="https://img.olympicchannel.com/images/image/private/f_auto/t_16-9_760/primary/oioe91jr32lt0pfrnosx">
                <img class="video_img" style="width: 1146px; height: 421px;" src="https://img.olympicchannel.com/images/image/private/f_auto/t_16-9_760/primary/oioe91jr32lt0pfrnosx" />
                <div class="youtube-video-play-button"></div>
            </div>
            <div class="col-sm-6 openbox" style="max-width: 100%!important;" data-src="https://youtu.be/T0E6C28Qzlc" data-poster="https://img.olympicchannel.com/images/image/private/f_auto/t_16-9_640/primary/gueep46sgjn4gwowygkg">
                <img class="video_img" style="width: 1146px; height: 421px;" src="https://img.olympicchannel.com/images/image/private/f_auto/t_16-9_640/primary/gueep46sgjn4gwowygkg" />
                <div class="youtube-video-play-button"></div>
            </div>
            <div class="col-sm-4 openbox" style="max-width: 100%!important;" data-src="https://youtu.be/-1K3laWEfeA" data-poster="https://img.olympicchannel.com/images/image/private/f_auto/t_16-9_760/primary/igfutgl4mixse0i9i4v2">
                <img class="video_img" style="width: 1146px; height: 421px;" src="https://img.olympicchannel.com/images/image/private/f_auto/t_16-9_760/primary/igfutgl4mixse0i9i4v2" />
                <div class="youtube-video-play-button"></div>
            </div>
            <div class="col-sm-4 openbox" style="max-width: 100%!important;" data-src="https://youtu.be/CtrMp0EK9_M" data-poster="https://img.olympicchannel.com/images/image/private/f_auto/t_16-9_380/primary/oeoq1zg1yvuoidqxxf96">
                <img class="video_img" style="width: 1146px; height: 421px;" src="https://img.olympicchannel.com/images/image/private/f_auto/t_16-9_380/primary/oeoq1zg1yvuoidqxxf96" />
                <div class="youtube-video-play-button"></div>
            </div>
        </div>
    </div>



    <!-- load more button ...  -->
    <a href="#" class="load-more">Load more...</a>
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


<!-- video athletes  -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/lightgallery/latest/css/lightgallery.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
<script src="https://cdn.jsdelivr.net/g/lightgallery,lg-autoplay,lg-fullscreen,lg-hash,lg-share,lg-thumbnail,lg-video,lg-zoom"></script>
<script src="https://f.vimeocdn.com/js/froogaloop2.min.js"></script>


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


    // load more button 
    $(".load-more").click(function(e) {
        e.preventDefault();
        $(this).addClass("load-more--loading");
        setTimeout(function(e) {
            $(".load-more--loading").removeClass("load-more--loading");
        }, 3000);
    });


    // athletes videos 
    $(document).ready(function() {
        $("#video-gallery").lightGallery();
    });
</script>

</body>

</html>