<?php
class DB{
    static function getInstance(){
        return new PDO("mysql:host=localhost;dbname=blio","root","");
    }
}
?>