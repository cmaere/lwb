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

class modSuperbSlideshowHelper
{
	public static function loadScripts(&$params)
	{
		$doc = JFactory::getDocument();
		$pts_jquery = $params->get("sbs_jquery","yes");	
		if($pts_jquery == "yes")	
		{
			$doc->addScript(JURI::Root(true).'/modules/mod_superb_slideshow/inc/jquery.min.js');
		}
		$doc->addScript(JURI::Root(true).'/modules/mod_superb_slideshow/inc/superb-slideshow.js');
	}
	
	public static function getImages(&$params, $folder)
	{
		$type1 = "jpg";
		$type2 = "png";
		$type3 = "gif";
		$type4 = "jpeg";

		$files	= array();
		$images	= array();

		if (substr(JPATH_BASE, -1) == '\\')
		{
			$japth = JPATH_BASE;
		}
		else
		{
			$japth = JPATH_BASE . "\\";
		}

		$dir = $japth . $folder;
		$dir = str_replace('/', '\\', $dir); // Line 50
		//if your getting no directory error message. Please comment line 50 and uncomment line 52.
		//$dir = str_replace('\\', '/', $dir);  // Line 52

		// check if directory exists
		if (is_dir($dir))
		{
			if ($handle = opendir($dir)) {
				while (false !== ($file = readdir($handle))) {
					if ($file != '.' && $file != '..' && $file != 'CVS' && $file != 'index.html') {
						$files[] = $file;
					}
				}
			}
			closedir($handle);

			$i = 0;
			foreach ($files as $img)
			{
				if (!is_dir($dir . "\\". $img))
				{
					if (preg_match('/'.$type1.'/', $img) || preg_match('/'.$type2.'/', $img) || preg_match('/'.$type3.'/', $img) || preg_match('/'.$type4.'/', $img)) 
					{
						$images[$i] = new stdClass;		
						$images[$i]->name	= $img;
						$images[$i]->folder	= $folder;
						$i++;
					}
				}
			}
		}
		else
		{
			echo JText::_('Image not exist in the folder "' . $dir . '"<br><br>');
		}
		return $images;
	}

	static function getFolder(&$params)
	{
		$folder	= $params->get('sbs_imgfolder');

		$LiveSite	= JURI::base();

		// if folder includes livesite info, remove
		if (JString::strpos($folder, $LiveSite) === 0) {
			$folder = str_replace($LiveSite, '', $folder);
		}
		// if folder includes absolute path, remove
		if (JString::strpos($folder, JPATH_SITE) === 0) {
			$folder= str_replace(JPATH_BASE, '', $folder);
		}
		
		return $folder;
	}
}