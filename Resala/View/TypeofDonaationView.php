<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of Type of DonaationView
 *
 * @author LENOVO-2021
 */
#include_once 'View\DonorView.php';
class TypeofDonaationView{
//put your code here
    public function donatethroughRepresentaive()
    {
        echo 'D through R';
    }
    public function donatethroughSMS()
    {
        echo 'SMS';
    }
    public function donatethroughATM()
    {
        echo 'ATM';
    }
}