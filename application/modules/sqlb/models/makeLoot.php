<?php

class Makeloot extends CI_Model
{
	public function submit()
	{
		$db = $this->realms->getRealm(1)->getWorld()->getConnection();
		$querys = $db->query("INSERT INTO loot_creatures (entryid, itemid, normal10percentchance, normal25percentchance, heroic10percentchance, heroic25percentchance, mincount, maxcount) VALUES (?, ?, ?, ?, ?, ?, ?, ?)", array($this->input->post('entry'), $this->input->post('item'), $this->input->post('chance'), $this->input->post('chance'), $this->input->post('chance'), $this->input->post('chance'), $this->input->post('minc'), $this->input->post('maxc')));
		return $querys;
	}
}