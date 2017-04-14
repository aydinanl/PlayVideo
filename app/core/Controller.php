<?php

class Controller
{
    /**
     * Render a view
     *
     * @param string $viewName The name of the view to include
     * @param array  $data Any data that needs to be available within the view
     *
     * @return void
     */

    public  function model($model){
        //echo $model;
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }
}