<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ManagerModel
 *
 * @author LENOVO-2021
 */
include_once 'Model\IUsers.php';
class ManagerModel implements Users {
    //put your code here
    public function CheckValidation() {
        echo 'Manager check validation';
    }

    public function GetUserData($ID) {
        echo 'UserData';
    }

    public function Login() {
        echo 'manager login';
    }

    public function SetUserData() {
        echo 'manager Set user data';
    }

    public function Signup() {
        echo 'manager signup';
    }
    public function AddManager() {
        echo 'AddManager';
    }
    public function UpdateManagerData($ID) {
        echo 'UpdateManagerData';
    }
    public function DeleteManager($ID) {
        echo 'DeleteManager';
    }
}
