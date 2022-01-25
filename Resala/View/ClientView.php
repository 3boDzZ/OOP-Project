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
include_once 'View\UsersView.php';

class ClientView implements UsersView{
    //put your code here
    public function Checkvaildation() {
        echo 'Vaildation Client';
    }

    public function Login() {
        echo 'login Client';
    }

    public function SetUserData() {
        echo 'data client';
    }

    public function Signup() {
        echo 'sign up client';
    }

    public function selectUserType() {
        echo 'Done';
        
    }

}
