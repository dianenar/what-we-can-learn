<?php
	class Nav_model extends Model {

		function Nav_model()
		{ 
			parent::Model();
		}
	
		function getNavLinks()
		{			
			$this->db->orderby('item');
			$query = $this->db->get('navigation');
			if ($query->num_rows() > 0) {
				$output = '<ul>';
				foreach ($query->result() as $nav) {
					$output .= '<li><a href="index.php/' . $nav->link . '">' . $nav->item . '</a></li>';									
				}
				$output .= '</ul>';
				return $output;
			} else {
				return '<p>Sorry, no results returned.</p>';
			}
		}
}
?>