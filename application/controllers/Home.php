<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/homebanner');
        $this->load->view('template/sidebar');
        $this->load->view('home');
        $this->load->view('template/footer');

// content holds header,body,footer
        // $header = $this->load->view('template/header', '', true);
        // $body = $this->load->view('home', '', true);
        // $sidebar = $this->load->view('template/sidebar', '', true);
        // $footer = $this->load->view('template/footer', '', true);
        // $content = array(
        //     'header' => $header,
        //     'body' => $body,
        //     'sidebar' => $sidebar,
        //     'footer' => $footer
        // );

// // contents now holds all parsed html in $contents
        // $contents = $this->load->view('home', $content, true);

// $data = array(
        //     'contents' => $contents
        // );
        // // output all contents
        // $this->load->view('home',$data);

    }
}
