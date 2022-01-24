<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of enddonation
 *
 * @author lenovo
 */
include_once 'donorstate.php';
class enddonation implements donorstate{
    public function Dodonation($Donor){
        echo 'End Donation';
    }    
    
}
