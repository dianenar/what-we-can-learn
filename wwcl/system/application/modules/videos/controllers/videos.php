<?php
    class Videos extends Controller {
    	function Videos()
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
			$data['navigation'] = $this->nav_model->getNavLinks();
			
			$this->load->view('videos_view', $data);
			
    	}
		function video()
		{
			$data['title'] = 'Video Archive';
			$data['heading'] = 'Videos';    			
			$data['navigation'] = $this->nav_model->getNavLinks();
			$data['video_id'] = $this->uri->segment(3);
			$this->load->view('video_view', $data);
		}
		
    }
?>