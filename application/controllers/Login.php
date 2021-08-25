<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function userLogin()
    {
        print_r($this->input->post());


    }
}
