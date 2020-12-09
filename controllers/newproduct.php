<?php

class NewProduct extends Product
{
    /**
     * this function displays the page where we add a new product
     */
    function index()
    {
        $this->view->render('new/index');
    }

    /**
     * this function creates new product
     */
    public function create()
    {
        $data = array();
        $data['name'] = $_POST['name'];
        $data['price'] = $_POST['price'];
        $data['size'] = $_POST['size'];
        $data['weight'] = $_POST['weight'];
        $data['height'] = $_POST['height'];
        $data['width'] = $_POST['width'];
        $data['length'] = $_POST['length'];
        $data['type_product'] = $_POST['type_product'];

        switch ($data['type_product']) {
            case 'DVD-disc' :
                $sku = 'JVC';
                break;
            case 'Book':
                $sku = 'GGWP';
                break;
            case 'Furniture':
                $sku = 'TR';
                break;
            default:
                $sku = '';
        }

        $this->model->create($data,$sku);
        header('location: ../list');
    }

}