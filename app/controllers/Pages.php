<?php



class Pages extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {

        $data = [
            'title' => 'You Welcomee to Our Website',

        ];

        $this->view('pages/index', $data);
    }

    public function login()
    {
        $this->view('pages/login');
    }


    public function loginUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['username']) && isset($_POST['password'])) {
                $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
                $pwd = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
            } else {
                echo json_encode(['success' => false, 'message' => 'Invalid request']);
                exit();
            }

            $db = Database::getInstance();
            $loginSrv = new LoginSrv($db);

            if ($this->emptyInput($username, $pwd)) {
                $response = $loginSrv->getUser($username, $pwd);

                if ($response) {
                    echo json_encode($response);
                } else {
                    echo json_encode(['success' => false, 'message' => 'Authentication failed']);
                }
            } else {
                echo json_encode(['success' => false, 'message' => 'Input is empty']);
            }
        }
    }



    private function emptyInput($usr, $pwd)
    {
        if (empty($usr) || empty($pwd)) {
            return false;
        } else {
            return true;
        }
    }
}
