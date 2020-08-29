<?php

    class User extends connect
    {
        private $name = null;
        private $email = null;
        private $pass = null;
        private $authority = null;

        function getListUser()
        {
            $sql = "select * from user order by id desc";
            $result = parent::getList($sql);
            return $result;
        }
        function checkUser($email, $pass)
        {
            $sql = "select * from user where email = '$email' and pass = '$pass'";
            $result = parent::getInstance($sql);
            return $result;
        }
        function getUserByNameAndEmail($email, $name)
        {
            $sql = "select * from user where email = '$email' and name = '$name'";
            $result = parent::getInstance($sql);
            return $result;
        }
        function updateUserByEmailAndPass($email, $pass)
        {
            $sql = "update user set pass='$pass' where email='$email'";
            $result = parent::execute($sql);
            return $result;
        }
        function addUser($email, $pass, $name)
        {
            $sql = "insert into user(email,pass,name) values ('$email','$pass','$name')";
            parent::execute($sql);
        }
    }
    

?>