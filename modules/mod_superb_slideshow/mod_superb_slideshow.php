<?php
/**
 * Superb Slideshow
 *
 * @package Superb Slideshow
 * @subpackage Superb Slideshow
 * @version   3.4
 * @author    Gopi Ramasamy
 * @copyright Copyright (C) 2010 - 2015 www.gopiplus.com, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 */

// no direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';
$folder	= modSuperbSlideshowHelper::getFolder($params);
$images	= modSuperbSlideshowHelper::getImages($params, $folder);
if (!count($images)) 
{
	echo JText::_('Image not exist in the folder "' . $folder . '"<br><br>');
	return;
}
modSuperbSlideshowHelper::loadScripts($params);
require(JModuleHelper::getLayoutPath('mod_superb_slideshow'));
?>