<?php

class Dbh {

    protected function connect(){
        try{
            $user = "root";
            $pwd = "";
            $dbh = new PDO('mysql:host=localhost;dbname=newsukdb', $user, $pwd);
            return $dbh;
        }
        catch(PDOException $e){
            print "Error: ".$e->getMessage(). "\n";
            die();
        }
    } 

}

