<?php
session_start();
defined('BASEPATH') or exit('No direct script access allowed');
class Connexion_model extends CI_Model
{
    public function check_login($email, $mdp)
    {
        $rqt = "select nomUser,idUser from user where email='%s' and password='%s'";
        $rqt = sprintf($rqt, $email, $mdp);
        $querry = $this->db->query($rqt);
        $data = $querry->row_array();
        if (is_null($data)) {
            redirect("connexion/index");
        } else {
            $_SESSION["user"] = $data;
            echo (var_dump($_SESSION["user"]));
            redirect("Welcome/default_index");
        }
    }
    public function checkLoginAdmin($mail, $mdp)
    {
        $rqt = "select nomUser,idUser from user where email='%s' and password='%s'";
        $rqt = sprintf($rqt, $mail, $mdp);
        $querry = $this->db->query($rqt);
        $data = $querry->row_array();
        if (is_null($data)) {
            redirect("connexion/index");
        } else {
            $_SESSION["user"] = $data;
            echo (var_dump($_SESSION["user"]));
            redirect("Welcome/default_index");
        }
    }
    public function sign_this($email, $nom, $mdp)
    {
        $rqt = "insert into user(nomUser,email,password) values ('%s','%s','%s')";
        $rqt = sprintf($rqt, $nom, $email, $mdp);
        $this->db->query($rqt);
        $this->db->affected_rows();
    }
    public function setUserInfo($email, $mdp)
    {
        $rqt = "select nomUser,idUser from user where email='%s' and password='%s'";
        $rqt = sprintf($rqt, $email, $mdp);
        $querry = $this->db->query($rqt);
        $data = $querry->row_array();
        $_SESSION['user'] = $data;
        redirect("Welcome/default_index");
    }
}

?>