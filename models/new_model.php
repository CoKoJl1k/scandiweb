<?php
class New_Model extends Product_Model
{
    /**
     * this function create new product
     * @param $data array is array of data our form
     * @param $sku string necessary for creating unique value product. For example ( GGWP36 = GGWP + 36) where $sku = GGWP and $id =36
     */
    public function create($data, $sku)
    {
        $sth = $this->db->prepare('insert into products (`name`, `price`,`size`,`weight`,`height`,`width`, `length`, `type_product`, `sku` ) values (:name,:price,:size,:weight,:height,:width,:length, :type_product, :sku)');
        $sth->execute(array(
            ':name' => htmlspecialchars($data['name']),
            ':price' => htmlspecialchars($data['price']),
            ':size' => htmlspecialchars($data['size']),
            ':weight' => htmlspecialchars($data['weight']),
            ':height' => htmlspecialchars($data['height']),
            ':width' => htmlspecialchars($data['width']),
            ':length' => htmlspecialchars($data['length']),
            ':type_product' => htmlspecialchars($data['type_product']),
            ':sku' => $sku
        ));
    }
}