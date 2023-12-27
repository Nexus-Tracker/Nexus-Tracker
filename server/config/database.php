<?php

    class Database{
    
        // specify your own database credentials
        private $host = "";
        private $db_name = "";
        private $username = "";
        private $password = "";
        public $conn;
    
        // get the database connection
        // public function getConnection(){
        public function getConnection()
        {


            include('dotenv.php');
            $this->host = $HOST; //replace with your own host
            $this->db_name = $DB_NAME; //replace with your own db name
            $this->username = $USERNAME; //replace with your own db username
            $this->password = $PASSWORD; //replace with your own password

    
            try{
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                
                // echo "Connected successfully";
                return $this->conn;

            }catch(PDOException $exception){
                echo "Connection error: "; //. $exception->getMessage();
            }
    
        }
    }


    // $bdconnect = new Database();
    // $bdconnect->getConnection();
?>