<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class First extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'justone';

		//retrieve Bob Monkhouse's record
		$record = $this->quotes->get(1);
		
		//create model for our view by merging the record found into the data model
		$this->data = array_merge($this->data, $record);

		$this->render();
	}

}
