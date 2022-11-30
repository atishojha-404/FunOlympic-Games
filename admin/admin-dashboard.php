<?php

require_once 'assets/php/admin-header.php';
require_once 'assets/php/admin-db.php';

$count = new Admin();

?>

<style>
    /* back to top */
    .back-to-top {
        position: fixed;
        bottom: 25px;
        right: 25px;
        display: none;
    }
</style>


<div class="row">
    <div class="col-lg-12">
        <div class="card-deck mt-3 text-light text-center font-weight-bold">

            <div class="card bg-primary">
                <div class="card-header">Totle Users</div>
                <div class="card-body">
                    <h1 class="display-4">
                        <?= $count->totalCount('users'); ?>
                    </h1>
                </div>
            </div>

            <div class="card bg-warning">
                <div class="card-header">Verified Users</div>
                <div class="card-body">
                    <h1 class="display-4">
                        <?= $count->verified_users(1); ?>
                    </h1>
                </div>
            </div>

            <div class="card bg-success">
                <div class="card-header">Unverified Users</div>
                <div class="card-body">
                    <h1 class="display-4">
                        <?= $count->verified_users(0); ?>
                    </h1>
                </div>
            </div>

            <div class="card bg-danger">
                <div class="card-header">Website Hits</div>
                <div class="card-body">
                    <h1 class="display-4">
                        <?php $data = $count->site_hits();
                        echo $data['hits']; ?>
                    </h1>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card-deck mt-3 text-light text-center font-weight-bold">

            <div class="card bg-danger">
                <div class="card-header">Total Feedbacks</div>
                <div class="card-body">
                    <h1 class="display-4">
                        <?= $count->totalCount('feedback'); ?>
                    </h1>
                </div>
            </div>

            <div class="card bg-success">
                <div class="card-header">Total Notification</div>
                <div class="card-body">
                    <h1 class="display-4">
                        <?= $count->totalCount('notification'); ?>
                    </h1>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card-deck mt-3 text-light text-center font-weight-bold">

            <div class="card bg-warning">
                <div class="card-header">Blocked Users</div>
                <div class="card-body">
                    <h1 class="display-4">
                        <?= $count->blocked_users(0); ?>
                    </h1>
                </div>
            </div>

            <div class="card bg-primary">
                <div class="card-header">Total Active Users</div>
                <div class="card-body">
                    <h1 class="display-4">
                        <?= $count->blocked_users(1); ?>
                    </h1>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card-deck my-3">

            <div class="card border-success">
                <div class="card-header bg-success text-center text-white lead">
                    Male/Female User's Percentage
                </div>
                <div id="chartOne" style="width:99%; height: 400px;"></div>
            </div>

            <div class="card border-info">
                <div class="card-header bg-info text-center text-white lead">
                    Verified/Unverified User's Percentage
                </div>
                <div id="chartTwo" style="width:99%; height: 400px;"></div>
            </div>

        </div>
    </div>
</div>

<a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>




<!-- Footer Area  -->
</div>
</div>
</div>

<!-- jQuery CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js" defer></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#open-nav").click(function() {
            $(".admin-nav").toggleClass('animate');
        });
    });

    // % of male and female
    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(pieChart);

    function pieChart() {
        var data = google.visualization.arrayToDataTable([
            ['Gender', 'Number'],
            <?php
            $gender = $count->genderPer();
            foreach ($gender as $row) {
                echo '["' . $row['gender'] . '",' . $row['number'] . '],';
            }
            ?>
        ]);
        var options = {
            is3D: false
        };
        var chart = new google.visualization.PieChart(document.getElementById('chartOne'));
        chart.draw(data, options);
    }


    // % of verified or unverified

    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(colChart);

    function colChart() {
        var data = google.visualization.arrayToDataTable([
            ['Verified', 'Number'],
            <?php
            $verified = $count->verifiedPer();
            foreach ($verified as $row) {
                if ($row['verified'] == 0) {
                    $row['verified'] = "Unverified";
                } else {
                    $row['verified'] = "Verified";
                }
                echo '["' . $row['verified'] . '",' . $row['number'] . '],';
            }
            ?>
        ]);
        var options = {
            pieHole: 0.4,
        };
        var chart = new google.visualization.PieChart(document.getElementById('chartTwo'));
        chart.draw(data, options);
    }

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