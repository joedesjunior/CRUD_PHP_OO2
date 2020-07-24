<?php

namespace App;

use App\Model\ProductModel;

require_once 'vendor/autoload.php';

$productClass = new \App\Model\ProductClass();
$productClass->setName_product("Furadeira de Impacto Profissional EOS MaxPro 1/2 polegada 750W 110v - 127V");
$productClass->setDescription_product("A Furadeira de Impacto 1/2pol EOS MaxPro é a melhor aliada para obras profissionais ou domésticas");
$productClass->setDate_Insert_product("2020-07-24 03:04:03");

$productClass2 = new \App\Model\ProductClass();
$productClass2->setId_Product(1);
$productClass2->setName_product("Furadeira de Impacto Profissional EOS MaxPro 1/2 polegada 750W 110v - 127V");
$productClass2->setDescription_product("Teste");
$productClass2->setDate_Insert_product("2020-07-24 03:04:03");

/*
*
* Insert Products in Database.
*
*/

// $productModel_insert = new \App\Model\ProductModel(); 
// $productModel_insert->createProductDatabase($productClass);
// echo 'Produto Adicionado com Sucesso!<hr>';

/*
*
* Select All Products in Database.
*
*/

// $productModel_select = new \App\Model\ProductModel(); 
// $productModel_select = $productModel_select->readProductDatabase();

// foreach ($productModel_select as $product)
// {
//   echo "<strong>Name: </strong>" . $product['name_product'] . "</br>";
//   echo "<strong>Description: </strong>" . $product['description_product'] . "</br>";
//   echo "<strong>Date: </strong>" . $product['date_insert_product'] . "</br><hr>";
// }

/*
*
* Update Products in Database.
*
*/

// $productModel_update = new \App\Model\ProductModel(); 
// $productModel_update->updateProductDatabase($productClass2);

/*
*
* Delete Products in Database.
*
*/

// $productModel_delete = new \App\Model\ProductModel();
// $productModel_delete->deleteProductDatabase($productClass2);

$productController = new \App\Controller\ProductController();
$productController = $productController->writeXML();

