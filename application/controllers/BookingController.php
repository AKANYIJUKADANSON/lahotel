<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookingController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('Bookings_model');
    }

    public function index(){
        $data = [
            'page_title' => 'Bookings',
            'bookings_list' => $this->Bookings_model->bookings()
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('admin/bookings');
        $this->load->view('templates/footer');
    }

    public function rooms(){

        $data = [
            'page_title' => 'Rooms',
            'rooms_list' => $this->Bookings_model->rooms()
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('admin/rooms');
        $this->load->view('templates/footer');
    }
}