<?php


class Cart
{
    public $db =null;

    public function __construct(DBController $db)
    {
        if(!isset($db->con)) return null;
        $this->db=$db;
    }

    public function insertintoCart($params=null,$tables='cart'){
        if($this->db->con != null)
        {
            if($params!=null)
            {
                $column = implode(",",array_keys($params));

                $values = implode(",",array_values($params));

                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $tables, $column, $values);

                // execute query
                $result = $this->db->con->query($query_string);
                return $result;

            }
        }
    }

    public function addToCart($userid,$itemid)
    {
        if(isset($userid)&& isset($itemid))
        {
            $params=array(
                "user_id"=>$userid,
                "item_id"=>$itemid
            );
            $result=$this->insertintoCart($params);
            if($result)
            {
                header('location:'.$_SERVER['PHP_SELF']);
            }

        }
    }

    // calculate sub total
    public function getSum($arr){
        if(isset($arr)){
            $sum = 0;
            foreach ($arr as $item){
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f' , $sum);
        }
    }

    //Delete From Cart
    public function deleteFromCart($item_id,$table='cart'){
        $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
        if($result)
        {
            header('location:'.$_SERVER['PHP_SELF']);
        }
        return $result;
    }

    //Get cart ID
    public function getCartId($arr=null,$key='item_id'){
        if($arr!=null)
        {
            $data=array_map(function($arr)use($key){
                return $arr[$key];
            },$arr);
            return $data;
        }


    }

    public function saveForLater($item_id=null,$puttable='wishlist',$getTable='cart')
    {
        if($item_id!=null)
        {
            $query="INSERT INTO {$puttable} SELECT * FROM {$getTable} WHERE item_id={$item_id};";
            $query.= "DELETE FROM {$getTable} WHERE item_id={$item_id};";

            $result=$this->db->con->multi_query($query);

            if($result)
            {
                header('location:'.$_SERVER['PHP_SELF']);
            }
            return $result;

        }
    }
}