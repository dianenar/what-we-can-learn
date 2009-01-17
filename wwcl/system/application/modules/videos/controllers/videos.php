<?php
    class Videos extends Controller {
    	function Videos()
		{
			parent::Controller();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->model('video_model');
			$this->load->model('nav_model');
			//$this->output->cache(120);
		}
    	function index()
		{
			$data['navigation'] = $this->nav_model->getNavLinks();			
			$data['title'] = 'Video Archive';
			$data['heading'] = 'Videos';    			
			$data['video_list'] = $this->video_model->getRecentVideos();
			$this->load->view('videos_view', $data);
			
    	}
		function video()
		{
			$data['navigation'] = $this->nav_model->getNavLinks();			
			$data['title'] = 'Video Archive';
			$data['heading'] = 'Videos';    			
			$data['video_list'] = $this->video_model->getRecentVideos();
			$data['video_id'] = $this->uri->segment(3);
			$this->load->view('video_view', $data);
		}
		
    }
?>