<?php

class ModuleScreencastList extends Module
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_screencast_list';

	/**
	 * Compile the current element
	 */
	protected function compile()
	{
		/** @var \Contao\Database\Result $rs */
		$rs = Database::getInstance()
			->query('SELECT * FROM tl_screencast ORDER BY title');

		$this->Template->screencasts = $rs->fetchAllAssoc();
	}
}
