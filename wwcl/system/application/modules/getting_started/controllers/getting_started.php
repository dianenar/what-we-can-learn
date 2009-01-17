<?php
    class Getting_started extends Controller {
    	function Getting_started()
		{
			parent::Controller();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->model('nav_model');
		}
    	function index()
		{
			$data['navigation'] = $this->nav_model->getNavLinks();
			$data['title'] = 'What We Can Learn';
			$data['heading'] = 'Getting Started';
			//$data['query'] = $this->db->get('glossary');					
			$this->load->view('getting_started_view', $data);
			
    	}				
    }
?>