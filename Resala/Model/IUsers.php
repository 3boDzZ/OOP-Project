<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author LENOVO-2021
 */
include_once 'Model\Users.php';
interface Users extends Users{
    //put your code here
    public function Login();
    public function SetUserData();
    public function Signup();
    public function CheckValidation();
    public function GetUserData($ID);
}
