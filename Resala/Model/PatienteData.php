<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PatienteData
 *
 * @author LENOVO-2021
 */
class PatienteData {
    //put your code here
    private $PatientName;
    private $patientNeeds;
    private $ParientID;
    public function setName($PatientName)
    {
        $this->PatientName=$PatientName;
    }
    public function getName()
    {
        return $this->$PatientName;
    }
    public function setneeds($patientNeeds)
    {
        $this->$patientNeeds = $patientNeeds;
    }
    public function getneeds()
    {
        return $this->$patientNeeds;
    }
    public function setID($ParientID)
    {
        $this->$ParientID=$ParientID;
    }
    public function getID()
    {
        return $this->$ParientID;
    }
}
