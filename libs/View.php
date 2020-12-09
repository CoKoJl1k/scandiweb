<?php
class View
{
    /**
     * this function connects the necessary files and displays the required pages with header and  footer
     * @param $name is the name necessary files which we want to connect
     */
    public function render($name)
    {
        require 'views/header.php';
        require 'views/product/' . $name . '.php';
        require 'views/footer.php';
    }
}