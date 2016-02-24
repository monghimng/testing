<?php
/**
* @package   JoomLead
* @author    JoomLead http://www.joomlead.com
* @copyright Copyright (C) JoomLead
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// get warp
$warp = require(__DIR__.'/warp.php');

// load main theme file, located in /layouts/theme.php
echo $warp['template']->render('theme');
