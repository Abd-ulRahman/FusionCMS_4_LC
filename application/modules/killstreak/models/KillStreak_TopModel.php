<?php

class KillStreak_TopModel extends CI_Model
{
	public function get()
	{
		$query = $this->db->query("SELECT * FROM ".$this->config->item('cfg_chardb').".characters WHERE killsLifeTime >=1 ORDER BY killsLifeTime DESC LIMIT ".$this->config->item('maxResults')."");
	
		if($query->num_rows())
		{
			$row = $query->result_array();

			return $row;
		}
		else
		{
			return false;
		}
	}
}