<?php

/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['content']['screencast'] = array(
	'tables' => array('tl_screencast'),
	'icon'   => 'system/modules/screencast/assets/images/screencast.png'
);

/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['screencast'] = array
(
	'screencast_list'     => 'ModuleScreencastList',
);
