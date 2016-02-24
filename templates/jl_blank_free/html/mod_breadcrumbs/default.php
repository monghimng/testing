<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_breadcrumbs
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */


 // no direct access
 defined('_JEXEC') or die;

 ?>
 <ul class="uk-breadcrumb">
	 <?php if ($params->get('showHere', 1)) : ?>
		 <li class="active">
			 <?php echo JText::_('MOD_BREADCRUMBS_HERE'); ?>&#160;
		 </li>
<?php endif; ?>
		 <?php

 	if (!$params->get('showLast', 1)) array_pop($list);

 	$count = count($list);

 	for ($i = 0; $i < $count; $i ++) {

 		// clean subtitle from breadcrumb
 		if ($pos = strpos($list[$i]->name, '||')) {
 			$name = trim(substr($list[$i]->name, 0, $pos));
 		} else {
 			$name = $list[$i]->name;
 		}

 		// mark-up last item as strong
 		if ($i < $count-1) {
 			if (!empty($list[$i]->link)) {
 				echo '<li><a href="'.$list[$i]->link.'">'.$name.'</a></li>';
 			} else {
 				echo '<li><span>'.$name.'</span></li>';
 			}
 		} else {
 			echo '<li class="uk-active"><span>'.$name.'</span></li>';
 		}

 	}

 ?></ul>
