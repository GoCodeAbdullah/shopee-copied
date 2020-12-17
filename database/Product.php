<?php


class Product
{
   public $db = null;

    public function __construct(DBController $database)
    {
        if(!isset($database->con)) return null;
        $this->db= $database;
    }

    /// Fetch Data
    public function getData($table="product")
    {
        $result = $this->db->con->query("SELECT * FROM {$table}");
        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }

    public function getProduct($item,$table='product')
    {
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id={$item}");
        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }
}