<?php
    class Video extends Controller {
    	function Video()
		{
			parent::Controller();
			$this->load->helper('url');
			$this->load->helper('form');
			//$this->load->model('glossary_model');
			$this->load->model('nav_model');
			//$this->output->cache(120);
		}
    	function index()
		{
			$data['title'] = 'Video Archive';
			$data['heading'] = 'Videos';    		
			$data['extraHeadContent'] = '<script type="text/javascript" src="' . base_url() . 'lib/jquery/jquery.js"></script>';
			//$data['query'] = $this->db->get('glossary');
			//$active = '';
			$data['navigation'] = $this->nav_model->getNavLinks();
			
			$this->load->view('video_view', $data);
			
    	}
		
		
    }
?>