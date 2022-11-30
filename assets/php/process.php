<?php

require_once 'session.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


$mail = new PHPMailer(true);

// Handle Profile Update ajax Request
if (isset($_FILES['image'])) {
    $name = $cuser->test_input($_POST['name']);
    $gender = $cuser->test_input($_POST['gender']);
    $dob = $cuser->test_input($_POST['dob']);
    $phone = $cuser->test_input($_POST['phone']);
    $oldimage = $_POST['oldimage'];
    $folder = 'uploads/';

    if (isset($_FILES['image']['name']) && ($_FILES['image']['name'] != "")) {
        $newImage = $folder . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], $newImage);
        if ($oldimage != null) {
            unlink($oldimage);
        }
    } else {
        $newImage = $oldimage;
    }
    $cuser->update_profile($name, $gender, $dob, $phone, $newImage, $cid);
    $cuser->notification($cid, 'admin', 'Profile updated');
}


//Handle Change Password Ajax Request
if (isset($_POST['action']) && $_POST['action'] == 'change_pass') {
    $currentPass = $_POST['curpass'];
    $newPass = $_POST['newpass'];
    $cnewPass = $_POST['cnewpass'];

    $hnewPass = password_hash($newPass, PASSWORD_DEFAULT);

    if ($newPass != $cnewPass) {
        echo $cuser->showMessage('danger', 'Password did not matched!');
    } else {
        if (password_verify($currentPass, $cpass)) {
            $cuser->change_password($hnewPass, $cid);
            echo $cuser->showMessage('success', 'Password Changed Successfully!');
            $cuser->notification($cid, 'admin', 'Password changed');
        } else {
            echo $cuser->showMessage('danger', 'Current Password is Wrong!');
        }
    }
}



//Handle Verify E-mail Ajax Request
if (isset($_POST['action']) && $_POST['action'] == 'verify_email') {
    try {
        // $mail->SMTPDebug = 1;  
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = Database::USERNAME;
        $mail->Password = Database::PASSWORD;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;


        $mail->setFrom(Database::USERNAME, 'FunOlympic Games');
        $mail->addAddress($cemail);

        $mail->isHTML(true);
        $mail->Subject = 'E-Mail Verification';
        $mail->Body    = '<h3>Click the below link to verify your E-Mail.<br>
                        <a href="http://localhost/funolympic-games/verify-email.php?email=' . $cemail . '">
                        http://localhost/funolympic-games/verify-email.php?email=' . $cemail . '</a><br>Regards<br>FunOlympic Games!</h3>';
        $mail->send();
        echo $cuser->showMessage('success', 'Verification link sent to your E-Mail. Please check your mail!');
        $cuser->notification($cid, 'admin', 'Verification link sent');
    } catch (Exception $e) {
        echo $cuser->showMessage('danger', 'Something went wrong please try again later!');
    }
}


// Handle Send Feedback to Admin Ajax Request
if (isset($_POST['action']) && $_POST['action'] == 'feedback') {
    $subject = $cuser->test_input($_POST['subject']);
    $feedback = $cuser->test_input($_POST['feedback']);

    $cuser->send_feedback($subject, $feedback, $cid);
    $cuser->notification($cid, 'admin', 'Feedback written');
}


// Handle Fetch Notification Ajax Request
if (isset($_POST['action']) && $_POST['action'] == 'fetchNotification') {
    $notification = $cuser->fetchNotification($cid);
    $output = '';

    if ($notification) {
        foreach ($notification as $row) {
            $output .= '<div class="alert alert-danger" role="alert">
                            <button type="button" id="' . $row['id'] . '" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="alert-heading">New Notification</h4>
                            <p class="mb-0 lead">' . $row['message'] . '</p>
                            <hr class="my-2">
                            <p class="mb-0 float-left">Reply of feedback form Admin!</p>
                            <p class="mb-0 float-right">' . $cuser->timeInAgo($row['created_at']) . '</p>
                            <div class="clearfix"></div>
                        </div>';
        }
        echo $output;
    } else {
        echo '<h3 class="text-center text-secondary mt-5"> :( No any new notification</h3>';
    }
}


// check notification
if (isset($_POST['action']) && $_POST['action'] == 'checkNotification') {
    if ($cuser->fetchNotification($cid)) {
        echo '<i class="fas fa-circle text-danger" style="font-size: 0.5em;"></i>';
    } else {
        echo '';
    }
}


//Remove Notifiction
if (isset($_POST['notification_id'])) {
    $id = $_POST['notification_id'];
    $cuser->removeNotification($id);
}
