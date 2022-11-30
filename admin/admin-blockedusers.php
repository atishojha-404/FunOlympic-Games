<?php

require_once 'assets/php/admin-header.php';
require_once 'assets/php/admin-db.php';

$count = new Admin();
?>


<div class="row">
    <div class="col-lg-12">
        <div class="card my-2 border-danger">
            <div class="card-header bg-danger text-white text-center">
                <h4 class="m-0">Total Blocked Users&nbsp; - &nbsp;<b><?= $count->blocked_users(0); ?> </b></h4>
            </div>
            <div class="card-body">
                <div class="table-responsive" id="showAllBlockedUsers">
                    <p class="text-center align-self-center lead">Please Wait...</p>
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
<script src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>



<script type="text/javascript">
    $(document).ready(function() {
        $("#open-nav").click(function() {
            $(".admin-nav").toggleClass('animate');
        });


        //fetch all blocked users ajax request
        fetchAllBlockedUsers();

        function fetchAllBlockedUsers() {
            $.ajax({
                url: 'assets/php/admin-action.php',
                method: 'post',
                data: {
                    action: 'fetchAllBlockedUsers'
                },
                success: function(response) {
                    $("#showAllBlockedUsers").html(response);
                    $("table").DataTable({
                        order: [0, 'desc']
                    })
                }
            });
        }


        // unblock an user ajex request 
        $("body").on("click", ".restoreuserIcon", function(e) {
            e.preventDefault();
            res_id = $(this).attr('id');

            Swal.fire({
                title: 'Are you sure want to unblock this user?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, unblock user!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: 'assets/php/admin-action.php',
                        method: 'post',
                        data: {
                            res_id: res_id
                        },
                        success: function(response) {
                            Swal.fire(
                                'Unblocked!',
                                'User Unblocked successfully!',
                                'success'
                            )
                            fetchAllBlockedUsers();
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