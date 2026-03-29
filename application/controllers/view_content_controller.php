<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class View_content_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function view_news()
    {

        // Fetch all news from the database
        $data['news'] = $this->db->order_by('created_at', 'DESC')->get('news')->result_array();

        // Load the list view
        $this->load->view('site/pages/news_headline', $data);
    }
}


?>