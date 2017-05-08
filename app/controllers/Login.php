<?php
class Login extends Controller
{

    public function index($pageID="",$pageName="")
    {

        //Load views
        require VIEW_PATH . "templates/header-yonetim.php";
        require VIEW_PATH . "login/index.php";
    }

    public function MakeLogin(){
        // if we have POST data to create a new song entry
        if (isset($_POST["make_login"])) {
            $user    = $this->model('User');
            $mail = $_POST["mail"];
            $password = $_POST["password"];

            $user->makeLogin($mail,$password);
        }
        // where to go after login has been successful
        header('location: ' . URL . 'yonetim');
    }
}