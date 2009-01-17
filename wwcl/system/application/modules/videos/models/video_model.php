<?php
class Video_model extends Model {

	function Video_model()
	{
		parent::Model();
	}

	function getRecentVideos ()
	{
		$this->db->orderby('id');
		$query = $this->db->get('videos');
		if ($query->num_rows() > 0) {
			$output = '<ul>';
			foreach ($query->result() as $video) {				
				$output .= '<li><a href="'. site_url() . '/videos/video/' . $video->yt_id .'">' . $video->title . '</a></li>';			
			}
			$output .= '</ul>';
			return $output;
		} else {
			return '<p>Sorry, no videos were found.</p>';
		}
	}

}
?>