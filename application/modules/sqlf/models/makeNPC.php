<?php

class makeNpc extends CI_Model
{
	public function submit()
	{
		$db = $this->realms->getRealm(2)->getWorld()->getConnection();
		$entry = $this->input->post('entry');

		$query = $db->query("INSERT INTO creature_names (entry, name, subname, rank, type, family, male_displayid) 
		VALUES (? ,? ,? ,? ,? ,? ,? )", array($entry, $this->input->post('name'), $this->input->post('subname'), $this->input->post('rank'), $this->input->post('type'), $this->input->post('family'), $this->input->post('display')));

		$query1 = $db->query("INSERT INTO creature_proto (entry, minlevel, maxlevel, faction, minhealth, maxhealth, mana, scale, attacktime, mindamage, maxdamage, boss, money, armor) 
		VALUES (? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,?)", array($entry, $this->input->post('minlvl'), $this->input->post('maxlvl'), $this->input->post('faction'), $this->input->post('health'), $this->input->post('health'), $this->input->post('mana'), $this->input->post('scale'), $this->input->post('Speed'), $this->input->post('mindmg'), $this->input->post('maxdmg'), $this->input->post('type'), $this->input->post('drop'), $this->input->post('armor')));

		return array($query , $query1);
	}
}