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
        //title and user
        $data['title'] = 'Home Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // load data dari model untuk dashboard admin.
        $this->load->model('Admin_model', 'indexPage');

        $data['totalUsers'] = $this->indexPage->getTotalUsers();
        $data['totalAdmin'] = $this->indexPage->getTotalAdmin();
        $data['totalCoach'] = $this->indexPage->getTotalCoach();
        $data['totalAthletes'] = $this->indexPage->getTotalAthletes();

        // load tampilan
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function manage()
    {
        // title and user
        $data['title'] = 'Manage Account';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // load data dari model untuk halaman admin.
        $this->load->model('Admin_model', 'managePage');
        $data['athlete'] = $this->managePage->dataUsers();

        // load tampilan
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/manage', $data);
        $this->load->view('templates/footer');
    }

    public function addAthlete()
    {
        // title and user
        $data['title'] = 'Manage Account';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // memberi peraturan validasi form
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

        // jika validasi form sukses maka masukkan data athlete ke db
        if ($this->form_validation->run() == true) {
            date_default_timezone_set("Asia/Jakarta");
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

            // mencari id atlit dari email
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

        // load tampilan
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/addatlet', $data);
        $this->load->view('templates/footer');
    }

    public function addCoach()
    {
        // title and users
        $data['title'] = 'Manage Account';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // membuat peraturan validasi form
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

        // jika validasi user sukses :
        if ($this->form_validation->run() == true) {
            date_default_timezone_set("Asia/Jakarta");
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

        // load tampilan
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

        // set form validation
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        if ($this->form_validation->run() == true) {
            $pass = array(
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            );

            $this->db->where('id', $data['passID']);
            $this->db->update('user', $pass);

            $this->session->set_flashdata('message', '<div class="alert alert-sucess" role="alert">Password has been changed!</div>');
            redirect('admin/manage');
        }

        // load tampilan
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/changepass', $data);
        $this->load->view('templates/footer');
    }

    public function detail($role_id = 0, $id = 0)
    {
        // user and title
        $data['title'] = 'Manage Account';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['d_role'] = (int) $role_id;
        $data['d_id'] = (int) $id;

        if ($data['d_role'] == 1 || $data['d_role'] == 2) {
            // load data dari model untuk halaman admin.
            $this->load->model('Admin_model', 'managePage');
            $data['account'] = $this->managePage->userInfo($data['d_role'], $data['d_id']);
        } else {
            // load data dari model khusus atlet
            $this->load->model('Admin_model', 'managePage');
            $data['account'] = $this->managePage->athleteInfo($data['d_id']);
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
            }
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Account has been updated!</div>');
            redirect('admin/manage');
        }

        // load tampilan
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detail', $data);
        $this->load->view('templates/footer');
    }

    public function gallery()
    {
        // title and user
        $data['title'] = 'Manage Gallery';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['myId'] = $this->session->userdata('id');

        // load data dari model untuk halaman admin.
        $this->load->model('Auth_model', 'gallery');
        $data['athlete'] = $this->gallery->getPictures();

        $this->form_validation->set_rules('title', 'Title', 'required');
        if ($this->form_validation->run() == false) {

            // load tampilan
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/gallery', $data);
            $this->load->view('templates/footer');
        } else {
            $title = $this->input->post('title');
            $date = $this->input->post('date');

            $config['allowed_types'] = 'gif|jpg|png';
            $config['upload_path'] = './assets/img/gallery/';
            $config['max_size']      = '5120';

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '10048';
                $config['upload_path'] = './assets/img/gallery/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $image = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $arr = [
                'id_user' => (int)$data['myId'],
                "alt" => $title,
                "location" => $image,
                "date" => $date
            ];
            $this->db->insert('picture', $arr);

            redirect('admin/gallery');
        }
    }

    public function gallery_delete($id)
    {
        $this->db->delete('picture', array('id_image' => $id));
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Image has been deleted!</div>');
        redirect('admin/gallery');
    }

    public function faq()
    {
        // title and user
        $data['title'] = 'Management FAQ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['myId'] = $this->session->userdata('id');

        // load data dari model untuk halaman admin.
        $this->load->model('Auth_model', 'faq');
        $data['athlete'] = $this->faq->getFAQ();


        // load tampilan
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/faq', $data);
        $this->load->view('templates/footer');
    }
}
