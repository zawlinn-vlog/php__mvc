<?php

class Usermodal
{
    private $db;
    public function __construct()
    {

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


    public function insertData($fname, $uname, $pass, $email, $utype){
        $this->db->query("INSERT INTO members (fullname, username, password, email, usertype) VALUE (:fname, :uname, :pass, :email, :utype)");

        $this->db->bind(':fname', $fname);
        $this->db->bind(':uname', $uname);
        $this->db->bind(':pass', $pass);
        $this->db->bind(':email', $email);
        $this->db->bind(':utype', $utype);

        $this->db->executedb();

    }


   public function insertPost($title, $pic, $desc,  $vdo, $type, $name, $cdate, $udate)
   {
    $this->db->query("INSERT INTO posts (title, picture, description, video, posttype,  createdby, cdate, udate) VALUE (:title, :pic, :desc, :video, :type,  :name, :cdate, :udate)");

    $this->db->bind(":title", $title);
    $this->db->bind(":pic", $pic);
    $this->db->bind(":desc", $desc);
    $this->db->bind(":video", $vdo);
    $this->db->bind(":type", $type);
    $this->db->bind(":name", $name);
    $this->db->bind(":cdate", $cdate);
    $this->db->bind(":udate", $udate);

    $this->db->executedb();

   }


   public function getAllposts(){
    $this->db->query('SELECT * FROM posts');
    return $this->db->fetchall();

   }
}