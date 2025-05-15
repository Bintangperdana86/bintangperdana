<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Cek session login
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
    }

    // Dashboard
    public function index() {
        $data['title'] = 'Dashboard';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }

    // Profile Page
    public function profile() {
        $data['title'] = 'Profile';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/profile');
        $this->load->view('admin/footer');
    }

    // Data Tables
    public function tables() {
        $data['title'] = 'Data Tables';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/tables');
        $this->load->view('admin/footer');
    }
}