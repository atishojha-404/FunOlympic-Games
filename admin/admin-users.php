<?php

require_once 'assets/php/admin-header.php';

require_once 'assets/php/admin-db.php';

$count = new Admin();
?>


<div class="row">
    <div class="col-lg-12">
        <div class="card my-2 border-success">
            <div class="card-header bg-success text-white text-center">
                <h4 class="m-0">Total Registered Users&nbsp; - &nbsp;<b><?= $count->totalCount('users'); ?> </b></h4>
            </div>
            <div class="card-body">
                <div class="table-responsive" id="showAllUsers">
                    <p class="text-center align-self-center lead">Please Wait...</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- display users in details modal  -->

<div class="modal fade" id="showUserDetailsModal">
    <div class="modal-dialog modal-dialog-centered mw-100 w-50">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="getName"></h4>
                <button class="close" type="button" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="card-deck">
                    <div class="card border-primary">
                        <div class="card-body">
                            <p id="getEmail"></p>
                            <p id="getPhone"></p>
                            <p id="getDob"></p>
                            <p id="getGender"></p>
                            <p id="getCreated"></p>
                            <p id="getVerified"></p>
                        </div>
                    </div>
                    <div class="card align-self-center" id="getImage"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Footer Area  -->
</div>
</div>
</div>

<!-- jQuery CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js" defer></script>
<script src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>



<script type="text/javascript">
    $(document).ready(function() {
        $("#open-nav").click(function() {
            $(".admin-nav").toggleClass('animate');
        });


        //fetch all users ajax request
        fetchAllUsers();

        function fetchAllUsers() {
            $.ajax({
                url: 'assets/php/admin-action.php',
                method: 'post',
                data: {
                    action: 'fetchAllUsers'
                },
                success: function(response) {
                    $("#showAllUsers").html(response);
                    $("table").DataTable({
                        order: [0, 'desc']
                    })
                }
            });
        }

        //Display user in details ajax request
        $("body").on("click", ".userDetailsIcon", function(e) {
            e.preventDefault();

            details_id = $(this).attr('id');
            $.ajax({
                url: 'assets/php/admin-action.php',
                type: 'post',
                data: {
                    details_id: details_id
                },
                success: function(response) {
                    data = JSON.parse(response);
                    $("#getName").text(data.name + ' ' + '(ID: ' + data.id + ')');
                    $("#getEmail").text('Email: ' + data.email);
                    $("#getPhone").text('Phone: ' + data.phone);
                    $("#getGender").text('Gender: ' + data.gender);
                    $("#getDob").text('DOB: ' + data.dob);
                    $("#getCreated").text('Joined On: ' + data.created_at);
                    $("#getVerified").text('Verified: ' + data.verified);

                    if (data.photo != '') {
                        $("#getImage").html('<img src="../assets/php/' + data.photo + '" class="img-thumbnail img-fluid align-self-center" width="280px">');

                    } else {
                        $("#getImage").html('<img src="../assets/images/profile.jsp" class="img-thumbnail img-fluid align-self-center" width="280px">');

                    }
                }
            });
        })

        // block an user ajex request 
        $("body").on("click", ".blockuserIcon", function(e) {
            e.preventDefault();
            blo_id = $(this).attr('id');

            Swal.fire({
                title: 'Are you sure?',
                text: "You can revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, block user!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: 'assets/php/admin-action.php',
                        method: 'post',
                        data: {
                            blo_id: blo_id
                        },
                        success: function(response) {
                            Swal.fire(
                                'Blocked!',
                                'User Blocked successfully!',
                                'success'
                            )
                            fetchAllUsers();
                        }
                    });
                }
            })
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