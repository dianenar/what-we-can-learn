<?php
    class Home extends Controller {
    	function Home()
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
			$data['heading'] = 'Welcome!';
			//$data['query'] = $this->db->get('glossary');					
			$this->load->view('home_view', $data);
			
    	}
		function getting_started()
		{
			echo 'test';
		}		
		
    }
?>