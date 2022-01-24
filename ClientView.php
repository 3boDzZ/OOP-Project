<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClientView
 *
 * @author LENOVO-2021
 */
include_once 'UsersView.php';

class ClientView implements UsersView{
    //put your code here
    public function Checkvaildation() {
        echo("Client view validation");
    }

    public function Login() {
        echo ("Client view login");
    }

    public function SetUserData() {
        echo ("Client view set data");
    }

    public function Signup() {
        echo ("Client view signup");
    }

    public function selectUserType() {
        echo 'Done';
        
    }

}
