<?php

use LDAP\Result;

require_once 'config.php';


class Admin extends Database
{
    //Admin Login
    public function admin_login($username, $password)
    {
        $sql = "SELECT username, password FROM admin WHERE username = :username AND password = :password";
        $stmt = $this->conn->prepare($sql);

        $stmt->execute(['username' => $username, 'password' => $password]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }

    //COunt Total number of rows
    public function totalCount($tablename)
    {
        $sql = "SELECT * FROM $tablename";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $count = $stmt->rowCount();

        return $count;
    }

    //COunt Total verified/unverified users
    public function verified_users($status)
    {
        $sql = "SELECT * FROM users WHERE verified = :status";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['status' => $status]);
        $count = $stmt->rowCount();

        return $count;
    }

    //COunt Total blocked/active users
    public function blocked_users($status)
    {
        $sql = "SELECT * FROM users WHERE blocked = :status";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['status' => $status]);
        $count = $stmt->rowCount();

        return $count;
    }

    //Gender Percentage
    public function genderPer()
    {
        $sql = "SELECT gender, COUNT(*) AS number FROM users WHERE gender !='' GROUP BY gender";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    //Users Verified/Unverified Percentage
    public function verifiedPer()
    {
        $sql = "SELECT verified, COUNT(*) AS number FROM users GROUP BY verified";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }


    //Count Website Hits
    public function site_hits()
    {
        $sql = "SELECT hits FROM visitors";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $count = $stmt->fetch(PDO::FETCH_ASSOC);

        return $count;
    }


    //fetch all registered users
    public function fetchAllUsers($val)
    {
        $sql = "SELECT * FROM users WHERE blocked != $val";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }


    //Fetch User's Details by ID
    public function fetchUserDetailsByID($id)
    {
        $sql = "SELECT * FROM users WHERE id = :id AND blocked != 0";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }


    //Block an user
    public function userAction($id, $val)
    {
        $sql = " UPDATE users SET blocked = $val WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);

        return true;
    }


    //fetch all feedback from users
    public function fetchFeedback()
    {
        $sql = "SELECT feedback.id, feedback.subject, feedback.feedback, feedback.created_at, feedback.uid, users.name, users.email FROM feedback INNER JOIN users ON feedback.uid = users.id WHERE replied != 1 ORDER BY feedback.id DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }


    //Reply to User
    public function replyFeedback($uid, $message)
    {
        $sql = "INSERT INTO notification (uid, type, message) VALUES (:uid, 'user', :message)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['uid' => $uid, 'message' => $message]);

        return true;
    }

    //Set Feedback Replied
    public function feedbackReplied($fid)
    {
        $sql = "UPDATE feedback SET replied = 1 WHERE id = :fid";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['fid' => $fid]);

        return true;
    }


    //fetch notification
    public function fetchNotification()
    {
        $sql = "SELECT notification.id, notification.message, notification.created_at, users.name, users.email FROM notification INNER JOIN users ON notification.uid = users.id WHERE type = 'admin' ORDER BY notification.id DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }


    //Remove notification
    public function removeNotification($id)
    {
        $sql = "DELETE FROM notification WHERE id = :id AND type = 'admin'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);

        return true;
    }

    //Fetch all User from DB
    public function exportAllUsers()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
