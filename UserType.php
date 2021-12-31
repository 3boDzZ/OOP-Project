<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of UserType
 *
 * @author Hesham
 */
class UserType {
    //put your code here
    public $ID;
    Public $Name;
    public $email;
   
            function construct($id) {
        if(!$id=="")
        {
             $con=mysqli_connect("localhost","root","");
             if(!$con)
            {
               die('could not connect:'.mysqli_error());
            }
            $sql ="select *from usertype where Id=$id";
            $StudentDataSet = mysql_query($sql) or die (mysql_error());
            if($row = mysql_fetch_array($StudentDataSet))
            {
                $this->Name=$row["Name"];
                $this->ID=$row["ID"];
                $this->email=$row["Email"];    
            }
}
     }
}