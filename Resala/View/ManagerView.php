<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ManagerView
 *
 * @author LENOVO-2021
 */
include_once 'View\UsersView.php';
class ManagerView implements UsersView {
    //put your code here
    public function Checkvaildation() {
        echo 'Vaild Manager';
    }

    public function Login() {
        echo 'Login Manager';
    }

    public function SetUserData() {
        echo 'data Mager';
    }

    public function Signup() {
        echo 'SignUp manager';
    }

    public function selectUserType() {
        echo 'type manager';
    }
    public function addEmployee()
    {
        echo 'add emp';   
    }
    public function removeEmployee($EmpID)
    {
        echo 'remove emp';
        echo $EmpID;
    }
    public function UpdateEmployee($EmpID)
    {
     echo 'update emp';
     echo $EmpID;
    }
    public function notifyEmployee($EmpID)
    {
        echo 'Notify emp';
        echo $EmpID;
    }
}
