<?php

class Controller
{
    function __construct()
    {
        $this->view = new View();
    }

    /**
     * this function connects model files and creates a model object
     * @param $name is the name of the file where we get data from the database
     */
    function loadModel($name)
    {
        $path = 'models/' . $name . '_model.php';
        if (file_exists($path)) {
            require 'models/' . $name . '_model.php';
            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }
    }

}

?>