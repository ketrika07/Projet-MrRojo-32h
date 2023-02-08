<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Proposition_model extends CI_Model
{
    public function get_all_proposition()
    {
        $user = $_SESSION["user"];
        $rqt = "select * from proposition_data_final where user_cible =%d";
        $rqt = sprintf($rqt, $user['idUser']);
        $querry = $this->db->query($rqt);
        $ret = array();
        foreach ($querry->result_array() as $row) {
            $ret[] = $row;
        }
        return $ret;
    }

    public function refuser($id_proposition)
    {
        $rqt = "update proposition set etat=-1 where idPro = %d ";
        $rqt = sprintf($rqt, $id_proposition);
        $this->db->query($rqt);
        $this->db->affected_rows();
    }
    public function accepter($id_proposition)
    {
        $user = $_SESSION['user'];
        $rqt = "select * from proposition_data_final where idPro =%d";
        $rqt = sprintf($rqt, $id_proposition);
        $querry = $this->db->query($rqt);
        $data = $querry->row_array();



        $rqt_updt01 = "update proposition set etat=1 where idPro = %d ";
        $rqt_updt01 = sprintf($rqt, $id_proposition);
    }
}



?>