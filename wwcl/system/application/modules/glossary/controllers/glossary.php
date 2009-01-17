<?php
    class Glossary extends Controller {
    	function Glossary()
		{
			parent::Controller();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->model('glossary_model');
			$this->load->model('nav_model');
			$this->load->model('static_files_model');
			//$this->output->cache(120);
		}
    	function index()
		{
			$data['navigation'] = $this->nav_model->getNavLinks();
			$data['title'] = 'Glossary';
			$data['heading'] = 'God, Source energy, All that IS, is the essence of who you are.';
    		$data['nav'] = array('Getting Started', 'Glossary', 'Community');
			$data['query'] = $this->db->get('glossary');
			
			
			$this->load->view('glossary_view', $data);
			
    	}
	

		function ajaxsearch()
		{
			$glossary_term = $this->input->post('glossary_term');
			$description = $this->input->post('description');
			echo $this->function_model->getSearchResults($glossary_term, $description);
		}

		function search()
		{
			$data['navigation'] = $this->nav_model->getNavLinks();
			$data['title'] = "Glossary Search Results";
			$glossary_term = $this->input->post('glossary_term');
			$data['search_results'] = $this->glossary_model->getSearchResults($glossary_term);
			$this->load->view('glossary_search_view', $data);
		}
		function getting_started()
		{
			echo 'test';
		}		
		
    }
?>