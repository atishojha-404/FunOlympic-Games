<?php
require_once 'assets/php/header.php';
?>


<div class="container">
    <div class="row justify-content-center my-2">
        <div class="col-lg-6 mt-4" id="showAllNotification">

        </div>
    </div>
</div>






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

        // Fetch notification of an user
        fetchNotification();

        function fetchNotification() {
            $.ajax({
                url: 'assets/php/process.php',
                method: 'post',
                data: {
                    action: 'fetchNotification'
                },
                success: function(response) {
                    $("#showAllNotification").html(response);
                }
            });
        }

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


        //Remove Notification
        $("body").on("click", ".close", function(e) {
            e.preventDefault();

            notification_id = $(this).attr('id');

            $.ajax({
                url: 'assets/php/process.php',
                method: 'post',
                data: {
                    notification_id: notification_id
                },
                success: function(response) {
                    checkNotification();
                    fetchNotification();
                }

            });
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
</script>

</body>

</html>