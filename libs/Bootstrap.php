<?php

class Bootstrap
{
    /**
     * this function navigates through the application
     * when passing parameters in the url string using the get or post methods
     */
    function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        if (empty($url[0])) {
            $url[0] = 'product';
            $url[1] = 'list';
        }

        $file_main_control = 'controllers/' . $url[0] .'.php';
        $file_other_control = 'controllers/' .$url[1]. 'product.php';

        if (file_exists($file_main_control) && file_exists($file_other_control) ) {
            require $file_main_control;
            require $file_other_control;
            require 'models/'.$url[0].'_model.php';

        } else {
            require 'controllers/apperror.php';
            $controller = new AppError();
            return false;
        }

        // creating object name
        $model_name = $url[1].'product';
        $controller = new $model_name;
        $controller->loadModel($url[1]);

        if (isset($url[2])) {
            if (method_exists($controller, $url[2])) {
                $controller->{$url[2]}($url[3]);
            } else {
                echo 'method dosnt exists';
            }
        } else {
            $controller->index($url[1]);
        }

    }

}