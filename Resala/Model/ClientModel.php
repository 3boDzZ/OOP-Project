<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Client Model
 *
 * @author LENOVO-2021
 */
include_once 'Model\IUsers.php';

class ClientModel implements Users{
    //put your code here
     public function CheckValidation() {
        echo 'client check validation';
    }

    public function GetUserData($ID) {
        echo 'client UserData';
    }

    public function Login() {
        echo 'client login';
    }

    public function SetUserData() {
        echo 'client Set user data';
    }

    public function Signup() {
        echo 'client signup';
    }
    public function setClientType() {
        echo 'client type';
    }
    public function addclient(){
        echo 'add client';
    }
    public function deleteClient($clientID) {
        echo 'delete client';
    }
    public function selectClientType() {
        echo 'select client';
    }
    public function updateClientInfo($clientID) {
        echo 'update client';
    }
}
