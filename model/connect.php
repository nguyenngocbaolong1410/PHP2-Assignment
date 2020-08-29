<?php

    class connect{
        var $db=null;
        public function __construct()
        {
            $dsn='mysql:host=localhost;dbname=longnnbv_noithat';
            $user='root';
            $pass='';
            $this->db=new PDO($dsn,$user,$pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        }
        // Lấy tất cả dữ liệu từ database
        public function getList($select)
        {
            $results = $this->db->query($select);
            return $results;
        }
        // Tạo phương thức lấy kết quả của bảng
        public function getInstance($select)
        {
            $results = $this->db->query($select);
            $result = $results->fetch();
            return $result;
        }
        // Tạo phương thức chạy các câu lệnh Insert, pdate, Delete
        public function execute($query)
        {
            $result = $this->db->exec($query);
            return $result;
        }
    }
?>