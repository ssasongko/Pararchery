<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Athlete extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $time = $this->input->post('time');
        $data['title'] = 'Home Athlete';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Title

        $this->form_validation->set_rules('time', 'Time', 'required');

        $time = $this->input->post('time');
        $data['time'] = $time;
        if ($this->form_validation->run() == true) {
            if ($time == "All Time") {
                $sql = "SELECT * FROM `user`, `athlete`, `athlete_scores` 
                    WHERE `user`.`id` = `athlete_scores`.`id_athelete` AND 
                    `athlete`.`id_atlet` = `athlete_scores`.`id_athelete`
                     ORDER BY `athlete_scores`.`total` DESC";
                $data['athlete'] = $this->db->query($sql)->result_array();
            } else if ($time == date('Y')) {
                $sql = "SELECT * FROM `user`, `athlete`, `athlete_scores` 
                    WHERE `user`.`id` = `athlete_scores`.`id_athelete` AND 
                    `athlete`.`id_atlet` = `athlete_scores`.`id_athelete`
                    AND `athlete_scores`.`date_scores` LIKE '%" . $time . "%'
                    ORDER BY `athlete_scores`.`total` DESC";
                $data['athlete'] = $this->db->query($sql)->result_array();
            } else {
                $sql = "SELECT * FROM `user`, `athlete`, `athlete_scores` 
                    WHERE `user`.`id` = `athlete_scores`.`id_athelete` AND 
                    `athlete`.`id_atlet` = `athlete_scores`.`id_athelete`
                    AND `athlete_scores`.`date_scores` LIKE '%-" . $time . "-%'
                    ORDER BY `athlete_scores`.`total` DESC";
                $data['time'] = date("F Y", mktime(0, 0, 0, $time, 10));
                $data['athlete'] = $this->db->query($sql)->result_array();
            }
        } else {
            // no data
            $sql = "SELECT * FROM `user`, `athlete`, `athlete_scores` 
                    WHERE `user`.`id` = 0";
            $data['athlete'] = $this->db->query($sql)->result_array();
        }

        // Logic to Get Values from DB

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('athlete/home', $data);
        $this->load->view('templates/footer');
    }

    public function myscores()
    {
        $data['title'] = 'My Scores';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $sql = "SELECT * FROM `user`, `athlete`, `athlete_scores` 
            WHERE `user`.`id` = `athlete_scores`.`id_athelete` AND 
            `athlete`.`id_atlet` = `athlete_scores`.`id_athelete` AND
            `user`.`id` = " . $this->session->userdata('id') . " ORDER BY `athlete_scores`.`total` DESC";

        $data['athlete'] = $this->db->query($sql)->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('athlete/myscores', $data);
        $this->load->view('templates/footer');
    }

    public function detail_scores($id_detail)
    {
        $data['title'] = 'Detail Scores';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $sql = "SELECT * FROM `user`, `athlete`, `athlete_scores` 
            WHERE `user`.`id` = `athlete_scores`.`id_athelete` AND 
            `athlete`.`id_atlet` = `athlete_scores`.`id_athelete` AND
            `athlete_scores`.`id` = " . $id_detail . " AND
            `user`.`id` = " . $this->session->userdata('id') . " ORDER BY `athlete_scores`.`total` DESC";

        $data['athlete'] = $this->db->query($sql)->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('athlete/detail_scores', $data);
        $this->load->view('templates/footer');
    }

    public function detail_scores_lead($id_detail)
    {
        $data['title'] = 'Detail Scores';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $sql = "SELECT * FROM `user`, `athlete`, `athlete_scores` 
            WHERE `user`.`id` = `athlete_scores`.`id_athelete` AND 
            `athlete`.`id_atlet` = `athlete_scores`.`id_athelete` AND
            `athlete_scores`.`id` = " . $id_detail . " ORDER BY `athlete_scores`.`total` DESC";

        $data['athlete'] = $this->db->query($sql)->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('athlete/detail_scores_lead', $data);
        $this->load->view('templates/footer');
    }


    public function goscore()
    {
        $data['title'] = 'Go Scoring!';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['myId'] = $this->session->userdata('id');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('athlete/goscore', $data);
        $this->load->view('templates/footer');
    }

    public function leaderboards()
    {
        $data['title'] = 'Leaderboards';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['myId'] = $this->session->userdata('id');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('athlete/lead', $data);
        $this->load->view('templates/footer');
    }

    public function savescore()
    {
        $data['title'] = 'Go Scoring!';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['myId'] = $this->session->userdata('id');

        $this->form_validation->set_rules('location', 'Location', 'required');
        $this->form_validation->set_rules('distance', 'Distance', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Go Scoring!';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('athlete/goscore', $data);
            $this->load->view('templates/footer');
        } else {
            $id = $data['myId'];

            $ra11 = $this->input->post('ra11');
            $ra12 = $this->input->post('ra12');
            $ra13 = $this->input->post('ra13');
            $ra21 = $this->input->post('ra21');
            $ra22 = $this->input->post('ra22');
            $ra23 = $this->input->post('ra23');
            $ra31 = $this->input->post('ra31');
            $ra32 = $this->input->post('ra32');
            $ra33 = $this->input->post('ra33');
            $ra41 = $this->input->post('ra41');
            $ra42 = $this->input->post('ra42');
            $ra43 = $this->input->post('ra43');
            $ra51 = $this->input->post('ra51');
            $ra52 = $this->input->post('ra52');
            $ra53 = $this->input->post('ra53');
            $ra61 = $this->input->post('ra61');
            $ra62 = $this->input->post('ra62');
            $ra63 = $this->input->post('ra63');
            $ra71 = $this->input->post('ra71');
            $ra72 = $this->input->post('ra72');
            $ra73 = $this->input->post('ra73');
            $ra81 = $this->input->post('ra81');
            $ra82 = $this->input->post('ra82');
            $ra83 = $this->input->post('ra83');
            $ra91 = $this->input->post('ra91');
            $ra92 = $this->input->post('ra92');
            $ra93 = $this->input->post('ra93');
            $ra101 = $this->input->post('ra101');
            $ra102 = $this->input->post('ra102');
            $ra103 = $this->input->post('ra103');
            $total = $ra11 + $ra12 + $ra13 +
                $ra21 + $ra22 + $ra23 +
                $ra31 + $ra32 + $ra33 +
                $ra41 + $ra42 + $ra43 +
                $ra51 + $ra52 + $ra53 +
                $ra61 + $ra62 + $ra63 +
                $ra71 + $ra72 + $ra73 +
                $ra81 + $ra82 + $ra83 +
                $ra91 + $ra92 + $ra93 +
                $ra101 + $ra102 + $ra103;

            $data = [
                'id_athelete' => $id,
                'date_scores' => $this->input->post('date'),
                'location' => $this->input->post('location'),
                'distance' => $this->input->post('distance'),
                "`11`" => $ra11,
                "`12`" => $ra12,
                "`13`" => $ra13,
                "`21`" => $ra21,
                "`22`" => $ra22,
                "`23`" => $ra23,
                "`31`" => $ra31,
                "`32`" => $ra32,
                "`33`" => $ra33,
                "`41`" => $ra41,
                "`42`" => $ra42,
                "`43`" => $ra43,
                "`51`" => $ra51,
                "`52`" => $ra52,
                "`53`" => $ra53,
                "`61`" => $ra61,
                "`62`" => $ra62,
                "`63`" => $ra63,
                "`71`" => $ra71,
                "`72`" => $ra72,
                "`73`" => $ra73,
                "`81`" => $ra81,
                "`82`" => $ra82,
                "`83`" => $ra83,
                "`91`" => $ra91,
                "`92`" => $ra92,
                "`93`" => $ra93,
                "`101`" => $ra101,
                "`102`" => $ra102,
                "`103`" => $ra103,
                'total' => $total
            ];

            $this->db->insert('athlete_scores', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Scoring berhasil disimpan</div>');
            redirect('athlete/myscores');
        }
    }
}
