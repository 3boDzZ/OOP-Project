<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmployeeView
 *
 * @author LENOVO-2021
 */
include_once 'View\UsersView.php';

class EmployeeView implements UsersView{
    //put your code here
    
    public function Checkvaildation() {
        echo 'Vaildation Emp';
    }

    public function Login() {
        echo 'login emp';
    }

    public function SetUserData() {
        echo 'data emp';
    }

    public function Signup() {
        echo 'signup emp';
    }

    public function selectUserType() {
        echo 'Type emp';
    }
    public function addClient()
    {
        echo 'Add client';
    }
    public function deleteClient($clientID)
    {
        echo 'Delete Client';
        echo $clientID;
    }
    public function selectClientType()
    {
        echo 'Client Type';
    }
    public function updateClientInfo($clientID)
    {
        echo 'update client';
        echo $clientID;
    }
    public function setPatientsData()
    {
        echo 'set data patient';
    }
    public function getPatientsData()
    {
        echo 'get patient data';
    }
}
