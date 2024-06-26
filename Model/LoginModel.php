<?php
include_once "../config/dbh.php";
class LoginModel extends Dbh{

    protected function getUser($uid, $pwd) {
        $stmnt = $this->connect()->prepare('SELECT users_pwd FROM users WHERE users_uid = ? OR users_email = ?;');

        if(!$stmnt->execute(array($uid, $pwd))){
            $stmnt = null;
            header("location: ../Register.php?error=stmntfailed" );
            exit();
        }

        if($stmnt->rowCount() == 0 ){
            $stmnt = null;
            header("location: ../Register.php?error=usernotfound" );
            exit();
        }

        $pwdHashed = $stmnt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHashed[0]["users_pwd"]);

        if($checkPwd == false){
            $stmnt = null;
            header("location:../Register.php?error=wrongpwd" );
            exit();
        }
        else if($checkPwd == true){
            $stmnt = $this->connect()->prepare('SELECT * FROM users WHERE users_uid = ? OR users_email = ? AND users_pwd = ?;');

            if(!$stmnt->execute(array($uid, $uid, $pwd))){
                $stmnt = null;
                header("location: ../Register.php?error=stmntfailed" );
                exit();
            }

            if($stmnt->rowCount() == 0 ){
                $stmnt = null;
                header("location: ../Register.php?error=stmntfailed" );
                exit();
            }

            $user = $stmnt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userid"] = $user[0]["users_id"];
            $_SESSION["useruid"] = $user[0]["users_uid"];
            $stmnt = null;
            
        }


   
    
    
}
}