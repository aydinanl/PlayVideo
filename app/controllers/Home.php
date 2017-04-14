<?php

/**
 * The default home controller, called when no controller/method has been passed
 * to the application.
 */
class Home extends Controller
{
    /**
     * The default controller method.
     *
     * @return void
     */
    public function index($name = 'aydin-batuhan')
    {
        /*
         * Methoda model kullanılması için gerekenler:
        $user = $this->model('user');
        $user->name = $name;
        echo $name;
        */

        //Load views
        require VIEW_PATH . "templates/header.php";
        require VIEW_PATH . "home/index.php";
        require VIEW_PATH . "templates/footer.php";
    }
}