<?php

require_once 'assets/php/admin-header.php';
?>


<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto);
    @import url(//fonts.googleapis.com/icon?family=Material+Icons);

    div.multi-step-form {
        justify-content: center;
        text-align: center;
        background-color: gainsboro;
    }



    div.progress-icon.active {
        transition: all .25s ease;
        /* animation: bounce 0.3s 1; */
        background-color: var(--primary) !important;
        color: white !important;
    }

    div.progress-icon:hover {
        transition: all .25s ease;
        /* // animation: bounce 0.3s 1; */
        background-color: var(--danger) !important;
        color: white !important;
    }

    .multi-step-form {
        border-radius: 15px;
        margin: auto;
        margin-top: 100px;
        max-width: 600px;
    }

    .form-container {
        border-radius: 15px;
        margin: auto;
        background-color: #fafafa;
        padding: 30px 50px;
    }

    .form-control {
        background-color: transparent;
        border: none;
        border-bottom: 2px solid #cdcdcd;
        border-radius: 0px;
    }

    .form-control:focus {
        background-color: transparent !important;
        box-shadow: none !important;
    }

    .floating-label-container {
        margin-top: 20px;
    }

    .floating-label {
        pointer-events: none;
        position: absolute;
        transform: translateX(-50%);
        margin-top: 8px;
        z-index: 1;
        color: gray;
        transition: all 0.15s ease-out;
    }

    .floating-label.active {
        margin-top: 0px;
        font-size: smaller;
        transform: translate(-50%, -60%);
    }

    input {
        text-align: center;
    }

    .multi-step-form .progress {
        overflow: visible;
    }

    .multi-step-form .progress.seen {
        transition: all 0ms ease 300ms;
        background-color: #8fb4dd;
    }

    .multi-step-form .progress .progress-bar {
        overflow: visible;
    }

    .multi-step-form .form-container {
        transform: scale(1);
    }
</style>

<div class="row">


    <div class="multi-step-form">
        <div class="progress-container row mb-5 d-none d-sm-flex px-5">
            <div class="progress col p-0" style="height: 5px;">
                <div class="progress-bar" data-index=1 role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    <div style="width: 50px; height: 50px; border-radius: 50%; background-color: white; color: black; padding-top: 13px; position: absolute;" data-index=1 class="progress-icon shadow-sm active">
                        <i class="fas fa-newspaper" style="font-size: 2em;"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-container shadow">
            <h4><b>Add News</b></h4>
            <div>
                <form class="needs-validation" novalidate>
                    <fieldset data-index=1 class="ms-step-1 active seen">
                        <div class="form-row">
                            <div class="form-group floating-label-container">
                                <label for="inputEmail1" class="floating-label">Image</label><br>
                                <input type="file" class="form-control" id="inputEmail1" required>
                            </div>
                        </div>
                        <div class="form-group floating-label-container">
                            <label for="firstname" class="floating-label">Title</label><br>
                            <input type="text" class="form-control" id="firstname" placeholder="Write here..." required>
                        </div>
                        <div class="form-group floating-label-container">
                            <label for="surname" class="floating-label">Sub-title</label><br>
                            <input type="text" class="form-control" id="surname" placeholder="Write here..." required>
                        </div>


                        <div class="form-group floating-label-container">
                            <label for="surname" class="floating-label">Content</label><br>
                            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Write here..." required></textarea>
                        </div>



                    </fieldset>



                    <fieldset data-index=4 class="ms-step-4">
                        <p>
                            Are all your changes correct? Please confirm that these changes are correct then proceed to submit the form.
                        </p>
                        <button type="submit" class="btn btn-outline-danger mt-2" style="border-radius: 25px;"> Confirm </button>
                    </fieldset>
                </form>
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