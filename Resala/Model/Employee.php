<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employee
 *
 * @author LENOVO-2021
 */
include_once 'Model\IUsers.php';
class Employee implements Users{
    //put your code here
    public function CheckValidation() {
        echo 'Employee check validation';
    }

    public function GetUserData($ID) {
        echo 'UserData';
    }

    public function Login() {
        echo 'employee login';
    }

    public function SetUserData() {
        echo 'employee Set user data';
    }

    public function Signup() {
        echo 'employee signup';
    }

    public function AddEmployee() {
        echo 'Add Employee';
    }
    public function UpdateEmployeeData($ID) {
        echo 'Update Employee Data';
    }
    public function RemoveEmployee($ID) {
        echo 'Remove Employee';
    }
    public function SetPaientData() {
        echo 'Set paient data';
    }
    public function getPaientData() {
        echo 'Get paient data';
    }
}
