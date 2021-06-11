<?php

class makeQuest extends CI_Model
{
	public function submit()
	{
		$db = $this->realms->getRealm(2)->getWorld()->getConnection();
		$querys_end = $db->query("INSERT INTO creature_quest_finisher values (?, ?)", array($this->input->post('end'), $this->input->post('entry')));
		$querys_start = $db->query("INSERT INTO creature_quest_starter values (?, ?)", array($this->input->post('start'), $this->input->post('entry')));                                                                                                                                                                                                                                                                                                                                                                                                                     //      0   1   2  3  4  5  6  7  8                   
		$querys = $db->query("INSERT INTO quests (entry, flags, MinLevel, questlevel, ZoneId, Type, RewXP, bonusarenapoints, RewItemId1, RewItemId2, RewItemId3, RewItemId4, RewItemCount1, RewItemCount2, RewItemCount3, RewItemCount4, Title, Objectives, Details, IncompleteText, CompletionText, ReqKillMobOrGOId1, ReqKillMobOrGOId2, ReqKillMobOrGOId3, ReqKillMobOrGOId4, ReqKillMobOrGOCount1, ReqKillMobOrGOCount2, ReqKillMobOrGOCount3, ReqKillMobOrGOCount4, ReqItemId1, ReqItemId2, ReqItemId3, ReqItemId4, ReqItemCount1, ReqItemCount2, ReqItemCount3, ReqItemCount4) VALUES (?, 255, ?, 0, ?, ?, 7, 0, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", array($this->input->post('entry'), $this->input->post('reqlvl'), $this->input->post('zoneid'), $this->input->post('type'),  $this->input->post('item1'), $this->input->post('item2'), $this->input->post('item3'), $this->input->post('item4'), $this->input->post('amitem1'), $this->input->post('amitem2'), $this->input->post('amitem3'), $this->input->post('amitem4'), $this->input->post('title'), $this->input->post('objects'), $this->input->post('details'), $this->input->post('incomp'), $this->input->post('comp'), $this->input->post('reqnpc1'), $this->input->post('reqnpc2'), $this->input->post('reqnpc3'), $this->input->post('reqnpc4'), $this->input->post('amnpc1'), $this->input->post('amnpc2'), $this->input->post('amnpc3'), $this->input->post('amnpc4'), $this->input->post('reqitem1'), $this->input->post('reqitem2'), $this->input->post('reqitem3'), $this->input->post('reqitem4'), $this->input->post('amitem1'), $this->input->post('amitem2'), $this->input->post('amitem3'), $this->input->post('amitem4')));
		return $querys;
		return $querys_end;
		return $querys_start;
	}
}