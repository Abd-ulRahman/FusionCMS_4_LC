<?php

class makeWeapon extends CI_Model
{
	public function submit()
	{
		$db = $this->realms->getRealm(2)->getWorld()->getConnection();
		$querys = $db->query("INSERT INTO items (name1, displayid, entry, quality, class, subclass, buyprice, sellprice, InventoryType, itemlevel, requiredlevel, maxcount, ContainerSlots, itemstatscount, stat_type1, stat_value1, stat_type2, stat_value2, stat_type3, stat_value3, stat_type4, stat_value4, stat_type5, stat_value5, stat_type6, stat_value6, stat_type7, stat_value7, stat_type8, stat_value8, stat_type9, stat_value9, stat_type10, stat_value10, dmg_min1, dmg_max1, delay, bonding, page_material, sheathID, socket_color_1, socket_color_2, socket_color_3, socket_bonus) VALUES (?, ?, ?, ?, '2', ?, ?, ?, ?, ?, ?, ?, ?, '10', ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, '1', ?, ?, ?, ?, ?)", array($this->input->post('name'), $this->input->post('display'), $this->input->post('entry'), $this->input->post('quality'),  $this->input->post('type'), $this->input->post('buyprice'), $this->input->post('sellprice'), $this->input->post('equip'), $this->input->post('itemlvl'), $this->input->post('reqlvl'), $this->input->post('maxnr'), $this->input->post('stacks'), $this->input->post('stype1'), $this->input->post('stat1'), $this->input->post('stype2'), $this->input->post('stat2'), $this->input->post('stype3'), $this->input->post('stat3'), $this->input->post('stype4'), $this->input->post('stat4'), $this->input->post('stype5'), $this->input->post('stat5'), $this->input->post('stype6'), $this->input->post('stat6'), $this->input->post('stype7'), $this->input->post('stat7'), $this->input->post('stype8'), $this->input->post('stat8'), $this->input->post('stype9'), $this->input->post('stat9'), $this->input->post('stype10'), $this->input->post('stat10'), $this->input->post('mindmg'), $this->input->post('maxdmg'), $this->input->post('speed'), $this->input->post('binds'), $this->input->post('sheat'), $this->input->post('gem1'), $this->input->post('gem2'), $this->input->post('gem3'), $this->input->post('gembonus')));
		return $querys;
	}
}