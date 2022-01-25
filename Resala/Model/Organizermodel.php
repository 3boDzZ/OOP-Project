<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of 
 *
 * @author LENOVO-2021
 */
include_once 'Model\IUsers.php';
class Organizermodel implements Users{
    //put your code here
     public function CheckValidation() {
        echo 'Organizer check validation';
    }

    public function GetUserData($ID) {
        echo ' Organizer UserData';
    }

    public function Login() {
        echo 'Organizer login';
    }

    public function SetUserData() {
        echo 'Organizer Set user data';
    }

    public function Signup() {
        echo 'Organizer signup';
    }
    public function addEvents() {
        echo 'add event';
    }
    public function UpdateEvents($eventID) {
        echo 'update event';
    }
    public function deleteEvents($eventID) {
        echo 'delete event';
    }
}