  <?php
  
  //namespace App\Model;

  class Connection
  {
    private static $instance;

    public static function getConn()
    {
      if (!isset(self::$instance)) 
      {
        self::$instance = new \PDO('mysql:host=localhost;dbname=CRUD_PHP_PDO;charset=utf', 'user=root;password=');
      } 
      else 
      {
        return self::$instance;
      }
    }
  }
