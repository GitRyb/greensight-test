<?php

class Check {
    public static function checkName ($name){
        if ($name != '') {
            return true;
        }
        return false;
    }
    
    public static function checkSurname ($surname){
        if ($surname != '') {
            return true;
        }
        return false;
    }
    
    public static function checkEmaiExist ($users, $email) {
        if (array_key_exists($email, $users)) {
            return true;
        }
        return false;
    }
    public static function checkEmail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
    public static function checkPassword ($password){
        if ($password != '') {
            return true;
        }
        return false;
    }
    public static function checkPasswordRepeat ($passwordRepeat){
        if ($passwordRepeat != '') {
            return true;
        }
        return false;
    }
    public static function checkPasswordsMatch ($password, $passwordRepeat) {
        if ($password == $passwordRepeat) {
            return true;
        }
        return false;
    }
}


