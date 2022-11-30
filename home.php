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



<!-- verify message -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <?php if ($verified == 'Not Verified!') : ?>
                <div class="alert alert-danger alert-dismissible text-center mt-2 m-0">
                    <button class="close" type='button' data-dismiss="alert">&times;</button>
                    <strong>Your E-mail is not verified! We've sent you an E-mail verification link on your E-mail, check & verify now!</strong>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>





<!-- first text  -->
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <h1 style="color: #ffffff; font-size: 4rem; font-weight: 700;  line-height: 4rem; margin: 2.4rem 0px; text-transform: uppercase; width: auto;">
                FUNOLYMPIC<br> GAMES
            </h1>
        </div>
        <div class="col-lg-2"></div>
        <div class="col-lg-6">
            <h2 style="color: #ffffff; font-size: 1.3rem; line-height: 2.3rem; margin-top: 2.4rem;">
                The FunOlympic Games are the world's only truly global, multi-sport, celebratory athletics competition. With more than 200 countries participating in over 400 events across the Summer and Winter Games, the FunOlympics are where the world comes to compete, feel inspired, and be together.
            </h2>
        </div>
    </div>
</div>
<br>
<br>




<!-- IMAGE place  -->

<div class="content">
    <div class="welcomeText">
        <div class="welcome">
            <h1 class="greet">WELCOME</h1>
        </div>
        <div class="subText">
            <div class="subTexts">
                <p class="subscribe">FUNOLYMIPC GAMES</p>
                <p class="soon">TO</p>
            </div>
        </div>
    </div>

    <br>
    <br>

    <div class="social">
        <div class="follow">
            <p class="followUs" style="color: #ffffff!important;"> </p>
        </div>
    </div>
</div>







<!-- second text  -->
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h1 style="color: #ffffff; font-size: 4rem; font-weight: 700;  line-height: 4rem; margin: 2.4rem 0px; text-transform: uppercase; width: auto;">
                Around The <br>
                games
            </h1>
        </div>
    </div>
</div>
<!-- card for results and others ss -->

<main class="concord" id="concord-cards">

    <div class="card xl" style="width: 700px; max-width: 700px;">
        <section class="wrapper">
            <img style="background-image: url(https://149346090.v2.pressablecdn.com/wp-content/uploads/2022/02/GettyImages-1237516550-768x432.jpg)"></img>
            <footer class="card-footer">
                <h4>RESULTS</h4>
                <p><a href="results.php"><input type="button" class="concord" value="Discover"></input></a></p>
            </footer>
        </section>
    </div>
    <div class="card x">
        <section class="wrapper">
            <img style="background-image: url(https://eu3-prod-images.disco-api.com/2022/02/20/738d1301-f40d-389c-b5ee-e7b013dfa443.jpeg?bf=0&f=jpg&p=true&q=85&w=700)"></img>
            <footer class="card-footer">
                <h4>REPLAY</h4>
                <p><a href="results.php"><input type="button" class="concord" value="Discover"></input></a></p>
            </footer>
        </section>
    </div>
    <br>
    <div class="card x">
        <section class="wrapper">
            <img style="background-image: url(https://cdn.britannica.com/44/190944-131-7D082864/Silhouette-hand-sport-torch-flag-rings-Olympic-February-3-2015.jpg?q=60)"></img>
            <footer class="card-footer">
                <h4>TORCHES</h4>
                <p><a href="results.php"><input type="button" class="concord" value="Discover"></input></a></p>
            </footer>
        </section>
    </div>
    <div class="card x1" style="width: 700px; max-width: 700px;">
        <section class="wrapper">
            <img style="background-image: url(https://www.topendsports.com/events/summer/images/100m-1928-ladies-olympics.jpg)"></img>
            <footer class="card-footer">
                <h4>HISTORY GAMES</h4>
                <p><a href="results.php"><input type="button" class="concord" value="Discover"></input></a></p>
            </footer>
        </section>
    </div>

    <div class="card xl" style="width: 700px; max-width: 700px;">
        <section class="wrapper">
            <img style="background-image: url(https://akm-img-a-in.tosshub.com/indiatoday/images/story/202107/Olympic-Schedule-1.jpg?cKs11nxhUsoYw5dRAFAkADcH1FgQc2TH&size=770:433)"></img>
            <footer class="card-footer">
                <h4>MASCOTS</h4>
                <p><a href="results.php"><input type="button" class="concord" value="Discover"></input></a></p>
            </footer>
        </section>
    </div>


    <div class="card x">
        <section class="wrapper">
            <img style="background-image: url(https://www.worldatlas.com/r/w1200/upload/28/de/c3/shutterstock-1566889075.jpg)"></img>
            <footer class="card-footer">
                <h4>MEDIAL DESIGN</h4>
                <p><a href="results.php"><input type="button" class="concord" value="Discover"></input></a></p>
            </footer>
        </section>
    </div>
</main>



<main class="concord" id="concord-cards">

    <div class="card xl" style="background-color: #000000;">
        <section class="wrapper">
            <h1 style="color: #ffffff;">Youth FunOlympic <br> Games</h1><br>
            <h3 style="color: #ffffff;">The Youth FunOlympic Games are an international sports, cultural, and educational event for talented young athletes.</h3>

            <p><a href="Youth-FunOlympic.php"><input type="button" class="concord" style="right: 150px;" value="Learn more about Youth FunOlympics Games"></input></a></p>
        </section>
    </div>
    <div class="card x" style="width: 700px; max-width: 700px;">
        <section class="wrapper">
            <img style="background-image: url(https://cdn.dmcl.biz/media/image/120978/o/GettyImages-454016614.jpg)"></img>
        </section>
    </div>
    <br>
    <div class="card x" style="width: 700px; max-width: 700px;">
        <section class="wrapper">
            <img style="background-image: url(https://cdn.dmcl.biz/media/image/79070/o/Miho%20Nijo%20Rio%202016.jpg)"></img>
        </section>
    </div>
    <div class="card x1" style="background-color: #000000; width: 780px; max-width: 650px;">
        <section class="wrapper">
            <h1 style="color: #ffffff;">Paralympic Games</h1><br>
            <h3 style="color: #ffffff;">The Paralympic Games provide a platform for Para athletes with a diverse range of impairments to showcase their outstanding abilities to millions of spectators and billions of TV viewers.</h3>

            <p><a href="Youth-FunOlympic.php"><input type="button" class="concord" style="right: 150px;" value="Learn more about Paralympic FunOlympics Games"></input></a></p>
        </section>
    </div>
</main>










<!-- Top Athletes list  -->

<section class="game-section">
    <div class="row">
        <div class="col-sm-10">
            <h2 class="line-title">Top Athletes</h2>

        </div>
        <div class="col-sm-2">
            <div class="main-btn-holder">
                <a href="athletes.php" class="hbtn hbtn-default">View more</a>
            </div>
        </div>
    </div>

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
                    <a href="India-Vs-Norway.php"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/ghciazhg3kpcyvko15ez" alt=""></a>
                    <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                        <p class="text" style="color: #ffffff;">India vs Norway, Davis Cup World Group I live streaming: Focus on Ramkumar Ramanathan, Casper Ruud - full schedule</p>
                    </div>
                </div>
            </div>
            <!-- / end single news -->
            <!-- start single news -->
            <div class="col-12 col-md-4">
                <div class="single-news">
                    <a href="India-Vs-Norway.php"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/xbjf99ixaqbealg6xgb5" alt=""></a>
                    <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                        <p class="text" style="color: #ffffff;">World Wrestling Championships 2022: Full Indian results at a glance </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="single-news">
                    <a href="India-Vs-Norway.php"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/xom2vr8u5c3a9omdqvlz" alt=""></a>
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
                    <a href="India-Vs-Norway.php"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/fifgf1h1gwnfb0mjoq0k" alt=""></a>
                    <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                        <p class="text" style="color: #ffffff;">Roger Federer at Grand Slams - Swiss tennis maestro in numbers </p>
                    </div>
                </div>
            </div>
            <!-- / end single news -->
            <!-- start single news -->
            <div class="col-12 col-md-4">
                <div class="single-news">
                    <a href="India-Vs-Norway.php"><img src="https://tpc.googlesyndication.com/simgad/3482695119929836243?" alt=""></a>
                    <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                        <p class="text" style="color: #ffffff;"> Two-time Olympian Lissane De Witte, takes us on a trip to discover the stories behind the most epic moments from Tokyo 2020</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="single-news">
                    <a href="India-Vs-Norway.php"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/xah7mi1cepd1nkggfcky" alt=""></a>
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
                    <a href="India-Vs-Norway.php"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/hyvsp2wpvemuu2yqtsq0" alt=""></a>
                    <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                        <p class="text" style="color: #ffffff;">EuroBasket 2022: Semi-finals preview, schedule and how to watch NBA stars in action </p>
                    </div>
                </div>
            </div>
            <!-- / end single news -->
            <!-- start single news -->
            <div class="col-12 col-md-4">
                <div class="single-news">
                    <a href="India-Vs-Norway.php"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/lviervvasunmggxbtlj8" alt=""></a>
                    <div class="content" style="background-color: #000000!important; background:url(); padding:0px;">
                        <p class="text" style="color: #ffffff;">WNBA Finals 2022: Alyssa Thomas' historic Game 3 triple double helps Connecticut stave off elimination</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="single-news">
                    <a href="India-Vs-Norway.php"><img src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/cool4cyn7vrxw79uyvue" alt=""></a>
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