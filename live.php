<?php
require_once 'assets/php/header.php';
?>



<style>
    /* like button  */

    .heart {
        width: 100px;
        height: 100px;
        background: url("https://cssanimation.rocks/images/posts/steps/heart.png") no-repeat;
        background-position: 0 0;
        cursor: pointer;
        transition: background-position 1s steps(28);
        transition-duration: 0s;
    }

    .heart.is-active {
        transition-duration: 1s;
        background-position: -2800px 0;
    }

    .placement {
        transform: translate(-50%, -50%);
    }


    /* share button  */

    *,
    *:before,
    *:after {
        box-sizing: border-box;
    }

    .share-button {
        position: absolute;
        height: 36px;
        top: 0%;
        margin-top: -17px;
        width: 200px;
        left: 100%;
        margin-left: -65px;
        background: #368b8b;
        border-radius: 20px;
        overflow: hidden;
        line-height: 36px;
        user-select: none;
        text-align: center;
    }

    /*----- FIX overflow + transform + border-radius ---*/
    .share-button:before {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        content: '';
        box-shadow: 0 0 0 50px #36bfa6;
        box-sizing: content-box;
        transform: translate(0, 0);
        border-radius: 50px;
        z-index: 3;
        pointer-events: none;
    }

    .lid {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #fff;
        border-radius: 20px;
        color: #000000;
        transition: 300ms ease all;
        transform-origin: 0 0;
        cursor: default;
        z-index: 4;
    }

    .open .lid {
        transform: rotateX(90deg);
    }

    .thank-you {
        position: absolute;
        top: -100px;
        left: 0;
        width: 100%;
        color: #fff;
        transition: 300ms ease all;
    }

    .thankyou .thank-you {
        position: absolute;
        top: 0px;
    }

    .share-item {
        display: block;
        color: #368b8b;
        background: #fff;
        text-decoration: none;
        height: 30px;
        width: 30px;
        text-align: center;
        line-height: 30px;
        border-radius: 50%;
        float: left;
        margin-left: 3px;
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
        transition: 500ms ease all;
    }

    .share-item:active {
        background: #eb4c89;
        transition: 50ms ease all;
    }

    .share-item:nth-child(1) {
        transform: translateX(200px) rotate(180deg);
    }

    .share-item:nth-child(2) {
        transform: translateX(400px) rotate(200deg);
    }

    .share-item:nth-child(3) {
        transform: translateX(580px) rotate(220deg);
    }

    .share-item:nth-child(4) {
        transform: translateX(740px) rotate(240deg);
    }

    .share-item:nth-child(5) {
        transform: translateX(880px) rotate(260deg);
    }

    .share-item:nth-child(6) {
        transform: translateX(1000px) rotate(280deg);
    }

    .open .share-item {
        transform: translateX(0) rotate(0);
        margin-left: 3px;
    }

    .share-items {
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        padding: 3px 0;
        width: 200px;
    }

    .share-items-wrapper {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 200px;
        left: 67%;
        margin-left: -133.5px;
    }

    .shared .share-item {
        transform: translateY(200px);
    }

    .shared .share-item:nth-child(1) {
        transition: 200ms cubic-bezier(.32, -0.22, .9, .93) all;
    }

    .shared .share-item:nth-child(2) {
        transition: 600ms cubic-bezier(.32, -0.22, .9, .93) all;
    }

    .shared .share-item:nth-child(3) {
        transition: 1000ms cubic-bezier(.32, -0.22, .9, .93) all;
    }

    .shared .share-item:nth-child(4) {
        transition: 1400ms cubic-bezier(.32, -0.22, .9, .93) all;
    }

    .shared .share-item:nth-child(5) {
        transition: 1800ms cubic-bezier(.32, -0.22, .9, .93) all;
    }

    .shared .share-item:nth-child(6) {
        transition: 2200ms cubic-bezier(.32, -0.22, .9, .93) all;
    }







    /* comment  */

    .text-right {
        text-align: right;
    }

    .comments-app {
        margin: 50px auto;
        max-width: 680px;
        padding: 0 50px;
        width: 100%;
    }

    .comments-app h1 {
        color: #191919;
        margin-bottom: 1.5em;
        text-align: center;
        text-shadow: 0 0 2px rgba(152, 152, 152, 1);
    }

    .comment-form {}

    .comment-form .comment-avatar {}

    .comment-form .form {
        margin-left: 100px;
    }

    .comment-form .form .form-row {
        margin-bottom: 10px;
    }

    .comment-form .form .form-row:last-child {
        margin-bottom: 0;
    }

    .comment-form .form .input {
        background-color: #fcfcfc;
        border: none;
        border-radius: 4px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, .15);
        color: #555f77;
        font-family: inherit;
        font-size: 14px;
        padding: 5px 10px;
        outline: none;
        width: 100%;

        -webkit-transition: 350ms box-shadow;
        -moz-transition: 350ms box-shadow;
        -ms-transition: 350ms box-shadow;
        -o-transition: 350ms box-shadow;
        transition: 350ms box-shadow;
    }

    .comment-form .form textarea.input {
        height: 100px;
        padding: 15px;
    }

    .comment-form .form label {
        color: #555f77;
        font-family: inherit;
        font-size: 14px;
    }

    .comment-form .form input[type=submit] {
        background-color: #555f77;
        border: none;
        border-radius: 4px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, .15);
        color: #fff;
        cursor: pointer;
        display: block;
        margin-left: auto;
        outline: none;
        padding: 6px 15px;

        -webkit-transition: 350ms box-shadow;
        -moz-transition: 350ms box-shadow;
        -ms-transition: 350ms box-shadow;
        -o-transition: 350ms box-shadow;
        transition: 350ms box-shadow;
    }

    .comment-form .form .input:focus,
    .comment-form .form input[type=submit]:focus,
    .comment-form .form input[type=submit]:hover {
        box-shadow: 0 2px 6px rgba(121, 137, 148, .55);
    }

    .comment-form .form.ng-submitted .input.ng-invalid,
    .comment-form .form .input.ng-dirty.ng-invalid {
        box-shadow: 0 2px 6px rgba(212, 47, 47, .55) !important;
    }

    .comment-form .form .input.disabled {
        background-color: #E8E8E8;
    }


    .comments {}

    .comment-form,
    .comment {
        margin-bottom: 20px;
        position: relative;
        z-index: 0;
    }

    .comment-form .comment-avatar,
    .comment .comment-avatar {
        border: 2px solid #fff;
        border-radius: 50%;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
        height: 80px;
        left: 0;
        overflow: hidden;
        position: absolute;
        top: 0;
        width: 80px;
    }

    .comment-form .comment-avatar img,
    .comment .comment-avatar img {
        display: block;
        height: auto;
        width: 100%;
    }

    .comment .comment-box {
        background-color: #fcfcfc;
        border-radius: 4px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, .15);
        margin-left: 100px;
        min-height: 60px;
        position: relative;
        padding: 15px;
    }

    .comment .comment-box:before,
    .comment .comment-box:after {
        border-width: 10px 10px 10px 0;
        border-style: solid;
        border-color: transparent #FCFCFC;
        content: "";
        left: -10px;
        position: absolute;
        top: 20px;
    }

    .comment .comment-box:before {
        border-color: transparent rgba(0, 0, 0, .05);
        top: 22px;
    }

    .comment .comment-text {
        color: #555f77;
        font-size: 15px;
        margin-bottom: 25px;
    }

    .comment .comment-footer {
        color: #acb4c2;
        font-size: 13px;
    }

    .comment .comment-footer:after {
        content: "";
        display: table;
        clear: both;
    }

    .comment .comment-footer a {
        color: #acb4c2;
        text-decoration: none;

        -webkit-transition: 350ms color;
        -moz-transition: 350ms color;
        -ms-transition: 350ms color;
        -o-transition: 350ms color;
        transition: 350ms color;
    }

    .comment .comment-footer a:hover {
        color: #555f77;
        text-decoration: underline;
    }

    .comment .comment-info {
        float: left;
        width: 85%;
    }

    .comment .comment-author {}

    .comment .comment-date {}

    .comment .comment-date:before {
        content: "|";
        margin: 0 10px;
    }

    .comment-actions {
        float: left;
        text-align: right;
        width: 15%;
    }




    /* you may also like */
    /* video part selection  */

    .video-cards {
        display: flex;
        flex-wrap: wrap;
        justify-content: center
    }

    .video-cards .card {
        align-self: flex-start;
        overflow: hidden;
        border-radius: 8px;
        border: none !important;
        position: relative;
        width: 100%;
        max-width: 301px;
        height: 440px;
        transition: all 300ms ease-in-out;
        background: #282828;
        margin: 10px;
        transition: 2s;
    }

    .video-cards .card-title {
        font-size: 16px;
        color: #fff;
        margin: 0px;
        margin-bottom: 8px;
        transition: all 350ms ease-in-out;
    }

    /* .video-cards .card-1 .card-img,
    .video-cards .card-1 .card-img-hovered {
        background-image: url('https://static-1.gumroad.com/res/gumroad/assets/collections/food_and_cooking_thumb-34fb9ef316a7b01177529839891c3a03.jpg');
    } */

    .video-cards .category {
        border-radius: 15px;
        background-color: rgb(1, 86, 205);
        min-width: 90px;
        padding: 5px 10px;
        font-size: 12px;
        color: #ffffff;
        text-align: center;
        text-decoration: none !important;
        display: inline-block;
        margin-bottom: 12px;
    }

    .video-cards .card-text {
        font-size: 12px;
        color: rgb(255, 255, 255);
        line-height: 1.5;
        margin-bottom: 12px;
    }

    .video-cards .tags-ul {
        padding: 0px;
        display: flex;
        margin: 0px;
        align-items: center;
        list-style: none;
    }

    .video-cards .tags-ul li {
        border-radius: 4px;
        background-color: rgb(17, 17, 17);
        /* width: 100%; */
        min-width: 52px;
        height: 22px;
        font-size: 11px;
        color: #ffffff;
        margin-right: 5px;
        text-align: center;
        display: inline-block;
        line-height: 22px;
    }

    .video-cards .tags-ul li a {
        font-size: 11px;
        color: #ffffff !important;
        text-decoration: none !important;
    }

    .video-cards .card .card-info {
        position: relative;
        padding: 15px;
        transition: all 200ms ease-in-out;
    }

    .video-cards .card .card-img {
        visibility: hidden;
        width: 100%;
        height: 245px;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
    }

    .video-cards .card .card-img-hovered {
        --card-img-hovered-overlay: linear-gradient(to bottom,
                rgba(0, 0, 0, 0),
                rgba(0, 0, 0, 0));
        transition: all 350ms ease-in-out;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        width: 100%;
        position: absolute;
        height: 245px;
        top: 0;
        border-radius: 8px;
    }

    .video-cards .card .card-img-hovered .play-icon {
        position: absolute;
        top: 10px;
        left: 10px;
        border-radius: 50%;
        padding-left: 3px;
        background: #0156cd;
        border: 4px solid rgba(255, 255, 255, 0.9);
        font-size: 14px;
        color: #fff;
        width: 38px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .video-cards .card .card-info .card-creator {
        padding-bottom: 0.75rem;
        transition: all 250ms ease-in-out;
    }

    .video-cards .card:hover {
        cursor: pointer;
        box-shadow: 0px 15px 35px rgba(227, 252, 239, 0.1),
            0px 5px 15px rgba(0, 0, 0, 0.07);
        transform: scale(1.025);
    }

    .video-cards .card:hover .card-img-hovered::before {
        opacity: 0;
        bottom: 0px;
    }

    .video-cards .card:hover .card-img-hovered {
        --card-img-hovered-overlay: linear-gradient(to bottom,
                rgba(0, 0, 0, 0),
                rgba(0, 0, 0, 0.65));
        height: 100% !important;
    }

    .video-cards .card:hover .card-info .tags-ul,
    .video-cards .card:hover .card-info .category,
    .video-cards .card:hover .card-info .card-text {
        opacity: 0 !important;
    }

    .video-cards .card:hover .card-info .card-title {
        transform: translateY(118px);
    }

    .video-cards .card:hover .card-img-hovered .play-icon {
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        transition: 1s;
    }
</style>





<div class="container">
    <!-- live video  -->
    <video style="width: 1090px; height: 550px;" playsinline autoplay muted loop>

        <source src="assets/videos/live.mp4" type="video/webm">
        <source src="assets/videos/live.mp4" type="video/mp4">
    </video>

    <!-- live text  -->
    <div class="overlay" style="position:absolute; top: 73px; left: 1167px; z-index:1;">
        <li class="" style="background-color: red;  padding: 0px; display: flex; margin: 0px; align-items: center; list-style: none; border-radius: 4px; min-width: 52px;
        height: 22px;
        font-size: 11px;
        color: #ffffff;
        margin-right: 5px;
        text-align: center;
        display: inline-block;
        line-height: 22px;">
            Live
        </li>
    </div>


    <div class="overlay" style="position:absolute; top: 640px; left: 290px; z-index:1;">
        <!-- like button  -->
        <div class="placement">
            <div class="heart"></div>
        </div>



        <!-- share button  -->
        <div class="share-button">
            <div class="lid">Share</div>
            <div class="share-items-wrapper">
                <div class="share-items">
                    <a href="https://www.facebook.com/" class="share-item" target="_blank">
                        <span class="fa fa-facebook"></span>
                    </a>
                    <a href="#" class="share-item">
                        <span class="fa fa-twitter"></span>
                    </a>
                    <a href="#" class="share-item">
                        <span class="fa fa-dribbble"></span>
                    </a>
                    <a href="#" class="share-item">
                        <span class="fa fa-instagram"></span>
                    </a>
                    <a href="#" class="share-item">
                        <span class="fa fa-tumblr"></span>
                    </a>
                    <a href="#" class="share-item">
                        <span class="fa fa-behance"></span>
                    </a>
                </div>
            </div>
            <div class="thank-you">
                Thank you
            </div>
        </div>

    </div>



    <!-- comment  -->

    <div class="comments-app" ng-app="commentsApp" ng-controller="CommentsController as cmntCtrl">

        <!-- From -->
        <div class="comment-form">
            <!-- Comment Avatar -->
            <div class="comment-avatar">
                <img src="assets/images/profile.jpg">
            </div>

            <form class="form" name="form" ng-submit="#" novalidate>
                <div class="form-row">
                    <textarea class="input" ng-model="cmntCtrl.comment.text" placeholder="Add comment..." required></textarea>
                </div>

                <!-- <div class="form-row">
                    <input class="input" ng-class="{ disabled: cmntCtrl.comment.anonymous }" ng-disabled="cmntCtrl.comment.anonymous" ng-model="cmntCtrl.comment.author" ng-required="!cmntCtrl.comment.anonymous" placeholder="Email" type="email">
                </div>

                <div class="form-row text-right">
                    <input id="comment-anonymous" ng-change="cmntCtrl.anonymousChanged()" ng-model="cmntCtrl.comment.anonymous" type="checkbox" checked>
                    <label for="comment-anonymous">Anonymous</label>
                </div> -->

                <div class="form-row">
                    <input type="submit" value="Add Comment">
                </div>
            </form>
        </div>

        <!-- Comments List -->


        <!-- Comment - Dummy -->
        <div class="comment">
            <!-- Comment Avatar -->
            <div class="comment-avatar">
                <img src="assets/images/profile.jpg">
            </div>

            <!-- Comment Box -->
            <div class="comment-box">
                <div class="comment-text">The extension and rhythm he manages to get and keep throughout the whole test is insane! The level of accuracy and control is that of the top and I don't think we will ever see another pair like them again</div>
                <div class="comment-footer">
                    <div class="comment-info">
                        <span class="comment-author">
                            <a href="user@gmail.com">Jash</a>
                        </span>
                        <span class="comment-date">Sep 2, 2022 11:32:04 PM</span>
                    </div>

                    <div class="comment-actions">
                        <a href="#">Reply</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Comment - Dummy -->
        <div class="comment">
            <!-- Comment Avatar -->
            <div class="comment-avatar">
                <img src="assets/images/profile.jpg">
            </div>

            <!-- Comment Box -->
            <div class="comment-box">
                <div class="comment-text">Dressage is like ballet. It takes years and years hard training. Tears and sweat and pain. Overcoming yourself and extreme difficulties. Then finally after years of hard work you go on stage and  it all looks so beautiful, easy and enjoyable like there has never been any effort to achieve this level.
The effort however is intense. You give everything to get there. Every tear is worth that high standart and grand beauty.</div>
                <div class="comment-footer">
                    <div class="comment-info">
                        <span class="comment-author">
                            <a href="mailto:ximme13@somedomain.io">Mate</a>
                        </span>
                        <span class="comment-date">Sep 1, 202 11:32:04 PM</span>
                    </div>

                    <div class="comment-actions">
                        <a href="#">Reply</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>


<!-- live  video section  -->
<div class="row" style="margin-right: 0px;">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <h2 class="line-title" style="color: #ffffff;">You May Like</h2>

    </div>
</div>

<div class="video-cards">

    <div class="card card-1">
        <div class="card-img"></div>
        <a href=" #" class="card-link">
            <div class="card-img-hovered" style="background-image: url(https://img.olympicchannel.com/images/image/private/t_16-9_640/f_auto/primary/zuupvhv0fqsi7fuevfhq);">
                <div class="play-icon" id="play">
                    <i class="fas fa-play"></i>
                </div>
            </div>
        </a>
        <div class="card-info">
            <h3 class="card-title">Wrestling</h3>
            <a href="#" class="category">World Championships</a>
            <p class="card-text"> Belgrade</p>
            <ul class="tags-ul">

                <li class="">EVENTS</li>

                <li class="" style="background-color: red;">Live</li>

            </ul>
        </div>
    </div>

    <div class="card card-1">
        <div class="card-img"></div>
        <a href="# " class="card-link">
            <div class="card-img-hovered" style="background-image: url(https://img.olympicchannel.com/images/image/private/t_16-9_640/f_auto/primary/eh7ln6difletuaz7tm38);">
                <div class="play-icon" id="play">
                    <i class="fas fa-play"></i>
                </div>
            </div>
        </a>
        <div class="card-info">
            <h3 class="card-title">Shooting</h3>
            <a href="#" class="category"> Olympic Qualifier </a>
            <p class="card-text"> Women's 50m Rifle 3 Positions Final </p>
            <ul class="tags-ul">

                <li class="">EVENTS</li>

                <li class="" style="background-color: red;">Live</li>

            </ul>
        </div>
    </div>

    <div class="card card-1">
        <div class="card-img"></div>
        <a href="# " class="card-link">
            <div class="card-img-hovered" style="background-image: url(https://img.olympicchannel.com/images/image/private/t_16-9_640/f_auto/primary/alnvewni9vilzrmrp2l9);">
                <div class="play-icon" id="play">
                    <i class="fas fa-play"></i>
                </div>
            </div>
        </a>
        <div class="card-info">
            <h3 class="card-title">Rhythmic Gymnastics </h3>
            <a href="#" class="category"> Olympic Qualifier </a>
            <p class="card-text">Individual Clubs & Ribbon Finals </p>
            <ul class="tags-ul">

                <li class="">EVENTS</li>

                <li class="" style="background-color: red;">Live</li>

            </ul>
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

<!-- share button  -->

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

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




    // like button 
    $(function() {
        $(".heart").on("click", function() {
            $(this).toggleClass("is-active");
        });
    });


    // share button 
    $('.share-button').on('click', function() {
        $(this).addClass('open');
    })
    $(".share-items").draggable({
        axis: "x",
        containment: ".share-items-wrapper"
    });
    $(".share-item").on('click', function() {
        $('.share-button').addClass('shared');
        setTimeout(function() {
            $('.share-button').addClass('thankyou');
        }, 800);
        setTimeout(function() {
            $('.share-button').removeClass('open');
            $('.share-button').removeClass('shared');
            $('.share-button').removeClass('thankyou');
        }, 2500);
    });






   
</script>

</body>

</html>