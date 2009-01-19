<?php
class Video_model extends Model {

	function Video_model()
	{
		parent::Model();
	}
	function getVideoTitle($id)
	{
		$this->db->where('yt_id',$id);
		$query = $this->db->get('videos');
		if ($query->num_rows() > 0){
		   $row = $query->row();	
		   echo $row->title;
		} 				
	}
	function getRecentVideos()
	{
		$this->db->orderby('id');
		$query = $this->db->get('videos');
		if ($query->num_rows() > 0) {
			$output = '<ul>';
			foreach ($query->result() as $video) {				
				$output .= '<li><a href="'. site_url() . 'videos/video/' . $video->yt_id .'">' . $video->title . '</a></li>';			
			}
			$output .= '</ul>';
			return $output;
		} else {
			return '<p>Sorry, no videos were found.</p>';
		}
	}
	function getVideoIdByYtId($id)
	{
		$this->db->where('yt_id',$id);
		$query = $this->db->get('videos');
		if ($query->num_rows() > 0){
		   $row = $query->row();	
		   echo $row->id;
		}
	}
	function getRelatedVideos($video_id)
	{
		$this->db->where('yt_id',$video_id);
		$query = $this->db->get('videos');
		if ($query->num_rows() > 0){
		   $row = $query->row();	
		   $id = $row->id;
		}
		$this->db->where('vid',$id);		
		$query = $this->db->get('videos_related');			
        $output = "<ul>";
		if ($query->num_rows() > 0){
        	foreach ($query->result() as $videos_related) {        		
				$this->db->where('id',$videos_related->rvid);
				$query = $this->db->get('videos');				
				foreach ($query->result() as $video) {				
					$output .= '<li><a href="'. site_url() . 'videos/video/' . $video->yt_id .'">' . $video->title . '</a></li>';			
				}								
			}		
        }			
		$output .= "</ul>";			
		return $output;
	}	
	function getVideosByCategory($cat_id)
	{
		$this->db->select('videos.*, video_categories.*', FALSE);		
		$this->db->where('cid',$cat_id);
		$this->db->from('videos');
		$this->db->join('video_categories','videos.cid = video_categories.id', 'LEFT OUTER');
        $this->db->orderby('videos.id desc');
		$query = $this->db->get();	
		if($query->num_rows() > 0){	   			
			//. $video_by_cat->category
			foreach ($query->result() as $video_by_cat) {
				$output = '<ul class="archive-row cf">';
				$output .= '<li class="featured-video">';
				$output .= '<div class="desc">keywords: ' . $video_by_cat->desc . '</div><img alt="" src="' . base_url() . 'images/videos/cat_'. $video_by_cat->id.'.gif" width="450" height="228" border="0" />';												
				$output .= '</li>';
				$output .= '<li class="more-videos">';
				$output .= '<h3 class="title">' . $video_by_cat->category . '</h3>';
				$output .= '<div class="archive-wrap"><ul>';									
				foreach ($query->result() as $videos_by_cat) {				
					$output .= '<li><a href="'. site_url() . 'videos/video/' . $videos_by_cat->yt_id .'">' . $videos_by_cat->title . '</a></li>';			
				}					
				$output .= '</ul></div>';
				$output .= '</li>';
				$output .= '</ul>';
				$output .= '';

			}
			return $output;			
		} else {
			return '<p>Sorry, no videos by category were found.</p>';
		}	
	}

}

?>