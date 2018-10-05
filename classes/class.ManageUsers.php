<?php
    include_once('class.database.php');

    class manageUsers{
        public $link;

        function __construct(){
            $db_connection=new  dbConnection();
            $this->link=$db_connection->connect();
            return $this->link;
        }

        function registerUsers($username, $email, $password, $ip_address, $date, $time){
            $query=$this->link->prepare("INSERT INTO users (user_name,user_email, user_password, user_ip, user_date, user_time) VALUES (?,?,?,?,?,?)");
            $values = array($username,$email,$password,$ip_address,$date,$time);
            $query->execute($values);
            $counts=$query->rowCount();
            return $counts;
        }

    }
    
    
?>