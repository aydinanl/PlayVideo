<?php


class Video extends Controller
{

    public function index($videoID="",$videoAdi="")
    {
        //$user = $this->model('user');
        //$user->name = $name;
        if(empty($videoID)){
            //Video ID yoksa Ana sayfaya yönlendirmektedir.
            header('location: '.URL);
        }
        //Load views
        require VIEW_PATH . "templates/header.php";
        require VIEW_PATH . "video/index.php";
        require VIEW_PATH . "templates/footer.php";
    }

}