<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Coach extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Home Coach';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $data['totalAthletes'] = $this->db->query("SELECT * FROM `athlete`")->num_rows();
        $data['totalUsersBAR'] = $this->db->query("SELECT * FROM `athlete` WHERE class='Barebow Bow'")->num_rows();
        $data['totalUsersSTD'] = $this->db->query("SELECT * FROM `athlete` WHERE class='Standard Bow' ")->num_rows();
        $data['totalUsersREC'] = $this->db->query("SELECT * FROM `athlete` WHERE class='Recurve Bow'")->num_rows();
        $data['totalUsersCOM'] = $this->db->query("SELECT * FROM `athlete` WHERE class='Compound Bow'")->num_rows();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('coach/home', $data);
        $this->load->view('templates/footer');
    }


    public function listArchers()
    {
        $data['title'] = 'List Archers';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $sql = "SELECT * FROM user, athlete WHERE `user`.id = `athlete`.`id_atlet` ORDER BY birth_date DESC";
        $data['athlete'] = $this->db->query($sql)->result_array();
        $data['yearNow'] = date('Y');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('coach/list_archer', $data);
        $this->load->view('templates/footer');
    }

    // made by irfan
    public function listScores()
    {
        $data['title'] = 'List Archers';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $sql = "SELECT * FROM user, athlete WHERE `user`.id = `athlete`.`id_atlet` ORDER BY birth_date DESC";
        $data['athlete'] = $this->db->query($sql)->result_array();
        $data['yearNow'] = date('Y');

        $data['umur'] = 20;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('coach/list_scores', $data);
        $this->load->view('templates/footer');
    }
}
    // public function role()
    // {
    //     $data['title'] = 'Role';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    //     $data['role'] = $this->db->get('user_role')->result_array();

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('templates/topbar', $data);
    //     $this->load->view('admin/role', $data);
    //     $this->load->view('templates/footer');
    // }
