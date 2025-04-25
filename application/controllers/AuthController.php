
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index(){
        $data['page_title'] = 'Login';
        $this->load->view('admin/index', $data);
    }

    public function login(){
        $this->form_validation->set_rules('useremail', 'Email', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $data['page_title'] = 'Login';
            $this->load->view('admin/index', $data);
        } else {
            // Perform login logic here
            echo "Am ready to login";
            // $useremail = $this->input->post('useremail');
            // $password = $this->input->post('password');
            // Check user credentials in the database (this is just a placeholder, implement your own logic)

            // Redirect to the dashboard or another page after successful login
            // redirect('admin/dashboard');
        }
    }

    public function signup(){
        $data['page_title'] = 'Add Account';
        $this->load->view('admin/signup', $data);
    }

    public function register(){
        $this->form_validation->set_rules('fname', 'First Name', 'required|trim');
        $this->form_validation->set_rules('lname', 'Last Name', 'required|trim');
        $this->form_validation->set_rules('role', 'Role', 'required|trim');
        $this->form_validation->set_rules('useremail', 'Email', 'required|valid_email|trim');
        $this->form_validation->set_rules('mob_number', 'Mobile Number', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|trim');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]|trim');

        if ($this->form_validation->run() == FALSE) {
            $data['page_title'] = 'Signup';
            $this->load->view('admin/signup', $data);
        } else {
            // Perform registration logic here
            echo "Am ready to add a user account";
            // Redirect to the login page or another page after successful registration
            // redirect('auth/login');
        }
    }
}