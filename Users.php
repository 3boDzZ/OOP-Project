<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

/**
 *
 * @author Hesham
 */
class Users {
    //put your code here
    public  $id;
    public $username;
    public $firstname;
    public $lastname;
    public $gender;
    public $phone_number;
    public $email;
    public $address;
    public $usertypeobj;
    public $DOB;
    public $password;
    
     function construct($id) {
        if(!$id=="")
        {
             $con=mysqli_connect("localhost","root","");
             if(!$con)
            {
               die('could not connect:'.mysqli_error());
            }
            $sql ="select *from user where Id=$id";
            $StudentDataSet = mysqli_query($con,$sql) ;
            //n8ir el data set name
            if($row === mysqli_fetch_array($StudentDataSet))
            {
                $this->firstname=$row["firstname"];
                $this->lastname=$row["lastname"];
                $this->id=$id;
                $this->DOB=$row["DOB"];
                $this->usertypeobj=new UserType;
                $this->gender=["male","female"];
                $this->address=$row["address"];
                $this->email=$row["example@"];
                $this->password=$row["password"];
                $this->phone_number=$row["Number"];
              
            }
        }
    }
   
    public function SetUserData() {
        
    }
    public function Signup() {
        
    }
    public function CheckValidation() {
        
    }
    public function GetUserData($id) {
        
    }
}
