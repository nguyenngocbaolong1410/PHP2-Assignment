<?php

    class Catalog{
        public $id = null;
        public $name = null;
        public $text = null;
        public $img = null;
        public $parent = null;

        function __construct()
        {
            if(func_num_args()==4){
                $this->id = func_get_arg(0);
                $this->name = func_get_arg(1);
                $this->text = func_get_arg(2);
                $this->img = func_get_arg(3);
                $this->parent = func_get_arg(4);
            }
        }
        function getList()
        {
            $db = new connect();
            $select = "select * from catalog order by id ASC LIMIT 6 OFFSET 0";
            $result = $db->getList($select);
            return $result;
        }
        function getList2()
        {
            $db = new connect();
            $select = "select * from catalog order by id LIMIT 5 OFFSET 1";
            $result = $db->getList($select);
            return $result;
        }
        function getListParent($idcatalog)
        {
            $db = new connect();
            $select = "select * from catalog where parent=$idcatalog";
            $result = $db->getList($select);
            return $result;
        }
        function getCatalogById($id)
        {
            $db = new connect();
            $select = "select * from catalog where id=$id";
            $result = $db->getInstance($select);
            return $result;
        }
        function getCatalogByParent($id_parent)
        {
            $db = new connect();
            $select = "select * from catalog where parent=$id_parent";
            $result = $db->getInstance($select);
            return $result;
        }
        function addCatalog($name, $id_parent, $text, $img, $stt)
        {
            $db = new connect();
            $select = "insert into catalog(name,parent,text,img,stt) values ('$name','$id_parent','$text','$img','$stt')";
            $db->execute($select);
        }
        function deleteCatalog($id){
            $db = new connect();
            $select = "delete from catalog where id=$id";
            $db->execute($select);
        }

    }
?>