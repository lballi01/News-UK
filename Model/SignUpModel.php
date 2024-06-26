<?php
include_once "../config/dbh.php";
class SignUpModel extends Dbh{

    protected function checkUser($uid, $email) {
        $stmnt = $this->connect()->prepare('SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?;');

        if(!$stmnt->execute(array($uid, $email))){
            $stmnt = null;
            header("location: ../Register.php?error=stmntfailed" );
            exit();
        }

        $resultCheck = true;
    if($stmnt->rowCount() > 0 ){
        $resultCheck = false;
    }else{
        $resultCheck = true;
    }
    return $resultCheck;
    }

    protected function setUser($uid, $pwd, $email) {
        $stmnt = $this->connect()->prepare('INSERT INTO users(users_uid, users_pwd, users_email) VALUES (?, ?, ?);');
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);


        if(!$stmnt->execute(array($uid,$hashedPwd, $email))){
            $stmnt = null;
            header("location: ../Register.php?error=stmntfailed" );
            exit();
        }

        $stmnt = null;

       
    }
    
    
}