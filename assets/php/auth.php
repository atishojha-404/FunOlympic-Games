<?php

require_once 'config.php';

class Auth extends Database
{

    //Register new user
    public function register($name, $email, $password)
    {
        $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :pass)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['name' => $name, 'email' => $email, 'pass' => $password]);
        return true;
    }

    // Check if user already registered
    public function user_exist($email)
    {
        $sql = "SELECT email FROM users WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['email' => $email]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    // Login Existing User
    public function login($email)
    {
        $sql = "SELECT email, password FROM users WHERE email = :email AND blocked != 0";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['email' => $email]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }

    // Current User In Session
    public function currentUser($email)
    {
        $sql = "SELECT * FROM users WHERE email = :email AND blocked != 0";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['email' => $email]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }

    //Forgot Password
    public function forgot_password($token, $email)
    {
        $sql = "UPDATE users SET token =:token, token_expire = DATE_ADD(NOW(), INTERVAL 10 MINUTE) WHERE email = :email";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['token' => $token, 'email' => $email]);

        return true;
    }


    //Reset Password User Auth
    public function reset_pass_auth($email, $token)
    {
        $sql = "SELECT id FROM users WHERE email = :email AND token = :token AND token != '' AND token_expire > NOW() AND blocked != 0";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['email' => $email, 'token' => $token]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }

    //Update New Password
    public function update_new_pass($pass, $email)
    {
        $sql = "UPDATE users SET token = '', password = :pass WHERE email = :email AND blocked != 0";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['pass' => $pass, 'email' => $email]);

        return true;
    }

    //Update Profile of an User
    public function update_profile($name, $gender, $dob, $phone, $photo, $id)
    {
        $sql = "UPDATE users SET name = :name, gender = :gender, dob = :dob, phone = :phone, photo = :photo WHERE id = :id AND blocked != 0";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['name' => $name, 'gender' => $gender, 'dob' => $dob, 'phone' => $phone, 'photo' => $photo, 'id' => $id]);

        return true;
    }

    //change password of An User
    public function change_password($pass, $id)
    {
        $sql = "UPDATE users SET password = :pass WHERE id = :id AND blocked != 0";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['pass' => $pass, 'id' => $id]);

        return true;
    }


    // Verify E-Mail of An User
    public function verify_email($email)
    {
        $sql = "UPDATE users SET verified = 1 WHERE email = :email AND blocked != 0";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['email' => $email]);

        return true;
    }


    //Send Feedback to Admin
    public function send_feedback($sub, $feed, $uid)
    {
        $sql = "INSERT INTO feedback (uid, subject, feedback) VALUES (:uid, :sub, :feed)";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['uid' => $uid, 'sub' => $sub, 'feed' => $feed]);

        return true;
    }



    //Insert Notification
    public function notification($uid, $type, $message)
    {
        $sql = "INSERT INTO notification (uid, type, message) VALUES (:uid, :type, :message)";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['uid' => $uid, 'type' => $type, 'message' => $message]);

        return true;
    }

    //Fetch Notification
    public function fetchNotification($uid)
    {
        $sql = "SELECT * FROM notification WHERE uid = :uid AND type= 'user' ORDER BY id DESC";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['uid' => $uid]);

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    //Remove Notification
    public function removeNotification($id)
    {
        $sql = "DELETE FROM notification WHERE id = :id AND type = 'user'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);

        return true;
    }
}
