<?php


/**
 * Table tl_module
 */
$this->loadLanguageFile('tl_screencast');

$GLOBALS['TL_DCA']['tl_module']['palettes']['screencast_list'] = '{title_legend},name,type;{filter_legend},screencast_filter_type;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

$GLOBALS['TL_DCA']['tl_module']['fields']['screencast_filter_type']  = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_module']['screencast_filter_type'],
	'inputType' => 'select',
	'exclude'   => true,
	'sorting'   => true,
	'flag'      => 1,
	'options'   => array('remote', 'local'),
	'reference' => &$GLOBALS['TL_LANG']['tl_screencast'],
	'eval'      => array(
		'includeBlankOption' => true,
		'tl_class'           => 'w50',
	),
	'sql'       => "varchar(10) NOT NULL default ''"
);
