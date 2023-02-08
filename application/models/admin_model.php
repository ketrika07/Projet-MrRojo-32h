<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_model extends CI_Model
{
    public function checkLoginAdmin($mail, $mdp)
    {
        $rqt = "select nomUser,idUser from user where email='%s' and password='%s'";
        $rqt = sprintf($rqt, $mail, $mdp);
        $querry = $this->db->query($rqt);
        $data = $querry->row_array();
        redirect('admin/stat');
    }
    public function statistique()
    {
        $rqt = "SELECT count(*) as isa from user
        union 
        select count(*) from proposition where etat=1";
        $querry = $this->db->query($rqt);
        $ret = array();
        foreach ($querry->result_array() as $row) {
            $ret[] = $row;
        }
        return $ret;
    }

}



?>