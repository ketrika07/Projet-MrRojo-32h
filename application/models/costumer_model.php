<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class costumer_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_info($page)
    {
        $id_debut = ($page - 1) * 30;
        $rqt = "select * from customer_list where ID > %d order by ID limit 30";
        $rqt = sprintf($rqt, $id_debut);
        $data = array();
        $query = $this->db->query($rqt);
        foreach ($query->result_array() as $key) {
            $data[] = $key;
        }
        $ret = array();
        $ret['list_customer'] = $data;
        return $ret;
    }

    public function fiche_customer($id)
    {
        $rqt = "select * from customer_list where ID =%d";
        $rqt = sprintf($rqt, $id);
        $data = array();
        $query = $this->db->query($rqt);
        $data = $query->row_array();
        return $data;
    }
}
?>