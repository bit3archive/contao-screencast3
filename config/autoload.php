<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package Screencast
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'ModuleScreencastList' => 'system/modules/screencast/modules/ModuleScreencastList.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_screencast_list' => 'system/modules/screencast/templates',
));
