<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Donor
 *
 * @author lenovo
 */
include_once 'donorstate.php';
class Donor {
    public Donor(){
        state = null;
    }

   public void dodonation(State donorstate){
      this.state = state;		
   }

   public State dodonation(){
      return dodonation;
    }
}
