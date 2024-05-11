<?php
    class db{
        public $host = "localhost";
        public $user = "root";
        public $password = "";
        public $dbName = "MaZ";
        public $connect;
        
        public function connect(){
            $this->connect = new mysqli($this->host, $this->user, $this->password, $this->dbName);
            if($this->connect->connect_errno){
                echo"not connected , " + $this->connect->connect_errno;
                return false;
            }else{
                return true;
            }
        }
        public function close(){
            if($this->connect){
                $this->connect->close();
            }else{
                echo "it's not oppened";
            }
        }
        public function query($q){
            $res = $this->connect->query($q);
            if($res){
                return $res->fetch_all(MYSQLI_ASSOC);
            }else{
                echo "error in fetch" + mysqli_errno($this->connect);
                return false;
            }
        }
        public function insert($q){
            if($this->connect->query($q))
                return true;
        }
    }
?>