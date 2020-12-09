<?php

class List_Model extends Product_Model
{

    /**
     * @return  mixed is list of products
     */
    public function productList()
    {
        $sth = $this->db->prepare('select id, name, price, size, weight, height, width, length, type_product, sku from products order by id');
        $sth->execute();
        return $sth->fetchAll();
    }

    /**
     * this function delete necessary products
     * @param $idArray array is "array of products id" which  we want to delete
     * @return void
     */
    public function delete($idArray)
    {
        foreach ($idArray as $key => $value) {
            $sth = $this->db->prepare('delete from products where id = :id');
            $sth->execute(array(
                ':id' => $value
            ));
        }
    }

}