<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function objet_page()
    {
        $this->load->model('user_model');
        $data = $this->user_model->get_all_objet();
        $ret = array();
        $ret['data'] = $data;
        $ret['contents'] = "User/ObjectList";
        $this->load->view('Template/template', $ret);
    }

    public function other_objet_page()
    {
        $this->load->model('user_model');
        $data = $this->user_model->get_all_other_objet();
        $ret = array();
        $ret['data'] = $data;
        $ret['contents'] = "User/OtherObjetList";
        $this->load->view('Template/template', $ret);
    }
    public function set_objet_cible()
    {
        redirect("user/objet_page?idCible=" . $_GET['objetCible']);
    }
    public function proposeThis()
    {
        $objet_propose = $_GET['objetPropose'];
        $objet_cible = $_GET['objetCible'];
        $this->load->model('user_model');
        $this->user_model->proposeThis($objet_cible, $objet_propose);
        redirect("user/objet_page");
    }

    public function other_objet_page_with_min_max()
    {
        $prix = $_GET['prix'];
        $diff = $_GET['diff'];
        $this->load->model('user_model');
        $data = $this->user_model->plus_ou_moins($prix, $diff);
        $ret = array();
        $ret['data'] = $data;
        $ret['contents'] = "User/OtherObjetList";
        $this->load->view('Template/template', $ret);
    }
}

?>