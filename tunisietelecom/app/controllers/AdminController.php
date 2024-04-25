<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/app/models/AdminModel.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/app/models/UserModel.php";

class Authentication{
    private $adminModel;

    public function __construct(AdminModel $adminModel)
    {
        $this->adminModel = $adminModel;
    }
    public function login(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){

            $email = $_POST['adminemail'];
            $password = $_POST['adminpassword'];
            $isLoggedIn = $this->adminModel->checkLogin($email, $password);
            if ($isLoggedIn) {
                session_start();
                $_SESSION['admin'] = $isLoggedIn;
                header("Location:/tunisietelecom/admin/dashboard");
                exit();
            } else {
                echo '<script>alert("Invalid email or password")</script>';
            }
        }

    }
    public function logout(){
        if (isset($_SESSION['admin'])) {
            $_SESSION = array();
            session_destroy();
        }
        $this->redirectTologin();
    }
    private function redirectTologin(){
        echo '<script>
            window.location.href = "/tunisietelecom/admin/login";
        </script>';
    }
    
}
class Dashboard{
    private $adminModel;
    public function __construct(AdminModel $adminModel)
    {
        $this->adminModel = $adminModel;
    }


}