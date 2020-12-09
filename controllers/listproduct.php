<?php

class ListProduct extends Product
{
    /**
     * this function displays the product page and product list
     */
    public function index()
    {
        $this -> view -> productList = $this -> model -> productList();
        $this -> view -> render('list/index');
    }

    /**
     * this function delete necessary products
     * @param $id string is "id or string of id" products we want to delete
     */
    public function delete($id)
    {
        $idArray = array( );
        $idArray = explode(',', $id);
        $this -> model -> delete($idArray);
        $this -> index();
    }

}