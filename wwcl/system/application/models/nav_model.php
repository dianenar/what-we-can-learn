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
				$output = '<div id="nav-wrap"><ul id="nav2" class="cf">';
				foreach ($query->result() as $nav) {
					if ($this->uri->segment(1) == strtolower($nav->link)){
						$navState = "active";
					} else {
						$navState = "";
					}
					if($nav->ext == 0){
						$base_path = site_url() . "/";
					} else {
						$base_path = "";
					}
					$output .= '<li><a class="'. $navState . '" href="' . $base_path . $nav->link . '">' . $nav->item . '</a></li>';									
				}
				$output .= '<span id="nav_move"></span></ul></div>';
				return $output;
			} else {
				return '<p>Sorry, no results returned.</p>';
			}
		}
}
?>


 
</ul>
