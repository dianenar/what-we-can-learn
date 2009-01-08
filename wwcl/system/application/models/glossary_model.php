<?php
class Glossary_model extends Model {

	function Glossary_model()
	{
		parent::Model();
	}

	function getSearchResults ($glossary_term)
	{
		$this->db->like('term', $glossary_term);
		$this->db->orderby('term');
		$query = $this->db->get('glossary');
		if ($query->num_rows() > 0) {
			$output = '<dl>';
			foreach ($query->result() as $glossary_info) {				
				$output .= '<dt>' . $glossary_info->term . '</dt>';
				$output .= '<dd>' . $glossary_info->definition . '</dd>';			
			}
			$output .= '</dl>';
			return $output;
		} else {
			return '<p>Sorry, no results were found.</p>';
		}
	}

}
?>