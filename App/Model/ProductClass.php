<?php 

/*
*   Author: Joedes Souza de Freitas Junior - GX2
*   Description: Projeto AGYX - Código responsável por receber 
*   dados do AX, e cadastrar no banco para imprimir no blog.frigelar
*
*/

namespace App\Model;

class ProductClass
{

  private $id_product, $name_product, $description_product, $date_insert_product; 

  public function getId_Product()
  {
    return $this->id_product;
  }

  public function setId_Product($id_product)
  {
    $this->id_product = $id_product;
  }
  
  public function getName_product()
  {
    return $this->name_product;
  }

  public function setName_product($name_product)
  {
    $this->name_product = $name_product;
  }

  public function getDescription_product()
  {
    return $this->description_product; 
  }

  public function setDescription_product($description_product)
  {
    $this->description_product = $description_product;
  }

  public function getDate_insert_product()
  {
    return $this->date_insert_product; 
  }

  public function setDate_Insert_product($date_insert_product)
  {
    $this->date_insert_product = $date_insert_product; 
  }


}