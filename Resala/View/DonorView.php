<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DonorView
 *
 * @author LENOVO-2021
 */
include_once 'View\UsersView.php';

class DonorView extends ClientView {
    //put your code here
    public function addDonation()
    {
        echo 'Add donation';
    }
    public function cancelDonation()
    {
        echo 'cancel Donation';
    }
}
