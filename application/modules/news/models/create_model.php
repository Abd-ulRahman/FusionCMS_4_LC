<?php

class Create_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function insertMessage($headline, $content, $author_id)
	{
		$this->db->query("INSERT INTO articles (`headline`, `content`, `timestamp`, `author_id`, `avatar`) VALUES (?, ?, ?, ?, ?)", array(  $headline, $content, time(),$author_id, $this->user->getAvatar()));
	}
}

function sortIt($a, $b)
{
	return strlen($a) - strlen($b);
}