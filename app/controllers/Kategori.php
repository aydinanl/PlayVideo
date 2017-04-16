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
    public function index($kategoriID="",$kategoriAdi="")
    {
        $system = $this->model('System');
        $categories     = $system->getCategories();
        if(empty($kategoriID)){
            //Kategori ID yoksa Ana sayfaya yönlendir.
            header('location: '.URL);
        }
        //Load views
        require VIEW_PATH . "templates/header.php";
        require VIEW_PATH . "kategori/index.php";
        require VIEW_PATH . "templates/footer.php";


    }
}