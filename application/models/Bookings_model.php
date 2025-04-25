<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Bookings_model extends CI_Model {

        // load the database library
        public function __construct() {
            $this->load->database();
            $this->load->helper('url');
            $this->load->library('session');
        }

        public function rooms($room_id = null){
            // if the id is not provided then get all the rooms
            if ($room_id == null){
                // $this->where('rooms', array('availability' => 1));
                $query = $this->db->get('rooms');
                return $query->result_array();
            }

            // Get the item where id = ????
            $query = $this->db->get_where('rooms', array('id' => $room_id));
            return $query->row_array();
        }

        public function bookings($booking_id = null){
            // if the id is not provided then get all the rooms
            if ($booking_id == null){
                // $this->where('rooms', array('availability' => 1));
                $query = $this->db->get('bookings');
                return $query->result_array();
            }

            // Get the item where id = ????
            $query = $this->db->get_where('bookings', array('id' => $booking_id));
            return $query->row_array();
        }

    }