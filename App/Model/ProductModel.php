<?php

namespace App\Model;

use Connection;

class ProductModel

{
  public function createProductDatabase(ProductClass $product)
  {
    $sql = 'INSERT INTO product_crud_php_oo (name_product, description_product, date_insert_product)
            VALUES (?, ?, ?)';

    $stmt = \App\Model\Connection::getConn()->prepare($sql);
    $stmt->bindValue(1, $product->getName_product());
    $stmt->bindValue(2, $product->getDescription_product());
    $stmt->bindValue(3, $product->getDate_insert_product());
    $stmt->execute();
  }

  public function readProductDatabase()
  {
    $sql = 'SELECT * FROM product_crud_php_oo';

    $stmt = \App\Model\Connection::getConn()->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() > 0)
    {
      $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
      return $result;
    }
  }

  public function updateProductDatabase(ProductClass $product)
  {
    $sql = 'UPDATE product_crud_php_oo SET name_product = ?,  description_product = ?, date_insert_product = ? WHERE id_product = ?';

    $stmt = \App\Model\Connection::getConn()->prepare($sql);
    $stmt->bindValue(1, $product->getName_product());
    $stmt->bindValue(2, $product->getDescription_product());
    $stmt->bindValue(3, $product->getDate_insert_product());
    $stmt->bindValue(4, $product->getId_Product());
    $stmt->execute();

  }

  public function deleteProductDatabase(ProductClass $id_product)
  {
    $sql = 'DELETE FROM product_crud_php_oo WHERE id_product = 1'; 

    $stmt = \App\Model\Connection::getConn()->prepare($sql);
    $stmt->bindValue(1, $id_product->getId_Product());
    $stmt->execute();
  }
}
