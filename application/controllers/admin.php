<?php
class Admin extends CI_Controller
{
    public function logIn()
    {
        $mail = $_POST['email'];
        $mdp = $_POST['mdp'];
        $this->load->model('admin_model');
        $this->admin_model->checkLoginAdmin($mail, $mdp);
    }

    public function index()
    {
        $this->load->view('Admin/index');
    }
    public function stat()
    {
        $rqt = "SELECT count(*) as isa from user
        union 
        select count(*) from proposition where etat=1";
        $querry = $this->db->query($rqt);
        $ret = array();
        foreach ($querry->result_array() as $row) {
            $ret[] = $row;
        }
        $data = array();
        $data['nb_user'] = $ret[0]['isa'];
        $data['nb_propo'] = $ret[1]['isa'];
        $this->load->view('Admin/Homepage', $data);
    }
}


?>