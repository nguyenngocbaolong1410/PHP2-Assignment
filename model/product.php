<?php

    class Product{
        public $id = null;
        public $id_catalog = null;
        public $name = null;
        public $price = null;
        public $img = null;
        public $mota = null;
        public $date = null;
        public $id_parent = null;

        function __construct()
        {
            if(func_num_args()==6){
                $this->id = func_get_arg(0);
                $this->id_catalog = func_get_arg(1);
                $this->name = func_get_arg(2);
                $this->price = func_get_arg(3);
                $this->img = func_get_arg(4);
                $this->mota = func_get_arg(5);
                $this->date = func_get_arg("Y-m-d");
            }
        }
        function getListPage()
        {
            $db = new connect();
            $select = "select * from product order by id desc";
            $result = $db->getList($select);
            return $result;
        }
        function getProductId($id)
        {
            $db = new connect();
            $select = "select * from product where id=$id";
            $result = $db->getInstance($select);
            return $result;
        }
        function getProductCatalog($id)
        {
            $db = new connect();
            $select = "select * from product where id_catalog=$id ORDER BY id_catalog DESC";
            $result = $db->getList($select);
            return $result;
        }
        function getProductParent($id)
        {
            $db = new connect();
            $select = "select * from product where id_parent=$id ORDER BY id_parent DESC";
            $result = $db->getList($select);
            return $result;
        }
    }
?>