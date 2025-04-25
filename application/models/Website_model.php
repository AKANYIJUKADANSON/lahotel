<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Website_model extends CI_Model{

        // Load the database library
        public function __construct(){
            $this->load->database();
            $this->load->helper('url');
            $this->load->library('session');

            // if($this->db->conn_id) {
            //     // Connection is successful
            //     echo "Database connected successfully!";
            // } else {
            //     // Connection failed
            //     echo "Unable to connect to the database!";
            // }
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

        public function menu($menuItemIid = null){
            // if the id is not provided then get all the menu_items
            if ($menuItemIid == null){
                $query = $this->db->get('menu');
                return $query->result_array();
            }

            // Get the item where id = ????
            $query = $this->db->get_where('menu', array('id' => $menuItemIid));
            return $query->row_array();
        }

        public function save_booking($dataToSave){
            
            return $this->db->insert('bookings', $dataToSave);
            
        }
        
        public function posts($post_id = null){
            // if the id is not provided then get all the posts
            if ($post_id == null){
                // get all the posts
                $this->db->order_by('published_on', 'DESC');
                $query = $this->db->get('news');
                
                return $query->result_array();
            }

            // Get the item where id = ????
            $query = $this->db->get_where('news', array('id' => $post_id));
            return $query->row_array();
        }

        public function gallery($photo_id = null){
            // if the id is not provided then get all the photos
            if ($photo_id == null){
                // get all the posts
                $this->db->order_by('taken_on', 'DESC');
                $query = $this->db->get('gallery');
                
                return $query->result_array();
            }

            // Get the item where id = ????
            $query = $this->db->get_where('gallery', array('id' => $photo_id));
            return $query->row_array();
        }
    }