<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OrgnizerView
 *
 * @author LENOVO-2021
 */
include_once 'View\UsersView.php';

class OrgnizerView implements UsersView {
    //put your code here
    public function Checkvaildation() {
        echo 'Check V orgnizer';
    }

    public function Login() {
        echo 'Login orgnizer';
    }

    public function SetUserData() {
        echo 'set data orgnizer';
    }

    public function Signup() {
        echo'sign up orgnizer';
    }

    public function selectUserType() {
        echo 'Select Type orgnizer';
    }
    public function addEvents()
    {
        echo 'add event';   
    }
    public function deleteEvents($eventID)
    {
        echo 'delete event number: ';
        #echo $eventID ;
    }
    public function Notify()
    {
        echo 'notify';
    }
}
