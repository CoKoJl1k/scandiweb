<?php

abstract class Product_Model extends Model
{
    /**
     * creating a database object
     */
    function __construct()
    {
        parent::__construct();
    }

    /**
     * @return  mixed is list of products
     */
    protected function productList()
     {
     }

    /**
     * this function delete necessary products
     * @param $idArray array is "array of products id" which  we want to delete
     * @return void
     */
    protected function delete($idArray)
    {
    }

    /**
     * this function create new product
     * @param $data array is array of data our form
     * @param $sku string necessary for creating unique value product. For example ( GGWP36 = GGWP + 36) where $sku = GGWP and $id =36
     */
    protected function create($data, $sku)
    {
    }


}