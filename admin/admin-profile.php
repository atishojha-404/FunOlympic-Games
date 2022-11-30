<?php

require_once 'assets/php/admin-header.php';
?>


<div class="row">

    <br>
    <br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card rounded-0 mt-3 border-primary">
                    <div class="card-header border-primary">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a href="#profile" class="nav-link active font-weight-bol" data-toggle="tab">Profile</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <div class="tab-content">
                            <!-- profile tab content start -->
                            <div class="tab-pane container active" id="profile">
                                <div id="verifyEmailAlert"></div>
                                <div class="card-deck">
                                    <div class="card border-primary">
                                        <div class="card-header bg-primary text-light text-center lead">
                                            Unique Id : 001
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text p-2 m-1 rounded" style="border: 1px solid #0275d8;"><b>Username : </b>admin</p>

                                            <p class="card-text p-2 m-1 rounded" style="border: 1px solid #0275d8;"><b>Email : </b>admin.funolympicgames@gmail.com</p>

                                            <p class="card-text p-2 m-1 rounded" style="border: 1px solid #0275d8;"><b>Gender : </b>Male</p>

                                            <p class="card-text p-2 m-1 rounded" style="border: 1px solid #0275d8;"><b>Date of Birth : </b>1995/10/12</p>

                                            <p class="card-text p-2 m-1 rounded" style="border: 1px solid #0275d8;"><b>Phone : </b>9809493195</p>

                                            <p class="card-text p-2 m-1 rounded" style="border: 1px solid #0275d8;"><b>Registered On : </b>01 Aug 2022</p>

                                            <div class="clearfix"></div>

                                        </div>
                                    </div>
                                    <div class="card border-primary align-self-center">
                                        <img src="../assets/images/profile.jpg" class="img-thumbnail img-fluid" width="408px">
                                    </div>
                                </div>
                            </div>
                            <!-- profile tab content end -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



</div>



</div>
</div>
</div>

<!-- jQuery CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js" defer></script>


<script type="text/javascript">
    $(document).ready(function() {
        $("#open-nav").click(function() {
            $(".admin-nav").toggleClass('animate');
        });

        //check Notification
        checkNotification();

        function checkNotification() {
            $.ajax({
                url: 'assets/php/admin-action.php',
                method: 'post',
                data: {
                    action: 'checkNotification'
                },
                success: function(response) {
                    $("#checkNotification").html(response);
                }
            });
        }
    });
</script>
</body>

</html>