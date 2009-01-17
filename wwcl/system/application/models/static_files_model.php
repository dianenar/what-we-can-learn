<?php
/* This file is totally unecessary due to CI base_url() function :P */
	class Static_files_model extends Model {

		function Static_files_model()
		{ 
			parent::Model();
		}
	
		function getStaticFilesHost()
		{						
			$this->db->where('name', 'static_files');
			$query = $this->db->get('globals');
			//$query = $this->db->query('SELECT value FROM globals WHERE name = static_files');
			if ($query->num_rows() > 0) {								
				foreach ($query->result() as $globals) {
					return $globals->value;
				}
			} else {
				return '/';
			}
		}
}
?>