<?php

namespace App\Controller;

class ProductController
{

  public function xml_generator()
  {

    $selectProductDatabase = new \App\Model\ProductModel();

    $selectProductDatabase = $selectProductDatabase->readProductDatabase();

    $dataXML = array();

    foreach ($selectProductDatabase as $product)
    {
      $dataXML[] = array (
        $id_product          = $product['id_product'],
        $name_product        = $product['name_product'],
        $description_product = $product['description_product'],
        $date_insert_product = $product['date_insert_product'],
      ); 
    }

    $result = json_encode($dataXML, JSON_PRETTY_PRINT);
    return $result;
  }

  public function writeXML()
  {
    $contentXML = new \App\Controller\ProductController();
    $contentXML = $contentXML->xml_generator();

    $date = date('d-m-y-h-i-s');

    $file = fopen('App/Files/JSONproduct-'.$date.'.json', 'w'); 
    fwrite($file, $contentXML);
    fclose($file);
  }
}
