<?php
	class Nav_model extends Model {

		function Nav_model()
		{ 
			parent::Model();
		}
	
		function getNavLinks()
		{			
			$this->db->orderby('order');
			$query = $this->db->get('navigation');
			if ($query->num_rows() > 0) {
				$output = '<div id="nav-wrap"><ul id="nav" class="cf">';
				foreach ($query->result() as $nav) {
					$output .= '<li><a href="' . site_url() . '/' . $nav->link . '">' . $nav->item . '</a></li>';									
				}
				$output .= '</ul></div>';
				return $output;
			} else {
				return '<p>Sorry, no results returned.</p>';
			}
		}
}
?>