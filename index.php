<?php

require 'config/database.php';
require 'config/paths.php';

// connecting the necessary classes in the directory "libs"
spl_autoload_register(function ($class_name) {
    include 'libs/' . $class_name . '.php';
});

$app = new Bootstrap();