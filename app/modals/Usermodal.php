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


    public function insertData($fname, $uname, $pass, $email){
        $this->db->query("INSERT INTO members (fullname, username, password, email) VALUE (:fname, :uname, :pass, :email)");

        $this->db->bind(':fname', $fname);
        $this->db->bind(':uname', $uname);
        $this->db->bind(':pass', $pass);
        $this->db->bind(':email', $email);

        return $this->db->executedb();
    }
}