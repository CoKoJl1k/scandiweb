<?php

class AppError extends Controller
{
    /**
     * this function redirects when an error occurs
     */
    function __construct()
    {
        parent::__construct();
        $this->view->render('error/index');
    }
}