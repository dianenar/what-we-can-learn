<?php
    class Glossary extends Controller {
    	function Glossary()
		{
			parent::Controller();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->model('glossary_model');
			$this->load->model('nav_model');
			//$this->output->cache(120);
		}
    	function index()
		{
			$data['title'] = 'Glossary';
			$data['heading'] = 'God, Source energy, All that IS, is the essence of who you are.';
    		$data['nav'] = array('Getting Started', 'Glossary', 'Community');
			$data['extraHeadContent'] = '<script type="text/javascript" src="' . base_url() . 'lib/jquery/jquery.js"></script>';
			$data['query'] = $this->db->get('glossary');
			$active = '';
			$data['navigation'] = $this->nav_model->getNavLinks();
			
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
			$data['title'] = "Glossary Search Results";
			$glossary_term = $this->input->post('glossary_term');
			$data['search_results'] = $this->glossary_model->getSearchResults($glossary_term);
			$this->load->view('glossary_search', $data);
		}		
		
    }
?>