<?php
    class DB{
        private $username = "root";
        private $password = "123@Password";//changer votre mdp
        private $host = "db";
        private $database = "clubs";
        private $port = 3306;
        public $conn;

        /*
        DB class contructor
        */

        function init(){
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database, $this->port);
        }

        function close(){
            return $this->conn->close();
        }

    }

?>