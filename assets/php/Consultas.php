<?php
require_once('conection.php');
class Consultas
{
    private $pdo;

    public function __construct()
    {
        $db = new DB();
        $this->pdo = $db->connect();
    }

    public function __destruct()
    {
        // close the database connection
        $this->pdo = null;
    }


    public function GetData(){
      $tabla = 'estacionamiento';
      $sql = "SELECT * FROM $tabla";
      $stmt = $this->pdo->prepare($sql);
      $stmt ->execute();

      return $stmt->fetchAll();
    }

    public function getDataAVG(){
      $sql = "SELECT AVG(TotalPagado) PROMEDIO FROM estacionamiento";
      $stmt = $this->pdo->prepare($sql);
      $stmt ->execute();

      return $stmt->fetchAll();
    }

    public function getDataMediana(){
      $sql = "SELECT AVG(mid_vals) AS 'MEDIANA' FROM ( SELECT tab1.TotalPagado AS 'mid_vals' FROM ( SELECT @row:=@row+1 AS 'row', a.TotalPagado FROM estacionamiento AS a, (SELECT @row:=0) AS r ORDER BY a.TotalPagado ) AS tab1, ( SELECT COUNT(*) as 'count' FROM estacionamiento x ) AS tab2 WHERE tab1.row >= tab2.count/2 and tab1.row <= ((tab2.count/2) +1)) AS tab3";
      $stmt = $this->pdo->prepare($sql);
      $stmt ->execute();

      return $stmt->fetchAll();
    }

    public function getDataTotal(){
      $sql = "SELECT SUM(TotalPagado) TOTAL FROM estacionamiento";
      $stmt = $this->pdo->prepare($sql);
      $stmt ->execute();

      return $stmt->fetchAll();
    }

    public function getDataCocheRep(){
      $sql = "SELECT Placas, TotalPagado FROM `estacionamiento` WHERE Placas = 'JJJ4657'";
      $stmt = $this->pdo->prepare($sql);
      $stmt ->execute();

      return $stmt->fetchAll();
    }
}
