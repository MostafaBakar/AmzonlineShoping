<?php
    require_once "../../controler/db.php";
    class production{

        public function goCard($id){
            session_start();
            $_SESSION['productID'] = $id;
            header("location: ../views/product/product.php");
        }
        public function addCard(int $id,int $pro, int $q){
            $db = new db;
            if($db->connect()){
                $query = "INSERT INTO `cart` (`userID`, `productID`, `quantity`) VALUES ('$id', '$pro', '$q');";
                $db->insert($query);
            }
        } 
        public function addWish(int $id,int $pro){
            $db = new db;
            if($db->connect()){
                $query = "INSERT INTO `wish` (`userID`, `productID`) VALUES ('$id', '$pro');";
                $db->insert($query);
            }
        } 
        public function removeWish(int $id,int $pro){
            $db = new db;
            if($db->connect()){
                $query = "DELETE FROM `wish` WHERE productID = $pro and userID = $id;";
                $db->insert($query);
            }
        } 
        public function removeCard(int $id,int $pro){
            $db = new db;
            if($db->connect()){
                $query = "DELETE FROM `cart` WHERE productID = $pro and userID = $id;";
                $db->insert($query);
            }
        } 
    }




?>