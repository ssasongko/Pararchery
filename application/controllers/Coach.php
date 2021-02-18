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
        // user and title
        $data['title'] = 'Home Coach';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // load model
        $this->load->model('Coach_model', 'coach');
        $data['totalAthletes'] = $this->coach->getTotalAthletes();
        $data['totalUsersBAR'] = $this->coach->getTotalUsersBAR();
        $data['totalUsersSTD'] = $this->coach->getTotalUsersSTD();
        $data['totalUsersREC'] = $this->coach->getTotalUsersREC();
        $data['totalUsersCOM'] = $this->coach->getTotalUsersCOM();
        $data['bestBAR'] = $this->coach->getBestBAR();
        $data['bestSTD'] = $this->coach->getBestSTD();
        $data['bestREC'] = $this->coach->getBestREC();
        $data['bestCOM'] = $this->coach->getBestCOM();

        // Load tampil
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('coach/home', $data);
        $this->load->view('templates/footer');
    }

    public function listArchers()
    {
        // user and titles
        $data['title'] = 'List Archers';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // load model
        $this->load->model('Coach_model', 'coach');
        $data['athlete'] = $this->coach->listAthletes();

        $data['yearNow'] = date('Y');

        // load tampilan
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('coach/list_archer', $data);
        $this->load->view('templates/footer');
    }

    public function listScores()
    {
        // user and titles
        $data['title'] = 'Lists Scores';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // load model
        $this->load->model('Coach_model', 'coach');

        $this->form_validation->set_rules('classes', 'Classes', 'required');

        $classes = $this->input->post('classes');
        $data['classes'] = $classes;
        $data['yearNow'] = date('Y');

        if ($this->form_validation->run() == true) {
            $data['athlete_scores'] = $this->coach->listScores($classes);
        } else {
            $data['athlete_scores'] = $this->coach->nullData();
        }

        // load tampilan
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('coach/list_scores', $data);
        $this->load->view('templates/footer');
    }

    public function detail_scores($id_detail)
    {
        // user and titles
        $data['title'] = 'Lists Scores';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // load model
        $this->load->model('Coach_model', 'coach');
        $data['athlete'] = $this->coach->detailScore($id_detail);

        // load tampilan
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('coach/detail_scores', $data);
        $this->load->view('templates/footer');
    }
}
