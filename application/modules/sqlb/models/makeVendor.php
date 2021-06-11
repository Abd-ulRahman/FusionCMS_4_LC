<?php

class makeVendor extends CI_Model
{
	public function submit()
	{
		$db = $this->realms->getRealm(1)->getWorld()->getConnection();
		$querys = $db->query("INSERT INTO vendors (entry, item, amount, extended_cost) VALUES (?, ?, '1', ?)", array($this->input->post('entry'), $this->input->post('item'), $this->input->post('cost')));
		return $querys;
	}
}