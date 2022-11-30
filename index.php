<?php
include_once 'assets/php/config.php';
$db = new Database();

$sql = "UPDATE visitors SET hits = hits+1 WHERE id = 0";
$stmt = $db->conn->prepare($sql);
$stmt->execute();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Atish Ojha">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>FunOlympic-Games</title>
    <link rel="icon" href="assets/images/logo.png" type="image/icon type">
    <!-- Bootstrap 4 CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
    <!-- Fontawesome CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" href="assets\css\footer.css" />

    <style type="text/css">
        @import url("https://fonts.googleapis.com/css?family=Maven+Pro:400,500,600,700,800,900&display=swap");

        * {
            font-family: "Maven Pro", sans-serif;
        }

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
            background: url('https://live.staticflickr.com/6198/6150478713_604956b71a_b.jpg')no-repeat;
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



        /* live videos section  */


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





        /* ================================= *
 * Cards outer Styling
 ==================================== */
        main.concord {
            margin: 20px 0;
            text-align: center;
        }

        .card {
            z-index: 1;
            cursor: pointer;
            display: inline-block;
            position: static;
            text-align: left;
            width: 89%;
            height: 400px;
            max-height: 400px;
            border-radius: 10px;
            margin: 15px 8px;
            overflow: hidden;
            background: white;
            box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.10),
                0px 1px 20px 0px rgba(0, 0, 0, 0.10);
            transform-origin: center;
            transition: transform, width, height, border-radius, top, left;
            transition-duration: 500ms;
            transition-timing-function: ease-in-out;
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -o-user-select: none;
        }

        .card .wrapper {
            height: 100%;
            width: 100%;
            position: relative;
            display: table;
        }

        .card h5,
        .card h6,
        .card p {
            margin: 4px 0;
        }

        .card h6,
        .card p {
            color: #8f8f91;
        }

        .card h6 {
            text-transform: uppercase;
        }

        .card img {
            display: table-cell;
            position: relative;
            width: 100%;
            height: 100%;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .card>.wrapper>footer {
            display: table-cell;
            width: 100%;
            height: auto;
            padding: 15px 20px;
            box-sizing: border-box;
        }

        .card>.wrapper>footer {
            background: white;
            position: absolute;
            bottom: 0;
            left: 0;
        }

        /* Card Style: x */
        .card.x h4,
        .card.x p {
            color: black;
        }

        .card.x>.wrapper>footer {
            position: absolute;
            left: 0;
            background: transparent;
            padding: 15px 20px;
        }

        .card.x>.wrapper>footer {
            bottom: 0;
        }

        /* Card Style: v */
        .card.v .wrapper {
            display: block;
        }

        /* Card Style: i */
        .card.i h2,
        .card.i h6,
        .card.i p {
            color: white;
        }

        .card.i h2 {
            width: 50%;
            text-transform: uppercase;
        }

        .card.i p {
            font-size: 0.7em;
        }

        .card.i>.wrapper>footer {
            position: absolute;
            left: 0;
            padding: 15px 20px;
        }


        .card.i>.wrapper>footer {
            background: transparent;
            bottom: 0;
        }

        button.card {
            position: relative;
            height: auto;
            width: auto;
            border: 0;
            outline: 0;
            font-weight: 600;
            color: rgba(28, 111, 215, 0.88);
            text-align: left;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 4.4px 13px;
        }

        /* Card Style~input styling*/
        input[type="button"].concord {
            cursor: pointer;
            position: absolute;
            height: auto;
            width: auto;
            border: 0;
            outline: 0;
            font-weight: 600;
            color: rgba(28, 80, 245, 0.98);
            text-align: left;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 4.4px 13px;
            margin: 0;
            right: 20px;
            bottom: 19px;
            box-sizing: border-box;
            background-color: aliceblue;
        }

        input[type="button"].concord:active {
            color: rgba(28, 80, 245, 0.48);
        }

        input[type="button"].concord.exit {
            display: none;
            z-index: 99;
            top: 15px;
            right: 20px;
            bottom: initial;
            padding: 2px 6px;
            font-size: 1.2em;
            line-height: 1em;
            color: rgba(255, 255, 255, 0.75);
            background: rgba(20, 20, 25, 0.65);
        }

        input[type="button"].concord-exit:active {
            color: rgba(28, 80, 245, 0.48);
        }


        @media screen and (min-width: 530px) {
            .card {
                width: 75%;
            }
        }

        @media screen and (min-width: 600px) {
            .card {
                max-width: 340px;
                width: 65%;
            }
        }

        @media screen and (max-width: 599px) {
            .card.in-flight {
                border-radius: 0;
                max-width: 100%;
                top: 0 !important;
                left: 0 !important;
            }
        }

        @media screen and (min-width: 600px) {
            .card.in-flight {
                left: calc((100vw - 460px) / 2) !important;
                max-width: 460px !important;
            }
        }

        @media screen and (min-width: 730px) {
            .card {
                max-width: 340px;
                width: 40%;
            }

            .card.in-flight {
                left: calc((100vw - 700px) / 2) !important;
                max-width: 700px !important;
            }
        }

        @media screen and (min-width: 1000px) {
            .card {
                width: 340px;
            }

            .card.xl {
                width: 600px;
                max-width: 600px;
            }

            .card.xl.active {
                width: 100%;
                max-width: 700px;
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
















        /* back to top */
        .back-to-top {
            position: fixed;
            bottom: 25px;
            right: 25px;
            display: none;
        }
    </style>
</head>

<body style="background-color: black!important;">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">

        <!-- Brand/logo -->
        <a class="navbar-brand" href="index.php">
            <img src="assets\images\logo.png" alt="logo" style="width:40px;">
        </a>

        <!-- Brand -->
        <a class="navbar-brand" href="index.php">&nbsp;&nbsp;FunOlympic-Games</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="account.php">Athletes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="account.php">Sport</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="account.php">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="account.php">FunOlympic Channel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="account.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="account.php">Feedback</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="account.php">Notification</a>
                </li>
                <li class="nav-item">
                    <a href="account.php" class="nav-link">
                        <i class="fas fa-user-circle fa-2x"></i> </a>

                </li>
            </ul>
        </div>

        <form class="form-inline" action="#">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-success" type="submit">Search</button>
        </form>
    </nav>


    <!-- Welcome start-->







    <div class="content">
        <div class="welcomeText">
            <div class="welcome">
                <h1 class="greet">WELCOME</h1>
            </div>
            <div class="subText">
                <div class="subTexts">
                    <p class="subscribe">Subscribe</p>
                    <p class="soon">We are launching soon</p>
                </div>
            </div>
        </div>

        <div class="form">
            <form action="account.php" class="sub">
                <input class='email' type="email">
                <button class="button" value="Send">Subscribe</button>
            </form>
        </div>

        <div class="social">
            <div class="follow">
                <p class="followUs" style="color: #ffffff!important;">Or follow us</p>
            </div>
        </div>
    </div>


    <!-- welcome end -->
    <br>
    <br>





    <!-- live  video section  -->
    <div class="row" style="margin-right: 0px;">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <h2 class="line-title">Live now</h2>

        </div>
    </div>

    <div class="video-cards">

        <div class="card card-1">
            <div class="card-img"></div>
            <a href="account.php" class="card-link">
                <div class="card-img-hovered" style="background-image: url(https://img.olympicchannel.com/images/image/private/t_16-9_640/f_auto/primary/aahnnhoebsz4gfbxnroe);">
                    <div class="play-icon" id="play">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
            </a>
            <div class="card-info">
                <h3 class="card-title">Equestrian</h3>
                <a href="account.php" class="category"> Olympic Qualifier </a>
                <p class="card-text">Dressage Day 1 | Eventing World Championship</p>
                <ul class="tags-ul">

                    <li class="">EVENTS</li>

                    <li class="" style="background-color: red;">Live</li>

                </ul>
            </div>
        </div>

        <div class="card card-1">
            <div class="card-img"></div>
            <a href="account.php" class="card-link">
                <div class="card-img-hovered" style="background-image: url(https://img.olympicchannel.com/images/image/private/t_16-9_640/f_auto/primary/zuupvhv0fqsi7fuevfhq);">
                    <div class="play-icon" id="play">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
            </a>
            <div class="card-info">
                <h3 class="card-title">Wrestling</h3>
                <a href="account.php" class="category">World Championships</a>
                <p class="card-text"> Belgrade</p>
                <ul class="tags-ul">

                    <li class="">EVENTS</li>

                    <li class="" style="background-color: red;">Live</li>

                </ul>
            </div>
        </div>

        <div class="card card-1">
            <div class="card-img"></div>
            <a href="account.php" class="card-link">
                <div class="card-img-hovered" style="background-image: url(https://img.olympicchannel.com/images/image/private/t_16-9_640/f_auto/primary/eh7ln6difletuaz7tm38);">
                    <div class="play-icon" id="play">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
            </a>
            <div class="card-info">
                <h3 class="card-title">Shooting</h3>
                <a href="account.php" class="category"> Olympic Qualifier </a>
                <p class="card-text"> Women's 50m Rifle 3 Positions Final </p>
                <ul class="tags-ul">

                    <li class="">EVENTS</li>

                    <li class="" style="background-color: red;">Live</li>

                </ul>
            </div>
        </div>

        <div class="card card-1">
            <div class="card-img"></div>
            <a href="account.php" class="card-link">
                <div class="card-img-hovered" style="background-image: url(https://img.olympicchannel.com/images/image/private/t_16-9_640/f_auto/primary/alnvewni9vilzrmrp2l9);">
                    <div class="play-icon" id="play">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
            </a>
            <div class="card-info">
                <h3 class="card-title">Rhythmic Gymnastics </h3>
                <a href="account.php" class="category"> Olympic Qualifier </a>
                <p class="card-text">Individual Clubs & Ribbon Finals </p>
                <ul class="tags-ul">

                    <li class="">EVENTS</li>

                    <li class="" style="background-color: red;">Live</li>

                </ul>
            </div>
        </div>

    </div>






    <br>
    <br>

    <!-- youth olympic games  -->

    <main class="concord" id="concord-cards">

        <div class="card xl" style="background-color: #000000;">
            <section class="wrapper">
                <h1 style="color: #ffffff;">Youth FunOlympic <br> Games</h1><br>
                <h3 style="color: #ffffff;">The Youth FunOlympic Games are an international sports, cultural, and educational event for talented young athletes.</h3>

                <p><a href="account.php"><input type="button" class="concord" style="right: 150px;" value="Learn more about Youth FunOlympics Games"></input></a></p>
            </section>
        </div>
        <div class="card x" style="width: 700px; max-width: 700px;">
            <section class="wrapper">
                <img style="background-image: url(https://cdn.dmcl.biz/media/image/120978/o/GettyImages-454016614.jpg)"></img>
            </section>
        </div>
    </main>







    <!-- you may also like  -->



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
                        <a href="account.php"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/ghciazhg3kpcyvko15ez" alt=""></a>
                        <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                            <p class="text" style="color: #ffffff;">India vs Norway, Davis Cup World Group I live streaming: Focus on Ramkumar Ramanathan, Casper Ruud - full schedule</p>
                        </div>
                    </div>
                </div>
                <!-- / end single news -->
                <!-- start single news -->
                <div class="col-12 col-md-4">
                    <div class="single-news">
                        <a href="account.php"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/xbjf99ixaqbealg6xgb5" alt=""></a>
                        <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                            <p class="text" style="color: #ffffff;">World Wrestling Championships 2022: Full Indian results at a glance </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="single-news">
                        <a href="account.php"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/xom2vr8u5c3a9omdqvlz" alt=""></a>
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
                        <a href="account.php"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/fifgf1h1gwnfb0mjoq0k" alt=""></a>
                        <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                            <p class="text" style="color: #ffffff;">Roger Federer at Grand Slams - Swiss tennis maestro in numbers </p>
                        </div>
                    </div>
                </div>
                <!-- / end single news -->
                <!-- start single news -->
                <div class="col-12 col-md-4">
                    <div class="single-news">
                        <a href="account.php"><img src="https://tpc.googlesyndication.com/simgad/3482695119929836243?" alt=""></a>
                        <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                            <p class="text" style="color: #ffffff;"> Two-time Olympian Lissane De Witte, takes us on a trip to discover the stories behind the most epic moments from Tokyo 2020</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="single-news">
                        <a href="account.php"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/xah7mi1cepd1nkggfcky" alt=""></a>
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
                        <a href="account.php"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/hyvsp2wpvemuu2yqtsq0" alt=""></a>
                        <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                            <p class="text" style="color: #ffffff;">EuroBasket 2022: Semi-finals preview, schedule and how to watch NBA stars in action </p>
                        </div>
                    </div>
                </div>
                <!-- / end single news -->
                <!-- start single news -->
                <div class="col-12 col-md-4">
                    <div class="single-news">
                        <a href="account.php"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/lviervvasunmggxbtlj8" alt=""></a>
                        <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                            <p class="text" style="color: #ffffff;">WNBA Finals 2022: Alyssa Thomas' historic Game 3 triple double helps Connecticut stave off elimination</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="single-news">
                        <a href="account.php"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/cool4cyn7vrxw79uyvue" alt=""></a>
                        <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                            <p class="text" style="color: #ffffff;">2022 European Shooting Championships: Denmark, Czech Republic claim Olympic quota spots for Paris 2024</p>
                        </div>
                    </div>
                </div>
                <!-- / end single news -->
            </div>




        </div>
    </section>





    <!-- //funolympic channal part  -->
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h1 style="color: #ffffff; font-size: 4rem; font-weight: 700;  line-height: 4rem; margin: 2.4rem 0px; text-transform: uppercase; width: auto;">
                    FUNOLYMPIC<br> CHANNEL
                </h1>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-6">
                <h2 style="color: #ffffff; font-size: 1.3rem; line-height: 2.3rem; margin-top: 2.4rem;">
                    Watch live action from your favourite sports, discover award-winning Original Films and Series and explore our 24/7 thematic linear channels.
                </h2>
            </div>
        </div>
    </div>
    <br>
    <br>




    <!-- Featured Events  video section  -->
    <div class="row">
        <div class="col-sm-8" style="margin-right: 0px;left:250px">
            <h2 class="line-title">Featured Events</h2>

        </div>
        <div class="col-sm-4">
            <div class="main-btn-holder">
                <a href="account.php" class="hbtn hbtn-default">View more</a>
            </div>
        </div>
    </div>

    <div class="video-cards">

        <div class="card card-1">
            <div class="card-img"></div>
            <a href="account.php" class="card-link">
                <div class="card-img-hovered" style="background-image: url(https://img.olympicchannel.com/images/image/private/t_16-9_380/f_auto/v1658152283/primary/cpey8nrz7lsnknn8hal5);">
                    <!-- <div class="play-icon" id="play">
                    <i class="fas fa-play"></i>
                </div> -->
                </div>
            </a>
            <div class="card-info">
                <h3 class="card-title">Shooting</h3>
                <a href="account.php" class="category">Olympic Qualifier</a>
                <p class="card-text"> Shooting | Olympic Qualifier </p>
                <ul class="tags-ul">

                    <li class="">12-25 Oct</li>

                    <li class="" style="background-color: red;">Live</li>

                </ul>
            </div>
        </div>

        <div class="card card-1">
            <div class="card-img"></div>
            <a href="account.php" class="card-link">
                <div class="card-img-hovered" style="background-image: url(https://img.olympicchannel.com/images/image/private/t_16-9_380/f_auto/v1662036643/primary/yrw7a7qf2y3ncciov2ll);">
                    <!-- <div class="play-icon" id="play">
                    <i class="fas fa-play"></i>
                </div> -->
                </div>
            </a>
            <div class="card-info">
                <h3 class="card-title">Wrestling</h3>
                <a href="account.php" class="category"> World Championships </a>
                <p class="card-text"> Belgrade</p>
                <ul class="tags-ul">

                    <li class="">15-20 Oct</li>

                    <li class="" style="background-color: red;">Live</li>

                </ul>
            </div>
        </div>

        <div class="card card-1">
            <div class="card-img"></div>
            <a href="account.php" class="card-link">
                <div class="card-img-hovered" style="background-image: url(https://img.olympicchannel.com/images/image/private/t_16-9_380/f_auto/v1538355600/primary/m9jvbfpb3tacqnlbc45n);">
                    <!-- <div class="play-icon" id="play">
                    <i class="fas fa-play"></i>
                </div> -->
                </div>
            </a>
            <div class="card-info">
                <h3 class="card-title">Rhythmic Gymnastics </h3>
                <a href="account.php" class="category"> Olympic Qualifier </a>
                <p class="card-text">Individual Clubs & Ribbon Finals</p>
                <ul class="tags-ul">

                    <li class="">25-30 Oct</li>

                    <li class="" style="background-color: red;">Live</li>

                </ul>
            </div>
        </div>

    </div>




    <br>

    <!-- pick channel  -->
    <div class="row" style="margin-right: 0px;">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h2 class="line-title">Tv Watch</h2>

        </div>
    </div>

    <div class='container'>

        <div class='row'>
            <div class='col-lg-2'>
                <div class="logobox">
                    <a href="#">
                        <img class="img-responsive" style="max-width: 200px; max-height: 75px; margin: 0 auto 0 auto;" src="https://www.directv.com/rwd/ent/networks/logos/logo_lg__CNN.png"></a>
                </div>
            </div>

            <div class='col-lg-2'>
                <div class="logobox">
                    <a href="#">
                        <img class="img-responsive" style="max-width: 200px; max-height: 75px; margin: 0 auto 0 auto;" src="https://www.directv.com/rwd/ent/networks/logos/logo_lg__TNT.png"></a>
                </div>
            </div>

            <div class='col-lg-2'>
                <div class="logobox">
                    <a href=" #">
                        <img class="img-responsive" style="max-width: 200px; max-height: 75px; margin: 0 auto 0 auto;" src="https://www.directv.com/rwd/ent/networks/logos/logo_lg__HGTV.png"></a>
                </div>
            </div>

            <div class='col-lg-2'>
                <div class="logobox">
                    <a href=" #">
                        <img class="img-responsive" style="max-width: 200px; max-height: 75px; margin: 0 auto 0 auto;" src="https://www.directv.com/rwd/ent/networks/logos/logo_lg__FX.png"></a>
                </div>
            </div>

            <div class='col-lg-2'>
                <div class="logobox">
                    <a href=" #">
                        <img class="img-responsive" style="max-width: 200px; max-height: 75px; margin: 0 auto 0 auto;" src="https://www.directv.com/rwd/ent/networks/logos/logo_lg__Spike.png"></a>
                </div>
            </div>

            <div class='col-lg-2'>
                <div class="logobox">
                    <a href=" #">
                        <img class="img-responsive" style="max-width: 200px; max-height: 75px; margin: 0 auto 0 auto;" src="https://www.directv.com/rwd/ent/networks/logos/logo_lg__MTV.png"></a>
                </div>
            </div>
        </div>

        <div class='row'>
            <div class='col-lg-2'>
                <div class="logobox">
                    <a href=" #">
                        <img class="img-responsive" style="max-width: 200px; max-height: 75px; margin: 0 auto 0 auto;" src="https://www.directv.com/rwd/ent/networks/logos/logo_lg__Travel_Channel.png"></a>
                </div>
            </div>

            <div class='col-lg-2'>
                <div class="logobox">
                    <a href=" #">
                        <img class="img-responsive" style="max-width: 200px; max-height: 75px; margin: 0 auto 0 auto;" src="https://www.directv.com/rwd/ent/networks/logos/logo_lg__Cartoon_Network.png"></a>
                </div>
            </div>

            <div class='col-lg-2'>
                <div class="logobox">
                    <a href="# ">
                        <img class="img-responsive" style="max-width: 200px; max-height: 75px; margin: 0 auto 0 auto;" src="https://www.directv.com/rwd/ent/networks/logos/logo_lg__Adult_Swim.png"></a>
                </div>
            </div>

            <div class='col-lg-2'>
                <div class="logobox">
                    <a href="# ">
                        <img class="img-responsive" style="max-width: 200px; max-height: 75px; margin: 0 auto 0 auto;" src="https://www.directv.com/rwd/ent/networks/logos/logo_lg__amc.png"></a>
                </div>
            </div>

            <div class='col-lg-2'>
                <div class="logobox">
                    <a href="# ">
                        <img class="img-responsive" style="max-width: 200px; max-height: 75px; margin: 0 auto 0 auto;" src="https://www.directv.com/rwd/ent/networks/logos/logo_lg__History.png"></a>
                </div>
            </div>

            <div class='col-lg-2'>
                <div class="logobox">
                    <a href="# ">
                        <img class="img-responsive" style="max-width: 200px; max-height: 75px; margin: 0 auto 0 auto;" src="https://www.directv.com/rwd/ent/networks/logos/logo_lg__National_Geographic.png"></a>
                </div>
            </div>
        </div>

        <div class='row'>
            <div class='col-lg-2'></div>
            <div class='col-lg-2'></div>
            <div class='col-lg-2'>
                <div class="logobox">
                    <a href=" #">
                        <img class="img-responsive" style="max-width: 200px; max-height: 75px; margin: 0 auto 0 auto;" src="https://www.directv.com/rwd/ent/networks/logos/logo_lg__TBS.png"></a>
                </div>
            </div>

            <div class='col-lg-2'>
                <div class="logobox">
                    <a href=" #">
                        <img class="img-responsive" style="max-width: 200px; max-height: 75px; margin: 0 auto 0 auto;" src="https://www.directv.com/rwd/ent/networks/logos/logo_lg__USA.png"></a>
                </div>
            </div>

        </div>




        <!-- sign up request -->

        <br>
        <br>


        <main class="concord" id="concord-cards">

            <div class="card x">
                <section class="wrapper">
                    <img style="background-image: url(https://static3.depositphotos.com/1003661/181/i/600/depositphotos_1818693-stock-photo-torch.jpg)"></img>
                </section>
            </div>
            <div class="card xl" style="background-color: #000000; width: 700px; max-width: 700px;">
                <section class="wrapper">
                    <h1 style="color: #ffffff;">Personalise your FunOlympic experience</h1><br>
                    <h3 style="color: #ffffff;">Stay up to date on your favourite sports and athletes. Watch original FunOlympic films and documentaries. Get exclusive stories about your favourite FunOlympic athletes and sports into your e-mail inbox.</h3>

                    <p><a href="account.php"><input type="button" class="concord" value="SignIn / SignUp"></input></a></p>
                </section>
            </div>

        </main>




        <!-- featured athletes  -->

        <section class="game-section">
            <h2 class="line-title">Featured Athletes</h2>
            <div class="owl-carousel custom-carousel owl-theme">
                <div class="item active" style="background-image: url(https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/primary/adzmrximqjxi6qiggikf);">
                    <div class="item-desc">
                        <h3>Armand DUPLANTIS </h3>
                        <p>Armand "Mondo" Duplantis, born in Louisiana in 1999, has long been pegged as the one to watch in men's pole vaulting. But few, even among the most avid track and field followers, would have expected his rise to culminate in him breaking the world record so quickly. <a href="account.php">Learn more...</a></p>
                    </div>
                </div>
                <div class="item" style="background-image: url( https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/primary/hgotdozfbffr1w9jbbj6);">
                    <div class="item-desc">
                        <h3>Shelly-Ann FRASER-PRYCE </h3>
                        <p> <a href="account.php">Learn more...</a></p>
                    </div>
                </div>
                <div class="item" style="background-image: url(https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/v1655913355/primary/szu1u2wdvntueanxls63);">
                    <div class="item-desc">
                        <h3>Yaroslava MAHUCHIKH </h3>
                        <p> <a href="account.php">Learn more...</a></p>
                    </div>
                </div>
                <div class="item" style="background-image: url( https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/v1655913582/primary/rcqujgkcakerssfiztts);">
                    <div class="item-desc">
                        <h3>Winfred Mutile YAVI</h3>
                        <p> <a href="account.php">Learn more...</a></p>
                    </div>
                </div>
                <div class="item" style="background-image: url(https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/primary/q8t8ckpnchmgk4mczt3j);">
                    <div class="item-desc">
                        <h3>Yulimar ROJAS </h3>
                        <p> <a href="account.php">Learn more...</a></p>
                    </div>
                </div>
                <div class="item" style="background-image: url(https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/v1655913750/primary/y9zqhstrzijpteorefyi );">
                    <div class="item-desc">
                        <h3>Carlos Edriel YULO</h3>
                        <p> <a href="account.php">Learn more...</a></p>
                    </div>
                </div>
                <div class="item" style="background-image: url(https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/primary/gsfzbbjmgyi8atet8iot);">
                    <div class="item-desc">
                        <h3>P. V. Sindhu </h3>
                        <p> Pusarla Venkata Sindhu is a sporting icon of the 21st century and a shining beacon for sportswomen in India. The shuttler has risen to the top of the world in the last decade, winning dozens of titles across the globe. <a href="account.php">Learn more...</a></p>
                    </div>
                </div>
                <div class="item" style="background-image: url(https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/primary/okl0qlkxygyr0hsdsywl);">
                    <div class="item-desc">
                        <h3>Alaa MASO</h3>
                        <p> Alaa used to live in Aleppo with his family, and began swimming at an early age thanks to his father, who became a swimming coach following his retirement from the army. He trained as a swimmer and a triathlete and knew fellow refugee swimmer Yusra Mardini when they were both young.<a href="account.php">Learn more...</a></p>
                    </div>
                </div>
                <div class="item" style="background-image: url( https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/primary/vhfr6hduzmldcu4dhgre);">
                    <div class="item-desc">
                        <h3>Serena WILLIAMS </h3>
                        <p> <a href="account.php">Learn more...</a></p>
                    </div>
                </div>
                <div class="item" style="background-image: url(https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/primary/bxcutsu799ls7t2mcdwl);">
                    <div class="item-desc">
                        <h3>Elin RUBENSSON</h3>
                        <p> <a href="account.php">Learn more...</a></p>
                    </div>
                </div>
                <div class="item" style="background-image: url(https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/primary/ync1ytpmcucn4z4zkja1 );">
                    <div class="item-desc">
                        <h3>Carissa Moore </h3>
                        <p>For six months of the year, she enjoys the quiet life she has in Honolulu with her husband, Luke, and two dogs, Maya and Tuffy.But for the other six months, Moore travels the world ‘chasing waves’ and following her dreams as a professional <a href="account.php">Learn more...</a></p>
                    </div>
                </div>
                <div class="item" style="background-image: url(https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/primary/thytepfrg9bawz4w8pmr);">
                    <div class="item-desc">
                        <h3>Filipe TOLEDO </h3>
                        <p> <a href="account.php">Learn more...</a></p>
                    </div>
                </div>
                <div class="item" style="background-image: url( https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/primary/j4s39rxurpzn4iejgx6r);">
                    <div class="item-desc">
                        <h3>Tomoa NARASAKI </h3>
                        <p> <a href="account.php">Learn more...</a></p>
                    </div>
                </div>
                <div class="item" style="background-image: url(https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/v1655915918/primary/dykj4h8q58vrbnnlgl4h);">
                    <div class="item-desc">
                        <h3>Natalia GROSSMAN </h3>
                        <p> <a href="account.php">Learn more...</a></p>
                    </div>
                </div>
                <div class="item" style="background-image: url(https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/primary/wz7lh2qegawi5fjpkh80);">
                    <div class="item-desc">
                        <h3>Tadej POGACAR</h3>
                        <p> <a href="account.php">Learn more...</a></p>
                    </div>
                </div>
                <div class="item" style="background-image: url(https://img.olympicchannel.com/images/image/private/f_auto/t_1-1_300/primary/sofaf1eebviulpdlbw9y);">
                    <div class="item-desc">
                        <h3>Eliud KIPCHOGE</h3>
                        <p> It’s hard to put Eliud Kipchoge’s astonishing sub two-hour marathon from October 2019 into context. Like Roger Bannister breaking the four minute mile in 1954, the Kenyan achieved something that many people believed physically couldn’t be done.<a href="account.php">Learn more...</a></p>
                    </div>
                </div>
            </div>
        </section>








        <br>
        <footer class="footer-section">
            <div class="container">
                <div class="footer-cta pt-5 pb-5">
                    <div class="row">
                        <div class="col-xl-4 col-md-4 mb-30">
                            <div class="single-cta">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="cta-text">
                                    <h4>Find us</h4>
                                    <span>City of Beijing, Northern China</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 mb-30">
                            <div class="single-cta">
                                <i class="fas fa-phone"></i>
                                <div class="cta-text">
                                    <h4>Call us</h4>
                                    <span>+977-9809493195</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 mb-30">
                            <div class="single-cta">
                                <i class="far fa-envelope-open"></i>
                                <div class="cta-text">
                                    <h4>Mail us</h4>
                                    <span>atish@ismt.edu.np</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-content pt-5 pb-5">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 mb-50">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Olympic_rings_without_rims.svg/800px-Olympic_rings_without_rims.svg.png" class="img-fluid" alt="logo"></a>
                                </div>
                                <div class="footer-text">
                                    <p>The International Olympic Committee is the guardian of the Olympic Games and the leader of the Olympic Movement.</p>
                                </div>
                                <div class="footer-social-icon">
                                    <span>Follow us</span>
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter twitter-bg"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3>Useful Links</h3>
                                </div>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="account.php">Athletes</a></li>
                                    <li><a href="account.php">Sports</a></li>
                                    <li><a href="account.php">Profile</a></li>
                                    <li><a href="account.php">Feedback</a></li>
                                    <li><a href="account.php">Notification</a></li>
                                    <li><a href="account.php">Contact us</a></li>
                                    <li><a href="account.php">Latest News</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3>Subscribe</h3>
                                </div>
                                <div class="footer-text mb-25">
                                    <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                                </div>
                                <div class="subscribe-form">
                                    <form action="#">
                                        <input type="text" placeholder="Email Address">
                                        <button><i class="fab fa-telegram-plane"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                            <div class="copyright-text">
                                <p>Copyright &copy; 2022, All Right Reserved</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="account.php">Terms</a></li>
                                    <li><a href="account.php">Privacy</a></li>
                                    <li><a href="account.php">Policy</a></li>
                                    <li><a href="account.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>


        <!-- slide athelets list s -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">



        <script>
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