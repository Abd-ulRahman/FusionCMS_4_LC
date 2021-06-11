<?php

class KillStreak2 extends MX_Controller
{
	public function __construct()
	{

		$this->load->model('KillStreak_TopModel');
	}

	public function index()
	{
		$this->load->config('KillStreak_Config');

		$rows = $this->KillStreak_TopModel->get();
		if($rows > 0)
		{
			foreach($rows as $key => $value)
			{
				$rows[$key]['realmid'] = $this->config->item('cfg_realmid');
			}
		}
		$data = array(
			"rows" => $rows
		);

		$content = $this->template->loadPage("KillStreak_TopView.tpl", $data);

		//it will support multiple realms in future

		$box = $this->template->box("Top {$this->config->item('maxResults')} [{$this->config->item('cfg_realmname')}] Kill Streak ", $content);

		$this->template->view($box, "modules/KillStreak2/css/killstreak.css");
	}
}