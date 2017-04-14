<?php

/**
 * The default home controller, called when no controller/method has been passed
 * to the application.
 */
class Kategori extends Controller
{

    /**
     * The default controller method.
     *
     * @return void
     */
    public function index()
    {
        //$user = $this->model('user');
        //$user->name = $name;
        echo "Bos Sayfa";

    }
    public function K($kategoriAdi)
    {
        //$user = $this->model('user');
        //$user->name = $name;

        //Load views
        require VIEW_PATH . "templates/header.php";
        require VIEW_PATH . "kategori/index.php";
        require VIEW_PATH . "templates/footer.php";

    }
    public function Batu(){
        echo "batu";
    }
}