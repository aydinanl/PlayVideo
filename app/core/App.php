<?php

class App{
    /**
     * App sınıfının constructor methodu.
     */
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = array();

    public function __construct()
    {
        //echo "MVC uygulaması başarı ile çalıştı";
        /**
         * URL'de ilki controller.
         * İkinci method.
         * Üçüncü ise parametredir.
         */
        $url = $this->parseURL();

        /*
         echo "<pre>";
         print_r($url);
         echo "<br>";
        */

        // url segment 1 : controller
        if(file_exists('../app/controllers/' . ucfirst($url[0]) . '.php')){
            //echo $url[0] .  " controller dosyası var.";
            $this->controller = $url[0];
            unset($url[0]);
        }//else olarak otomatik home'a gidiyor.
        require_once('../app/controllers/' . $this->controller . '.php');
        $this->controller = new $this->controller;

        //url segment 2 : method
        if(isset($url[1])){
            if(method_exists($this->controller,$url[1])){
                //echo $url[1] . " methodu bulundu.<br>";
                $this->method = $url[1];
                unset($url[1]);

            }
        }
        //url'de kalan parametreleri class'daki değişkene atıyoruz.
        $this->params = $url?array_values($url):[];
        call_user_func_array([$this->controller,$this->method],$this->params);
    }

    public function parseURL(){
        if(isset($_GET['url'])){
            //echo $_GET['url'];
            /**
             * Explode ile elde edilen url / e göre parçalanıyor diziye atılıyor.
             * rtrim url in sonundaki / ekini kesiyor.
             * filter_var değişkeni filtreden geçiriyor.
             */
            return explode("/",filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL));
        }
    }
}