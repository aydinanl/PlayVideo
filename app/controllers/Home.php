<?php

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
        $system = $this->model('System');
        $latestVideos   = $system->getLastestVideos();
        $categories     = $system->getCategories();

        //Load views
        require VIEW_PATH . "templates/header.php";
        require VIEW_PATH . "home/index.php";
        require VIEW_PATH . "templates/footer.php";
    }
}