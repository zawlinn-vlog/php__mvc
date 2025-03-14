<?php

class Usermodal
{
    private $db;
    public function __construct()
    {
        // echo __CLASS__; 

        $this->db = new Database();
    }


    public function getAllData(){
        $this->db->query("SELECT * FROM members");
        $res = $this->db->fetchall();

        foreach($res as $val)
        {
            printArr($val);
        }
        
    }


    public function getDatabyEmail($email){

        $this->db->query("SELECT * FROM members WHERE email=:email");

        $this->db->bind(':email', $email);

        return $this->db->fetchone();
 
    }
}