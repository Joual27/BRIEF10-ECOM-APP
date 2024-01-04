<?php
session_start();

class LoginSrv
{
    private Database $db ;

    public function __construct($db){
        $this->db = $db ;
    }
    

    protected function getUser($uid, $pwd)
    {
        $sql = "SELECT p.username, p.password, u.email
                FROM `customer` AS u
                JOIN `appuser` AS p ON u.userId = p.userId
                WHERE p.username = :uid OR u.email = :uid";

        $this->db->query($sql);
        $this->db->bind(':uid', $uid);

        try {
            $rows = $this->db->fetchMultipleRows();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            exit();
        }

        if ($rows) {
            foreach ($rows as $row) {
                if (password_verify($pwd, $row["password"])) {
                    $_SESSION['userId'] = $row['userId'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['role'] = $row['client'];

                    header("location: ../index.php");
                    exit();
                }
            }

            echo  "wrongpassword";
            exit();
        } else {
            $sql = "SELECT p.username, p.password
                    FROM `admin` AS u
                    JOIN `appuser` AS p ON u.userId = p.userId
                    WHERE p.username = :uid OR u.email = :uid";

            $this->db->query($sql);
            $this->db->bind(':uid', $uid);

            try {
                $rows = $this->db->fetchMultipleRows();
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
                header("location: ../login.php");

                exit();
            }

            if ($rows) {
                foreach ($rows as $row) {
                    if (password_verify($pwd, $row["password"])) {
                        $_SESSION['userId'] = $row['userId'];
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['role'] = $row['admin'];

                        header("location: ../index.php");
                        exit();
                    }
                }
            }

            $_SESSION['Error'] = "wrongpassword";
            header("location: ../login.php");
            exit();
        }
    }
}
?>