<?php
session_start();

class LoginSrv
{
    private Database $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getUser($uid, $pwd)
    {
        $sql_customer = "SELECT u.userId, p.username, p.password, u.email
            FROM `customer` AS u
            JOIN `appuser` AS p ON u.userId = p.userId
            WHERE p.username = :uid OR u.email = :uid";

        $this->db->query($sql_customer);
        $this->db->bind(':uid', $uid);

        try {
            $row = $this->db->fetchOneRow();
        } catch (PDOException $e) {
            logError($e->getMessage());
            exit();
        }
        if ($row && password_verify($pwd, $row->password)) {
            $_SESSION['userId'] = $row->userId;
            $_SESSION['username'] = $row->username;

            $_SESSION['role'] = 'customer';
            // header("Location: customer_dashboard.php");
            $userId = $_SESSION['userId'];
            $username = $_SESSION['username'];
            $response = array('success' => true, 'name' => $username, 'id' => $userId, 'message' => 'Login successful');
            return $response;
        }

        $sql_admin = "SELECT u.userId, p.username, p.password
            FROM `admin` AS u
            JOIN `appuser` AS p ON u.userId = p.userId
            WHERE p.username =  :uid ;";

        $this->db->query($sql_admin);
        $this->db->bind(':uid', $uid);

        try {
            $row = $this->db->fetchOneRow();
        } catch (PDOException $e) {
            logError($e->getMessage());
            exit();
        }

        if ($row && password_verify($pwd, $row->password)) {
            $_SESSION['userId'] = $row->userId;
            $_SESSION['username'] = $row->username;

            if ($row->client) {
                $_SESSION['role'] = 'admin';
                header("Location: customer_dashboard.php");
                $_SESSION['role'] = 'admin';
            }

            session_regenerate_id(true);

            $userId = $_SESSION['userId'];
            $username = $_SESSION['username'];
            $response = array('success' => true, 'name' => $username, 'id' => $userId, 'message' => 'Login successful');
            return $response;
        }

        echo "Invalid credentials";
        $_SESSION['Error'] = "Invalid credentials";
        exit();
    }
}

function logError($message)
{
    error_log("Error: " . $message);
}
