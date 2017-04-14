<?php

/**
 * Created by PhpStorm.
 * User: aydin
 * Date: 3.12.2016
 * Time: 00:30
 */
class Blog
{
    public function __construct()
    {
        //echo " blog sınıfı çağrıldı.<br>";
    }
    public function index(){

        //makalaleleri buraya çekicez.
        echo " blog index methodu çalıştı.<br>";

        echo " makale 1<br>";
        echo " makale 2<br>";
    }
    public function Makale($makaleId='',$makaleAdi=''){
        echo $makaleId . "<br>";
        echo $makaleAdi . "<br>";
        //tekil makale buradan oluşacak
        echo " makale listele methodu çalıştı.<br>";
        echo " ------------------<br>";
        echo "makale başlık<br>";
        echo "makale içerik...<br>";
    }

}