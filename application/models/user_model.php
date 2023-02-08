<?php
session_start();
defined('BASEPATH') or exit('No direct script access allowed');
class User_model extends CI_Model
{
    public function get_all_objet()
    {
        $rqt = "SELECT * from objet where idUser=%d";
        $user = $_SESSION["user"];
        $rqt = sprintf($rqt, $user['idUser']);
        $querry = $this->db->query($rqt);
        $ret = array();
        foreach ($querry->result_array() as $row) {
            $ret[] = $row;
        }
        return $ret;
    }
    public function get_all_other_objet()
    {
        $rqt = "SELECT * from objet where idUser!=%d";
        $user = $_SESSION["user"];
        $rqt = sprintf($rqt, $user['idUser']);
        $querry = $this->db->query($rqt);
        $ret = array();
        foreach ($querry->result_array() as $row) {
            $ret[] = $row;
        }
        return $ret;
    }
    public function proposeThis($objet_cible, $objet_propose)
    {
        $rqt = "insert into proposition (id_objet_cible,id_objet_propose) values (%d,%d)";
        $rqt = sprintf($rqt, $objet_cible, $objet_propose);
        $this->db->query($rqt);
        $this->db->affected_rows();
    }
    public function plus_ou_moins($prix, $diff)
    {
        $min = $prix - (($prix * $diff) / 100);
        $max = $prix + (($prix * $diff) / 100);
        $rqt = "SELECT * from objet where idUser!=%d and( prix Between %d and %d )";
        $user = $_SESSION["user"];
        $rqt = sprintf($rqt, $user['idUser'], $min, $max);
        $querry = $this->db->query($rqt);
        $ret = array();
        foreach ($querry->result_array() as $row) {
            $ret[] = $row;
        }
        return $ret;
    }

}



?>