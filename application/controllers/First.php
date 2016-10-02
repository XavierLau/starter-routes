<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class First extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Bob Monkhouse quote
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

	/**
		* Mark Russell quote
		*/
		public function gimme($param)
		{
			// this is the view we want shown
			$this->data['pagebody'] = 'justone';

			$record = $this->quotes->get($param);

			//create model for our view by merging the record found int the data model
			$this->data = array_merge($this->data, $record);

			$this->render();
		}
}
