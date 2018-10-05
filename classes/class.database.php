<?php
    class dbConnection{
        protected $db_conn;
        public $database='todo';
        public $username='root';
        public $password='@gemmaerindan13';
        public $host_name='localhost';


        function connect(){
            try{
                $this->db_conn=new PDO('mysql:host='.$this->host_name.';dbname='.$this->database, $this->username, $this->password);
                return $this->db_conn;
             
            }catch(PDOException $e){
                return "Error :- ".$e->getMessage();
            }
        }
    }
?>