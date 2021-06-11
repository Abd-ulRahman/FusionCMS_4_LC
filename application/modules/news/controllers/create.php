<?php

class Create extends MX_Controller
{
	private $removeTools;

	/**
	 * Load model and make sure we're logged in
	 */
	public function __construct()
	{
		parent::__construct();
		
		// Load our model
		$this->load->model('create_model');
		$this->load->library('fusioneditor');

		// Make sure they are logged in
		//$this->user->userArea();

		requirePermission("view");
		requirePermission("compose");

		$this->removeTools = array("size", "image", "color", "left", "center", "right", "html");
	}
	
	/**
	 * Display the compose page
	 * @param String $username
	 */
	public function index()
	{
		// Pass some language strings to the client
		clientLang("article_limit", "news");
		clientLang("headline_limit", "news");
		clientLang("sent", "news");
		clientLang("the_inbox", "news");
		clientLang("error", "news");
		clientLang("headline_cant_be_empty", "news");

		$this->template->settitle(lang("compose", "news"));
		
		// Load the create view
		$data = array(
					"editor" => $this->fusioneditor->create("pm_editor", $this->removeTools),
					"him" => $this->user->getId(),
					"url" => $this->template->page_url
				);

		$content = $this->template->loadPage("create.tpl", $data);

		// Define our box values
		$page_data = array(
				"module" => "default", 
				"headline" => "<span style='cursor:pointer;' onClick='window.location=\"".$this->template->page_url."news\"'>".lang("articles", "news")."</span> &rarr; ".lang("compose", "news"), 
				"content" => $content
			);

		// Load the box
		$page = $this->template->loadPage("page.tpl", $page_data);
		
		// View our content
		$this->template->view($page, "modules/news/css/create.css", "modules/news/js/create.js");
	}

	/**
	 * Add the article to the database
	 * @param String $username
	 */
	public function submit()
	{
		$content = $this->input->post('content');
		$headline = $this->input->post('headline');
		$author_id = $this->user->getId();

		// article must be set and more than 3 characters
		if(!$content || strlen($content) <= 3)
		{
			die("content length");
		}
		
		// Compile it into BBcode
		$content = $this->fusioneditor->compile($content, $this->removeTools);

		// Add it to the database
		$this->create_model->insertMessage($headline, $content, $author_id);

		$this->plugins->onCreate($headline, $content, $author_id);

		// Clear the sender and receiver's PM cache
		$this->cache->delete('news/'.$author_id."_*");

		die('sent');
	}
}