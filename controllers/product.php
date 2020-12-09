<?php

abstract class Product extends Controller
{
    /**
     * creating object View
     */
    function __construct()
    {
        parent::__construct();
    }

    /**
     * displaying the required pages
     */
    protected  function index()
    {
    }

    /**
     * this function delete necessary products
     * @param $id string is "id or string of products id" which we want to delete
     */
    protected  function delete($id)
    {
    }

    /**
     * this function creates new product
     */
    protected  function create()
    {
    }

}