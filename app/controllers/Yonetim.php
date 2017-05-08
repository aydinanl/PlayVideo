<?php

class Yonetim extends Controller
{
    public function index()
    {
        if(!isset($_SESSION["oturum"])){
            header("location: " . URL . "login" );
        }

        //Load views
        require VIEW_PATH . "templates/header-yonetim.php";
        require VIEW_PATH . "yonetim/index.php";
        require VIEW_PATH . "templates/footer-yonetim.php";
    }

    /* Categories */
    public function Categories(){
        if(!isset($_SESSION["oturum"])){
            header("location: " . URL . "login" );
        }
        //Model Connections
        $categories = $this->model('Categories');

        //Load data from model to views.
        $getCategories = $categories->getAllCat();

        //Load views
        require VIEW_PATH . "templates/header-yonetim.php";
        require VIEW_PATH . "categories/index.php";
        require VIEW_PATH . "templates/footer-yonetim.php";
    }
    public function addCategory(){
        // if we have POST data to create a new comment entry
        if (isset($_POST["add_category"])) {
            $categories = $this->model('Categories');
            $system     = $this->model('System');
            $cat_name = $_POST["cat_name"];
            $cat_sef_url = $system->seflink($cat_name);

            $categories->addCat($cat_name,$cat_sef_url);
        }
        // where to go after comment has been added
        header('location: ' . URL . 'yonetim/categories');
    }
    public function deleteCategory($catID){
        $categories = $this->model('Categories');
        $categories->deleteCat($catID);

        header('location: ' . URL . 'yonetim/categories');
    }
    /* Categories END */

    /* Videos */
    public function Videos(){
        if(!isset($_SESSION["oturum"])){
            header("location: " . URL . "login" );
        }

        //Model Connections
        $movies = $this->model('Movie');
        $categories = $this->model('Categories');

        //Load data from model to views.
        $getVideos  = $movies->getAllVideos();
        $getCategories = $categories->getAllCat();

        //Load views
        require VIEW_PATH . "templates/header-yonetim.php";
        require VIEW_PATH . "videos/index.php";
        require VIEW_PATH . "templates/footer-yonetim.php";
    }
    public function addVideo(){
        // if we have POST data to create a new comment entry
        if (isset($_POST["add_video"])) {
            $movie  = $this->model('Movie');
            $system = $this->model('System');

            $video_name = $_POST["video_title"];
            $video_url  = $_POST["video_url"];
            $video_category  = $_POST["selected_category"];
            $video_description  = $_POST["video_description"];
            $video_sef_url = $system->seflink($video_name);

            $movie->addVideo($video_name,$video_url,$video_category,$video_description,$video_sef_url);
        }
        // where to go after comment has been added
        header('location: ' . URL . 'yonetim/videos');
    }
    public function deleteVideo($videoID){
        $movie  = $this->model('Movie');
        $movie->deleteVideo($videoID);

        header('location: ' . URL . 'yonetim/videos');
    }


    /* Videos END*/

    /* Comments */
    public function Comments(){
        if(!isset($_SESSION["oturum"])){
            header("location: " . URL . "login" );
        }
        //Model Connections
        $comments = $this->model('Comments');
        $categories = $this->model('Categories');

        //Load data from model to views.
        $getComments  = $comments->getLatestComments();

        //Load views
        require VIEW_PATH . "templates/header-yonetim.php";
        require VIEW_PATH . "comments/index.php";
        require VIEW_PATH . "templates/footer-yonetim.php";
    }
    public function deleteComment($commentID){
        $comments = $this->model('Comments');
        $comments->deleteComment($commentID);

        header('location: ' . URL . 'yonetim/comments');
    }
    /* Comments END*/

    public function logout(){
        session_destroy();
        header("location: " . URL . 'login');
    }
}