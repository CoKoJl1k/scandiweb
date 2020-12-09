<?php

class Model
{
    /**
     * creating a database object
     */
    function __construct()
    {
        $this->db = new Database();
    }
}