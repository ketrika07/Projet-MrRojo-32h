<?php
defined('BASEPATH') or exit('No direct script access allowed');

class connexion extends CI_Controller
{
    public function index()
    {
        $this->load->view('Login\index');
    }
    public function index2()
    {
        $this->load->view('Login\inscription');
    }

    public function logIn()
    {
        $mail = $_POST['email'];
        $mdp = $_POST['password'];
        $this->load->model('connexion_model');
        $this->connexion_model->check_login($mail, $mdp);
    }
    public function signUp()
    {
        $mail = $_POST['email'];
        $nom = $_POST['Nom'];
        $mdp01 = $_POST['password'];
        $mdp02 = $_POST['password_repeat'];
        echo (var_dump($mdp01));
        echo (var_dump($mdp02));
        if ($mdp01 === $mdp02) {
            $this->load->model('connexion_model');
            $this->connexion_model->sign_this($mail, $nom, $mdp01);
            $this->connexion_model->setUserInfo($mail, $mdp01);
        } else {
            $this->load->view('Login\inscription');
        }
    }
}
?>