<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebsiteController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->library('email');
		$this->load->model('Website_model');
		
	}

	public function index()
	{
		$model = new Website_model(); 
		// Get rooms and menu
		$data = [
			'rooms_list' => $model->rooms(),
			'menu_items' => $model->menu(),
			'posts_list' => $model->posts(),
			'photo_list' => $model->gallery()
		];

		$this->load->view('inc/site_header');
		$this->load->view('inc/site_navbar');
		$this->load->view('home_page', $data);
		$this->load->view('inc/site_footer');
	}

	/**
	 * -----------------------------------------------------------
	 * ----------------- ROOMS -----------------------------------
	 * -----------------------------------------------------------
	 */
	public function rooms()
	{
		// Get rooms
		$data = [
			'rooms_list' => $this->Website_model->rooms(),
		];

		$this->load->view('inc/site_header');
		$this->load->view('inc/site_navbar');
		$this->load->view('rooms', $data);
		$this->load->view('inc/site_footer');
	}

	public function single_room($room_id)
	{
		$data = [
			'room_details' => $this->Website_model->rooms($room_id),
		];

		$this->load->view('inc/site_header');
		$this->load->view('inc/site_navbar');
		$this->load->view('rooms-single', $data);
		$this->load->view('inc/site_footer');
	}

	/**
	 * -----------------------------------------------------------
	 * ----------------- BOOKING ---------------------------------
	 * -----------------------------------------------------------
	 */
	public function booking($room_id)
	{
		// Get rooms
		$data = [
			'room_details' => $this->Website_model->rooms($room_id),
			'page_title' => 'Booking',
		];

		// $this->load->view('templates/header');
		// $this->load->view('inc/site_header');
		$this->load->view('booking', $data);
	}

	public function book()
	{
		// TODO If the use changes the number of rooms, total price should also change
		// TODO Make sure a user enters a date grater than the day they are booking
		// Create a token for each booking (Hashed ones)

		// Get and validate data from customer
		$this->form_validation->set_rules('useremail', 'Email', array('required', 'valid_email'));
		$this->form_validation->set_rules('fname', 'first name', 'required');
		$this->form_validation->set_rules('lname', 'Last name', 'required');
		$this->form_validation->set_rules('mob_number', 'Mobile number', 'required');
		$this->form_validation->set_rules('country', 'Country', 'required');
		$this->form_validation->set_rules('num_of_rooms', 'Number of rooms', 'required');
		$this->form_validation->set_rules('checkin', 'Check-in date', 'required');
		$this->form_validation->set_rules('checkout', 'Check-out date', 'required');

		/**
		 * if the validation is not done the display the error of validation failure on the form fields
		 * if the validation is okay, then save the data to the database
		 */
		if ($this->form_validation->run() === FALSE) {
			// Redirect and show errors
			$this->load->view('booking');
		} else {
			$bookingData = [
				'first_name' => $this->input->post('fname'),
				'last_name' => $this->input->post('lname'),
				'email' => $this->input->post('useremail'),
				'country' => $this->input->post('country'),
				'phone_number' => $this->input->post('mob_number'),
				'room_type' => $this->input->post('room_type'),
				'num_of_people' => $this->input->post('num_of_people'),
				'num_of_rooms' => $this->input->post('num_of_rooms'),
				'charge' => $this->input->post('price'),
				'check_in' => $this->input->post('checkin'),
				'check_out' => $this->input->post('checkout'),
				'date_created' => date('Y-m-d'),
			];


			/**
			 * -------------------------------------------------------------------
			 * ---------------------- Save the data to database ------------------
			 * -------------------------------------------------------------------
			*/
			$model = new Website_model();
			$save_status = $model->save_booking($bookingData);

			if ($save_status == TRUE) {

				/**
				 * -------------------------------------------------------------------
				 * ------------------------ Send email to the user -------------------
				 * -------------------------------------------------------------------
				*/				

				$sendTo = $this->input->post('useremail');
				$subject = $this->input->post('subject');
				$message = $this->input->post('message');
	
				$this->load->library('email');
	
				$config = array(
					'protocal' => 'mail',
					'smtp_host' => 'mail.your domain',
					'smtp_port' => 465,
					'smpt_timeout' => 30,
					'smtp_crypto' => 'ssl',
					'smtp_user' => 'ure useremail',
					'smtp_pass' => 'ure user password',
					'mailtype' => 'html',
					'charset' => 'iso-8859-1',
					'wordwrap' => true,
				);
	
				$this->load->library('email', $config);
				$this->email->set_newline("\r\n"); 
	
				$this->email->from('email sending');
				$this->email->to($sendTo);
				$this->email->subject($subject);
				// $this->email->message($message);
				$this->email->message($message);
				
				if ($this->email->send()) {
					$alert = [
						'status' => 'Booking was made successfully and details sent to '. $sendTo,
						'color' => 'success',
						'icon' => 'exclamation-triangle-fill',
						'page_title' => 'Subscribe'
					];
	
					$this->session->set_flashdata($alert);
	
					// Head back to the home page
							// Get rooms
					// $data = [
					// 	'rooms_list' => $this->WebsiteModel->rooms(),
					// 	'menu_items' => $this->WebsiteModel->menu(),
					// ];

					// $this->load->view('inc/site_header');
					// $this->load->view('inc/site_navbar');
					// $this->load->view('home_page', $data);
					// $this->load->view('inc/site_footer');

					$this->load->view('subscribe');
				} else {
					$alert = [
						'status' => 'Ooops, something went wrong and booking was not made!, please try again',
						'color' => 'danger',
						'icon' => 'exclamation-triangle-fill',
						'page_title' => 'Contact'
					];
					$this->session->set_flashdata($alert);
					$this->load->view('subscribe');
	
					print_r($this->email->print_debugger());
				}
		
				
			}
		}
	}

	/**
	 * -----------------------------------------------------------
	 * ----------------- Contacts --------------------------------
	 * -----------------------------------------------------------
	 */
	public function contacts()
	{
		$data = ['page_title' => 'Contact'];

		$this->load->view('inc/site_header', $data);
		$this->load->view('inc/site_navbar');
		$this->load->view('contact');
		$this->load->view('inc/site_footer');
	}

	/**
	 * -----------------------------------------------------------
	 * ----------------- EMAILING --------------------------------
	 * -----------------------------------------------------------
	 */
	public function yimail()
	{
		$this->load->view('email');
	}

    public function send_mail()
	{
		// Collect & validate data from the form
		$this->form_validation->set_rules('useremail', 'Email', array('required', 'valid_email'));
		$this->form_validation->set_rules('subject', 'Subject', 'required');
		$this->form_validation->set_rules('message', 'Message', 'required');

		// Check if the validation is successful
		if ($this->form_validation->run() === FALSE)
		{
			// Redirect and show errors
			$this->load->view('subscribe');
		}
		else{

			$sendTo = $this->input->post('useremail');
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');

			$this->load->library('email');

			$config = array(
				'protocal' => 'mail',
				'smtp_host' => 'mail.khosaleague.com',
				'smtp_port' => 465,
				'smpt_timeout' => 30,
				'smtp_crypto' => 'ssl',
				'smtp_user' => 'marketing@khosaleague.com',
				'smtp_pass' => 'Marketing@Khosa1',
				'mailtype' => 'html',
				'charset' => 'iso-8859-1',
				'wordwrap' => true,
			);

			$this->load->library('email', $config);
			$this->email->set_newline("\r\n"); 

			$this->email->from('marketing@khosaleague.com');
			$this->email->to($sendTo);
			$this->email->subject($subject);
			// $this->email->message($message);
			$this->email->message($message);
			
			if ($this->email->send()) {
				$alert = [
					'status' => 'Email was sent successfully to '. $sendTo,
					'color' => 'success',
					'icon' => 'exclamation-triangle-fill',
					'page_title' => 'Subscribe'
				];

				$this->session->set_flashdata($alert);

				$this->load->view('subscribe');
			} else {
				$alert = [
					'status' => 'Email was not sent to '. $sendTo. ', please try again',
					'color' => 'danger',
					'icon' => 'exclamation-triangle-fill',
					'page_title' => 'Contact'
				];
				$this->session->set_flashdata($alert);
				$this->load->view('subscribe');

				print_r($this->email->print_debugger());
			}

		}
	}

	/**
	 * -----------------------------------------------------------
	 * ----------------- BLOG ------------------------------------
	 * -----------------------------------------------------------
	 */
	public function blog()
	{
		$data = [
			'posts_list' => $this->Website_model->posts(),
			'page_title' => 'Blog posts',
		];

		$this->load->view('inc/site_header');
		$this->load->view('inc/site_navbar');
		$this->load->view('blog', $data);
		$this->load->view('inc/site_footer');
	}

	public function single_post($post_id)
	{
		$data = [
			'post_details' => $this->Website_model->posts($post_id),
			'page_title' => 'Blog posts',
		];

		$this->load->view('inc/site_header');
		$this->load->view('inc/site_navbar');
		$this->load->view('single-post', $data);
		$this->load->view('inc/site_footer');
	}

	/**
	 * -----------------------------------------------------------
	 * ----------------- MENU ------------------------------------
	 * -----------------------------------------------------------
	 */
	 public function menu()
	 {
		 $data = [
			 'menu_items' => $this->Website_model->menu(),
			 'page_title' => 'Menu',
		 ];
 
		 $this->load->view('inc/site_header');
		 $this->load->view('inc/site_navbar');
		 $this->load->view('menu', $data);
		 $this->load->view('inc/site_footer');
	 }
 
	 public function menu_item($menuItemId)
	 {
		 $data = [
			 'post_details' => $this->Website_model->menu($menuItemId),
			 'page_title' => 'Menu',
		 ];
 
		 $this->load->view('inc/site_header');
		 $this->load->view('inc/site_navbar');
		 $this->load->view('menu-item', $data);
		 $this->load->view('inc/site_footer');
	 }

	/**
	 * -----------------------------------------------------------
	 * ----------------- GALLERY ------------------------------------
	 * -----------------------------------------------------------
	 */
	 public function gallery(){
		$data= [
			'photo_list' => $this->Website_model->gallery(),
			'page_title' => 'Gallery'
		];

		// $photo_list = $this->Website_model->gallery();

		// var_dump($this->Website_model->gallery());
		$this->load->view('inc/site_header');
		$this->load->view('inc/site_navbar');
		$this->load->view('gallery', $data);
		$this->load->view('inc/site_footer');

	 }
	 
}
