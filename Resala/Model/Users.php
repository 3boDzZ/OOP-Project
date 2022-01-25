<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users
 *
 * @author LENOVO-2021
 */
class Users {
    //put your code here
    private $ID;
    private $Username;
    private $Fristname;
    private $Lastname;
    private $Gender;
    private $Phone_number;
    private $Email;
    private $Address;
    private $Usertype;
    private $password;
    public function setID($ID)
    {
        $this->$ID = $ID;
    }
    public function getID()
    {
        return $this->$ID;
    }
    
    public function setUsername($Username)
    {
        $this->Username = $Username;
    }
    public function getUsername()
    {
        return $this->Username;
    }
    
    
    public function setFristname($Fristname)
    {
        $this->Fristname = $Fristname;
    }
    public function getFristName()
    {
        return $this->Fristname;
    }
    
    public function setLastname($Lastname)
    {
        $this->Lastname = $Lastname;
    }
    public function getLastname()
    {
        return $this->Lastname;
    }
    
    public function setGender($Gender)
    {
        $this->Gender = $Gender;
    }
    public function getGender()
    {
        return $this->Gender;
    }
    
    public function setPhone($Phone_number)
    {
        $this->Phone_number = $Phone_number;
    }
    public function getPhone()
    {
        return $this->Phone_number;
    }
    
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }
    public function getEmail()
    {
        return $this->Email;
    }
    
   public function setAddress($Address)
    {
        $this->Address = $Address;
    }
    public function getAddress()
    {
        return $this->Address;
    }
    
    public function setUsertype($Usertype)
    {
        $this->Usertype = $Usertype;
    }
    public function getUsertype()
    {
        return $this->Usertype;
    }
    
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getPassword()
    {
        return $this->password;
    }
}
