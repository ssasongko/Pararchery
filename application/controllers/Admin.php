<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Home Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function manage()
    {
        $data['title'] = 'Manage Account';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $sql = "SELECT * FROM `user`, `user_role` WHERE `user`.role_id = `user_role`.id_role ORDER BY role_id,name ASC";

        $data['athlete'] = $this->db->query($sql)->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/manage', $data);
        $this->load->view('templates/footer');
    }

    public function addAthlete()
    {
        $data['title'] = 'Manage Account';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules(
            'email',
            'Email',
            'trim|required|valid_email|is_unique[user.email]',
            [
                'is_unique' => 'This email has already registered!'
            ]
        );
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        date_default_timezone_set("Asia/Jakarta");
        if ($this->form_validation->run() == true) {
            $account = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 3,
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('user', $account);

            $sql = "SELECT id FROM user WHERE email = " . "'" . $this->input->post('email', true) . "'";
            $id_atlet = $this->db->query($sql)->result_array();

            $accountDetail = [
                'id_atlet' => (int) $id_atlet[0]['id'],
                'birth_date' => htmlspecialchars($this->input->post('date', true)),
                'gender' => $this->input->post('gender', true),
                'status' => htmlspecialchars($this->input->post('status', true)),
                'class' => $this->input->post('classes', true)

            ];
            $this->db->insert('athlete', $accountDetail);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Account name : ' . $account['name'] . ' been created!</div>');

            redirect('admin/manage');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/addatlet', $data);
        $this->load->view('templates/footer');
    }

    public function addCoach()
    {
        $data['title'] = 'Manage Account';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules(
            'email',
            'Email',
            'trim|required|valid_email|is_unique[user.email]',
            [
                'is_unique' => 'This email has already registered!'
            ]
        );
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');

        date_default_timezone_set("Asia/Jakarta");
        if ($this->form_validation->run() == true) {
            $account = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('user', $account);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Account name : ' . $account['name'] . ' been created!</div>');

            redirect('admin/manage');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/addcoach', $data);
        $this->load->view('templates/footer');
    }

    public function delete($id)
    {
        $this->db->delete('user', array('id' => $id));
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account has been deleted!</div>');
        redirect('admin/manage');
    }

    public function changePass($id = 0)
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['passID'] = (int) $id;

        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        if ($this->form_validation->run() == true) {
            $pass = array(
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            );

            $this->db->where('id', $data['passID']);
            $this->db->update('user', $pass);

            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password has been changed!</div>');
            redirect('admin/manage');
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/changepass', $data);
        $this->load->view('templates/footer');
    }

    public function detail($role_id = 0, $id = 0)
    {
        $data['title'] = 'Manage Account';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['d_role'] = (int) $role_id;
        $data['d_id'] = (int) $id;

        if ($data['d_role'] == 1 || $data['d_role'] == 2) {
            $sql = "SELECT * FROM `user`,`user_role` 
            WHERE `user`.`role_id` =  `user_role`.`id_role` AND
            `user_role`.`id_role` = " . $data['d_role'] . " AND
            `id` = " . $data['d_id'];

            $data['account'] = $this->db->query($sql)->result_array();
        } else {
            $sql = "SELECT * FROM `user`,`user_role`,`athlete` WHERE
                `user`.`role_id` =  `user_role`.`id_role` AND
                `user`.`id` = `athlete`.`id_atlet` AND 
                `user`.`id` = " . $data['d_id'];

            $data['account'] = $this->db->query($sql)->result_array();
        }

        $this->form_validation->set_rules('name', 'Name', 'trim|required');

        if ($this->form_validation->run() == true) {
            $name = [
                'name' => htmlspecialchars($this->input->post('name', true))
            ];
            $this->db->where('id', $data['d_id']);
            $this->db->update('user', $name);

            if ($data['d_role'] == 3) {
                $athlete = [
                    'birth_date' => htmlspecialchars($this->input->post('date', true)),
                    'gender' => $this->input->post('gender', true),
                    'status' => htmlspecialchars($this->input->post('status', true)),
                    'class' => $this->input->post('classes', true)
                ];

                $this->db->where('id', $this->input->post('id_atlet', true));
                $this->db->update('athlete', $athlete);
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account has been updated!</div>');
                redirect('admin/manage');
            }
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detail', $data);
        $this->load->view('templates/footer');
    }

    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }


    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }


    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
    }
}
