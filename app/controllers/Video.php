<?php

/**
 * The default home controller, called when no controller/method has been passed
 * to the application.
 */
class Video extends Controller
{

    /**
     * The default controller method.
     *
     * @return void
     */
    public function index($videoID="",$videoAdi="")
    {
        //$user = $this->model('user');
        //$user->name = $name;
        if(empty($videoID)){
            //Video ID yoksa Ana sayfaya yönlendir.
            header('location: '.URL);
        }
        //Load views
        require VIEW_PATH . "templates/header.php";
        require VIEW_PATH . "video/index.php";
        require VIEW_PATH . "templates/footer.php";
    }

}