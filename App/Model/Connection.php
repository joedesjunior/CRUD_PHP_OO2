<?php

namespace App\Model;

class Connection
{
  private static $instance;

  public static function getConn()
  {
    $username = 'root';
    $password = '';

    if (!isset(self::$instance)) 
    {
      try 
      {
        self::$instance = new \PDO('mysql:host=localhost;dbname=teste', $username, $password);
        self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
      } 
      catch (\PDOException $e)
      {
        echo 'ERROR: ' . $e->getMessage();
      }
      
    }
    
    return self::$instance;
  
  }
}