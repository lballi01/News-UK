<?php
include_once '../Model/SignUpModel.php';

class SignUpController extends SignUpModel{

    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdRepeat, $email){
        $this -> uid = $uid;
        $this -> pwd = $pwd;
        $this -> pwdRepeat = $pwdRepeat;
        $this -> email = $email;
    }

    public function signupUser(){
        if ($this->emptyInput()==false) {
            header("location:../Register.php?error=emptyinput");
            exit();
        }
        if ($this->invaliduid()==false) {
            header("location:../Register.php?error=invaliduid");
            exit();
        }
        if ($this->invalidEmail()==false) {
            header("location:../Register.php?error=invalidemail");
            exit();
        }
        if ($this->pwdMatch()==false) {
            header("location:../Register.php?error=pwdmatch");
            exit();
        }
        if ($this->uidTakenCheck()==false) {
            header("location:../Register.php?error=uidTakenCheck");
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
    }

    private function emptyInput() {
        $result =true;
        if (empty($this -> uid) || empty($this -> pwd) || empty($this -> pwdRepeat) || empty($this -> email)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invaliduid() {
        $result = true;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this -> uid)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail() {
        $result = true;
        if (!filter_var($this -> email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch() {
        $result = true;
        if (!$this -> pwd == $this -> pwdRepeat){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function uidTakenCheck() {
        $result = true;
        if (!$this->checkUser($this->uid, $this->email)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

}