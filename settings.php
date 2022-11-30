<?php
require_once 'assets/php/header.php';
?>
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



<style>
    body {
        background: #ecf0f1;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 16px;
    }

    .holder {
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 3px 0 rgba(0, 0, 0, .1);
        margin: 100px auto;
        padding: 30px 20px 20px;
        width: 400px;
    }

    td {
        border-bottom: 1px solid #f6f6f6;
        padding: 5px 10px;
    }

    td:nth-child(2) {
        text-align: right;
        width: 40px;
    }

    tr:last-child td {
        border: none;
        padding: 30px 10px 10px;
        text-align: center;
    }

    input[type=checkbox] {
        cursor: pointer;
        height: 30px;
        margin: 4px 0 0;
        position: absolute;
        opacity: 0;
        width: 30px;
        z-index: 2;
    }

    input[type=checkbox]+span {
        background: #e74c3c;
        border-radius: 50%;
        box-shadow: 0 2px 3px 0 rgba(0, 0, 0, .1);
        display: inline-block;
        height: 30px;
        margin: 4px 0 0;
        position: relative;
        width: 30px;
        transition: all .2s ease;
    }

    input[type=checkbox]+span::before,
    input[type=checkbox]+span::after {
        background: #fff;
        content: '';
        display: block;
        position: absolute;
        width: 4px;
        transition: all .2s ease;
    }

    input[type=checkbox]+span::before {
        height: 16px;
        left: 13px;
        top: 7px;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    input[type=checkbox]+span::after {
        height: 16px;
        right: 13px;
        top: 7px;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    input[type=checkbox]:checked+span {
        background: #2ecc71;
    }

    input[type=checkbox]:checked+span::before {
        height: 9px;
        left: 9px;
        top: 13px;
        -webkit-transform: rotate(-47deg);
        transform: rotate(-47deg);
    }

    input[type=checkbox]:checked+span::after {
        height: 15px;
        right: 11px;
        top: 8px;
    }

    input[type=submit] {
        background-color: #2ecc71;
        border: 0;
        border-radius: 4px;
        color: #FFF;
        cursor: pointer;
        display: inline-block;
        font-size: 16px;
        text-align: center;
        padding: 12px 20px 14px;
    }
</style>


<div class="row">


    <div class="holder">
        <table width="100%">
            <tr>
                <td>Login/Logout</td>
                <td>
                    <div>
                        <input type="checkbox" checked="" />
                        <span></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Write Feedback</td>
                <td>
                    <div>
                        <input type="checkbox" checked="" />
                        <span></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Remove Notifications</td>
                <td>
                    <div>
                        <input type="checkbox" checked="" />
                        <span></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Can like/dislike</td>
                <td>
                    <div>
                        <input type="checkbox" checked="" />
                        <span></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Post comments on Website</td>
                <td>
                    <div>
                        <input type="checkbox" checked="" />
                        <span></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Watch live games</td>
                <td>
                    <div>
                        <input type="checkbox" checked="" />
                        <span></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Share games</td>
                <td>
                    <div>
                        <input type="checkbox" checked="" />
                        <span></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Save Settings" onclick="admin-settings.php">
                </td>
            </tr>
        </table>
    </div>




</div>










<br>
<?php
require_once 'assets/php/footer.php';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

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
</script>

</body>

</html>