<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

if($task == "edit" || $layout == "form" )
{
	$fullWidth = 1;
}
else
{
	$fullWidth = 0;
}

// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');

?>
      
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
 <!--Developed by Pooranee Inspirations (Pvt) Ltd--> 
<meta http-equiv="X-UA-Compatible" content="IE=8" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="Lilongwe Water Board" />
  <meta name="generator" content="Joomla! - Open Source Content Management" />
  <title>Liongwe Water Board</title>
  <link href="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/index9ed2.html?lang=en" rel="canonical" />
  <link href="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/indexfa0a.php?format=feed&amp;type=rss&amp;lang=en" rel="alternate" type="application/rss+xml" title="RSS 2.0" />
  <link href="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/index0b45.php?format=feed&amp;type=atom&amp;lang=en" rel="alternate" type="application/atom+xml" title="Atom 1.0" />
  <link href="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/templates/poora_temp/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  <link href="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/index62f0.php?option=com_search&amp;format=opensearch&amp;lang=en" rel="search" title="Search National Water Supply and Drainage Board" type="application/opensearchdescription+xml" />
  <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/plugins/system/osolcaptcha/osolCaptcha/captchaStyle.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/plugins/system/rokbox/assets/styles/rokbox.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/templates/poora_temp/css/template.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/templates/poora_temp/css/slimmenu.css" type="text/css" media="screen,projection" />
  <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/templates/poora_temp/css/poora.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/templates/poora_temp/css/responsive.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/modules/mod_lofarticlescroller/assets/style.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/media/yendifvideoshare/assets/site/css/yendifvideoshare.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/media/yendifvideoshare/player/yendifplayer.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/http://fonts.googleapis.com/css?family=Merriweather+Sans" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/media/com_uniterevolution/assets/rs-plugin/css/settings.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/media/com_uniterevolution/assets/rs-plugin/css/captions.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/modules/mod_artnewsticker/css/style.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/modules/mod_maximenuck/themes/css3megamenu/css/maximenuck58d3.css?monid=maximenuck" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/modules/mod_maximenuck/templatelayers/beez3-position1.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/media/mod_languages/css/template.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/media/mod_falang/css/template.css" type="text/css" />
  <style type="text/css">
@media only screen and (max-width : 1024px) {
	div.yendifVideoShare.yendifResponsive div.yendifGallery {
    	        width:100%;
		margin:0;
		padding:0;
	}

	div.yendifVideoShare.yendifResponsive div.yendifGallery .clear {
		clear:none;
		display:none;
	}
	
	div.yendifVideoShare.yendifResponsive div.yendifGallery a.yendifItem {
		display:inline-block;
		float:none;
		width:24% !important;
		margin:0;
		padding:0;
	}
	
	div.yendifVideoShare.yendifResponsive div.yendifGallery a.yendifItem .yendifItemWrapper {
		margin:7px;
		padding:0;
	}
	
	div.yendifVideoShare.yendifResponsive div.yendifGallery a.yendifItem .yendifThumb {
		width:100% !important;
		height:0 !important;
		padding-top:56.25% !important;
	}
}

@media only screen and (max-width : 768px) {
	div.yendifVideoShare.yendifResponsive div.yendifGallery {
    	width:100%;
		margin:0;
		padding:0;
	}
	
    div.yendifVideoShare.yendifResponsive div.yendifGallery .clear {
		clear:none;
		display:none;
	}
	
	div.yendifVideoShare.yendifResponsive div.yendifGallery a.yendifItem {
		display:inline-block;
		float:none;
		width:32.3% !important;
		margin:0;
		padding:0;
	}	
	
	div.yendifVideoShare.yendifResponsive div.yendifGallery a.yendifItem .yendifItemWrapper {
		margin:7px;
		padding:0;
	}
	
	div.yendifVideoShare.yendifResponsive div.yendifGallery a.yendifItem .yendifThumb {
		width:100% !important;
		height:0 !important;
		padding-top:56.25% !important;
	}
	
	div.yendifVideoShare.yendifResponsive div.yendifVideoShare .no-tablet {
		display:none;
	}

	div.yendifVideoShare.yendifResponsive div.yendifVideoShare table td.yendifKey {
		width:120px !important;
	}
	
	div.yendifVideoShare.yendifResponsive div.yendifVideoShare input[type="file"],
	div.yendifVideoShare.yendifResponsive div.yendifVideoShare input[type="text"] {
		margin:3px 0px;
	}
	
	div.yendifVideoShare.yendifResponsive div.yendifVideoShare input,
	div.yendifVideoShare.yendifResponsive div.yendifVideoShare textarea {
		max-width:250px !important;
	}	
}

@media only screen and (max-width : 480px) {	
	div.yendifVideoShare.yendifResponsive div.yendifGallery {
    	width:100%;
		margin:0;
		padding:0;
	}
	
	div.yendifVideoShare.yendifResponsive div.yendifGallery .clear {
		clear:none;
		display:none;
	}
	
	div.yendifVideoShare.yendifResponsive div.yendifGallery a.yendifItem {
		display:inline-block;
		float:none;
		width:49% !important;
		margin:0;
		padding:0;
	}	
	
	div.yendifVideoShare.yendifResponsive div.yendifGallery a.yendifItem .yendifItemWrapper {
		margin:7px;
		padding:0;
	}
	
	div.yendifVideoShare.yendifResponsive div.yendifGallery a.yendifItem .yendifThumb {
		width:100% !important;
		height:0 !important;
		padding-top:56.25% !important;
	}
	
	div.yendifVideoShare.yendifResponsive div.yendifVideoShare .no-mobile {
		display:none;
	}

       .yendifNoPerm span.yendifNoPermContent {
		font-size:14px;
	}
}

@media only screen and (max-width : 320px) {
	div.yendifVideoShare.yendifResponsive div.yendifGallery {
    	width:100%;
		margin:0;
		padding:0;
	}
	
    div.yendifVideoShare.yendifResponsive div.yendifGallery .clear {
		clear:none;
		display:none;
	}
	
	div.yendifVideoShare.yendifResponsive div.yendifGallery a.yendifItem {
		float:none;
		display:inline-block;
		width:99% !important;
		margin:0;
		padding:0;
	}
	
	div.yendifVideoShare.yendifResponsive div.yendifGallery a.yendifItem .yendifItemWrapper {
		margin:7px;
		padding:0;
	}
	
	div.yendifVideoShare.yendifResponsive div.yendifGallery a.yendifItem .yendifThumb {
		width:100% !important;
		height:0 !important;
		padding-top:56.25% !important;
	}

       .yendifNoPerm span.yendifNoPermContent {
		font-size:14px;
	}
}
div#maximenuck ul.maximenuck li.maximenuck.item287.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item287.level2{ padding-top: 10px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;margin-top: 0px !important;margin-right: 0px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item103.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item103.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 15px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item104.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item104.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 15px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item106.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item106.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 15px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item105.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item105.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 15px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item319.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item319.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 1px !important;padding-left: 0px !important;margin-top: 12px !important;margin-right: 0px !important;margin-bottom: 5px !important;margin-left: 4px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item264.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item264.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 0px !important;margin-bottom: 10px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item320.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item320.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;margin-top: 7px !important;margin-right: 0px !important;margin-bottom: 7px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item265.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item265.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 6px !important;padding-left: 0px !important;margin-top: 7px !important;margin-right: 0px !important;margin-bottom: 7px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item133.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item133.level2{ padding-top: 10px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 15px !important;margin-top: 0px !important;margin-right: 0px !important;margin-bottom: 1px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item135.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item135.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 18px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item165.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item165.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 18px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item167.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item167.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 18px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item169.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item169.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 18px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item171.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item171.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 18px !important;margin-bottom: 0px !important;margin-left: 8px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item173.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item173.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 18px !important;margin-bottom: 0px !important;margin-left: 8px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item175.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item175.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 18px !important;margin-bottom: 0px !important;margin-left: 8px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item136.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item136.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 18px !important;margin-bottom: 0px !important;margin-left: 8px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item166.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item166.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 13px !important;margin-bottom: 0px !important;margin-left: 10px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item168.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item168.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 13px !important;margin-bottom: 0px !important;margin-left: 10px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item170.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item170.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 13px !important;margin-bottom: 0px !important;margin-left: 10px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item172.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item172.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 13px !important;margin-bottom: 0px !important;margin-left: 10px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item174.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item174.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 0px !important;margin-bottom: 0px !important;margin-left: 10px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item176.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item176.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 0px !important;margin-bottom: 0px !important;margin-left: 10px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item326.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item326.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 0px !important;margin-bottom: 0px !important;margin-left: 10px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item425.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item425.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 0px !important;margin-bottom: 0px !important;margin-left: 10px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item364.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item364.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 8px !important;padding-left: 5px !important;margin-top: 12px !important;margin-right: 1px !important;margin-bottom: 7px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item327.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item327.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 0px !important;margin-bottom: 0px !important;margin-left: 5px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item187.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item187.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 18px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item190.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item190.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 18px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item192.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item192.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 18px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.parent.item266 > a:after, div#maximenuck ul.maximenuck li.maximenuck.parent.item266 > span.separator:after { border-top-color: #1759B0 !important;color: #1759B0 !important;} 
div#maximenuck ul.maximenuck li.maximenuck.item266.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item266.level2{ padding-top: 25px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;margin-top: 15px !important;margin-right: 0px !important;margin-bottom: 10px !important;margin-left: 3px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item194.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item194.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 18px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item178.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item178.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 18px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item189.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item189.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 18px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item322.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item322.level2{ padding-top: 25px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;margin-top: 15px !important;margin-right: 0px !important;margin-bottom: 10px !important;margin-left: 3px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item191.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item191.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 18px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item193.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item193.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 18px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item195.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item195.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 18px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item321.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item321.level2{ padding-top: 25px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;margin-top: 15px !important;margin-right: 0px !important;margin-bottom: 10px !important;margin-left: 3px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item323.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item323.level2{ padding-top: 7px !important;padding-right: 0px !important;padding-bottom: 5px !important;padding-left: 5px !important;margin-top: 6px !important;margin-right: 0px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item196.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item196.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 30px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item198.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item198.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 30px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item197.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item197.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 30px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item328.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item328.level2{ padding-top: 30px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;margin-top: 15px !important;margin-right: 0px !important;margin-bottom: 10px !important;margin-left: 3px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item200.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item200.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 30px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item199.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item199.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 30px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item267.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item267.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 30px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item329.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item329.level2{ padding-top: 30px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;margin-top: 15px !important;margin-right: 0px !important;margin-bottom: 10px !important;margin-left: 3px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item330.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item330.level2{ padding-top: 5px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 0px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item331.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item331.level2{ padding-top: 5px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;margin-top: 15px !important;margin-right: 0px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item365.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item365.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 18px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item202.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item202.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 28px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item204.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item204.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 28px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item206.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item206.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 28px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item208.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item208.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 28px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item396.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item396.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 0px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item210.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item210.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 10px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item212.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item212.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 10px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item203.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item203.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 10px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item205.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item205.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 10px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item207.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item207.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 10px !important;margin-bottom: 0px !important;margin-left: 20px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item209.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item209.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 10px !important;margin-bottom: 0px !important;margin-left: 20px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item211.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item211.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 10px !important;margin-bottom: 0px !important;margin-left: 20px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item213.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item213.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 10px !important;margin-bottom: 0px !important;margin-left: 20px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item398.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item398.level2{ padding-top: 10px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 20px !important;margin-top: 0px !important;margin-right: 0px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item269.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item269.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 25px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item270.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item270.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 25px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item271.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item271.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 25px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item272.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item272.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 25px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item214.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item214.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 16px !important;margin-right: 15px !important;margin-bottom: 0px !important;margin-left: 5px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item216.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item216.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 15px !important;margin-bottom: 0px !important;margin-left: 5px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item215.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item215.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 15px !important;margin-bottom: 0px !important;margin-left: 5px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item217.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item217.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 15px !important;margin-bottom: 0px !important;margin-left: 5px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item412.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item412.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 10px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 15px !important;margin-bottom: 0px !important;margin-left: 5px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item368.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item368.level2{ padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;margin-top: 10px !important;margin-right: 0px !important;margin-bottom: 0px !important;margin-left: 0px !important; } 
div#maximenuck ul.maximenuck li.maximenuck.item363.level2,
div#maximenuck ul.maximenuck2 li.maximenuck.item363.level2{ padding-top: 5px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;margin-top: 3px !important;margin-right: 5px !important;margin-bottom: 0px !important;margin-left: 8px !important; } 
  </style>
  <script src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/media/jui/js/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/media/jui/js/jquery-noconflict.js" type="text/javascript"></script>
  <script src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/media/jui/js/jquery-migrate.min.js" type="text/javascript"></script>
  <script src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/media/system/js/caption.js" type="text/javascript"></script>
  <script src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/media/jui/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/media/system/js/mootools-core.js" type="text/javascript"></script>
  <script src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/media/system/js/core.js" type="text/javascript"></script>
  <script src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/media/system/js/mootools-more.js" type="text/javascript"></script>
  <script src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/plugins/system/rokbox/assets/js/rokbox.js" type="text/javascript"></script>
  <script src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/templates/poora_temp/js/jquery.slimmenu.js" type="text/javascript"></script>
  <script src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/templates/poora_temp/js/owl.carousel.js" type="text/javascript"></script>
  <script src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/templates/poora_temp/js/jquery.easing.min.js" type="text/javascript"></script>
  <script src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/templates/poora_temp/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/modules/mod_lofarticlescroller/assets/script_12.js" type="text/javascript"></script>
  <script src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/media/yendifvideoshare/player/yendifplayer.js" type="text/javascript"></script>
  <script src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/modules/mod_artnewsticker/js/jquery.nc.js" type="text/javascript"></script>
  <script src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/modules/mod_artnewsticker/js/script.js" type="text/javascript"></script>
  <script src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/media/jui/js/jquery.ui.core.min.js" type="text/javascript"></script>
  <script src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/modules/mod_maximenuck/assets/maximenuck.js" type="text/javascript"></script>
  <script type="text/javascript">

		   
		   				function reloadCapthcha(instanceNo)
						{
							var captchaSrc = "indexe52b.jpg?showCaptcha=True&amp;instanceNo="+instanceNo+"&time="+ new Date().getTime();
							//alert(captachaSrc);
							//alert(document.getElementById('captchaCode'+instanceNo));
							document.getElementById('captchaCode'+instanceNo).src = captchaSrc ;
							//alert(document.getElementById('captchaCode'+instanceNo).src);
						} 
						jQuery(window).on('load',  function() {
				new JCaption('img.caption');
			});if (typeof RokBoxSettings == 'undefined') RokBoxSettings = {pc: '100'};jQuery(document).ready(function(){
	jQuery('.hasTooltip').tooltip({"html": true,"container": "body"});
});yendifplayer.config = {"autoplay":1,"analytics":"","autoplaylist":1,"controlbar":1,"currenttime":1,"duration":1,"embed":1,"engine":"flash","fullscreen":1,"keyboard":1,"license":"","logo":"","loop":0,"playbtn":1,"playpause":1,"progress":1,"ratio":"0.6250","responsive":1,"theme":"black","volume":0.5,"volumebtn":1,"playlistWidth":250,"playlistHeight":150,"playlistPosition":"right","origin":"http:\/\/waterboard.lk\/web\/"};jQuery(document).ready(function($){$('#maximenuck').DropdownMaxiMenu({fxtransition : 'linear',dureeIn : 0,dureeOut : 100,menuID : 'maximenuck',testoverflow : '0',orientation : 'horizontal',behavior : 'click',opentype : 'noeffect',fxdirection : 'normal',directionoffset1 : '30',directionoffset2 : '30',showactivesubitems : '0',ismobile : 0,menuposition : '0',effecttype : 'dropdown',fxduration : 500});});
  </script>

	<meta http-equiv="cache-control" content="no-store">
	<meta http-equiv="pragma" content="no-cache">
	 
	<!--[if lt IE 9]>
		<script src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>//web/media/jui/js/html5.js"></script>
	<![endif]-->
    
    <link href="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/templates/poora_temp/css/owl.carousel.css" rel="stylesheet" type="text/css" />
     <link href="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/templates/poora_temp/css/owl.theme.css" rel="stylesheet" type="text/css" />
     <link href="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/templates/poora_temp/css/jquery.cookiebar.css" rel="stylesheet" type="text/css" />
  

	    
        
         
         
    
<script type="text/javascript"></script>
</head>
 <body class="site home">

<header class="header">
        <div class="header-inner clearfix">
		<a href="<?php echo $this->baseurl; ?>/">
			<img class="img-responsive" src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/templates/poora_temp/images/new/head.png"  />
		</a>
               <!--Top Bar Start-->
                <div id="topmenu">
              		<div class="aligl">
                            <div class="moduletable">
 				   <ul class="nav menu">
					   <li class="item-263">
						   <a href="#" ><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/user.png" alt="Login" />
							   <span class="image-title">Login</span> 
						   </a>
					   </li>
					   <li class="item-147">
						   <a href="#" >Contact us</a>
					   </li>
					   <li class="item-148">
						   <a href="#" >Sitemap</a>
					   </li>
				   </ul>
			   </div>
		   </div>
		   <div class="lang">
			   <div class="disa"></div>
                           <div class="moduletable">
				   <div class="mod-languages">
					   <ul class="lang-inline"></ul>
				   </div>
			   </div>
			   <div class="moduletable">
				   <div class="mod-languages">
					   <ul class="lang-inline"></ul>
				   </div>
			   </div>
		   </div>
		   <div class="align">
              	   	<div id="fontsize1"> 
              		  <div class="moduletable">
				  <script language='javascript' type='text/javascript'>
				  <!--defaultSize = 80;-->
				  </script>
				  <script type="text/javascript" src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/modules/mod_ppc_fastfont/js/fastfont.js">
				  </script>
				  <div id="fontsize" style="font-size:16px;line-height:110%;text-align:center;">
					  <div style="border:none;margin:;background:#686868 url(<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/modules/mod_ppc_fastfont/img/20none.html);float:left;height:20px;width:px;">
						  <a style="text-decoration: none" href="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/index880d.html" title="Increase size" onclick="changeFontSize(1); return false;" class="larger">
							  <img style="margin:0; padding:0;" src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/modules/mod_ppc_fastfont/img/20plus.jpg" alt="Increase size" /></a>
						  </div>
						  <div style="border:none;margin:;background:#686868 url(<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/modules/mod_ppc_fastfont/img/20none.html);float:left;height:20px;width:px;">
							  <a style="text-decoration: none" href="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/index880d.html" title="Reset font size to default" onclick="revertStyles(); return false;" class="reset">
								  <img style="margin:0; padding:0;" src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/modules/mod_ppc_fastfont/img/20reset.jpg" alt="Reset to Default" /></a>
							  </div>
							  <div style="border:none;margin:;letter-spacing:-1px;background:#686868 url(<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/modules/mod_ppc_fastfont/img/20none.html);float:left;height:20px;width:px;">
								  <a style="text-decoration: none" href="index880d.html" title="Decrease size" onclick="changeFontSize(-1); return false;" class="smaller">
									  <img style="margin:0; padding:0;" src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/modules/mod_ppc_fastfont/img/20minus.jpg" alt="Decrease size" /></a>
								  </div>
							  </div>
						  </div>
					  </div>
					  <div class="aligr">
                				  <div id="pop">
							  <img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/templates/poora_temp/images/new/search.jpg"  />
						  </div>
						  <div class="cone">
							  <div class="clo">
								  <img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/templates/poora_temp/images/new/close.jpg"  />
							  </div>
							  <div class="moduletable">
								  <div class="search">
									  <form action="#" method="post" class="form-inline">
										  <button class="button btn btn-primary" onclick="this.form.searchword.focus();">
											  Search
										  </button>
										  <label for="mod-search-searchword" class="element-invisible">
											  Search...
										  </label>
										  <input name="searchword" id="mod-search-searchword" maxlength="20"  class="inputbox search-query" type="text" size="20" value="Search..."  onblur="if (this.value=='') this.value='Search...';" onfocus="if (this.value=='Search...') this.value='';" />
										  <input type="hidden" name="task" value="search" />
										  <input type="hidden" name="option" value="com_search" />
										  <input type="hidden" name="Itemid" value="101" />
									  </form>
								  </div>
							  </div>
						  </div>
					  </div>
				  </div>
			  </div>
			  <!--Top Bar End-->
		  </div>
	  </header>
	  
	  <!-- end hearder-->
	  
	  
	  
	  
	  
	  
	  
	  
	  
<div class="main_wrap">
	<div class="main-nav">
		<div id="aside">
			<div class="maximenuckh ltr" id="maximenuck" style="z-index:10;">
				<div class="maxiroundedleft"></div>
				<div class="maxiroundedcenter">
					
				<ul class=" maximenuck" style="position:relative;" >
				<?php if ($this->countModules('position-1')) : ?>
					<jdoc:include type="modules" name="position-1" style="none" />
				<?php endif; ?>				
				</ul>

        </div>
        <div class="maxiroundedright"></div>
        <div style="clear:both;"></div>
    </div>
    
    
    
    <!-- fin maximenuCK -->

                    </div>
				                                    <div id="slimmenu">
                         
  <ul   id="navigation" class="slimmenu ">
<li class="item-101 current active"><a href="index9ed2.html?lang=en" ><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/home.png" alt="Home" /></a></li><li class="item-102 deeper parent"><a href="#" >About Us</a><ul><li class="item-287"><a href="#" >Our Vision &amp; Mission</a></li><li class="item-103"><a href="index145a.html?option=com_content&amp;view=article&amp;id=76&amp;Itemid=103&amp;lang=en" >Organization</a></li><li class="item-104"><a href="index9e04.html?option=com_content&amp;view=article&amp;id=8&amp;Itemid=104&amp;lang=en" >History</a></li><li class="item-106"><a href="index6862.html?option=com_content&amp;view=article&amp;id=9&amp;Itemid=106&amp;lang=en" >Senior Management</a></li><li class="item-105"><a href="index3362.html?option=com_content&amp;view=article&amp;id=7&amp;Itemid=105&amp;lang=en" >Organizational Structure</a></li><li class="item-319"><a href="#" >Chairman &amp; GM</a></li><li class="item-132"><a href="indexca14.html?option=com_content&amp;view=article&amp;id=11&amp;Itemid=132&amp;lang=en" >Strength &amp; Technical Capabilities</a></li><li class="item-264"><a href="indexd7f7.html?option=com_content&amp;view=article&amp;id=114&amp;Itemid=264&amp;lang=en" ><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/powered_by.png" alt="Contact Details" /></a></li><li class="item-320"><a href="indexf55e.html?option=com_content&amp;view=article&amp;id=16&amp;Itemid=147&amp;lang=en" ><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/feedback.png" alt="Feedback" /></a></li><li class="item-265"><a href="index8b6c.html?option=com_content&amp;view=article&amp;id=115&amp;Itemid=265&amp;lang=en" ><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/icon/1939-large.gif" alt="1939 Call us" /></a></li><li class="item-133"><a href="index43c3.html?option=com_content&amp;view=article&amp;id=12&amp;Itemid=133&amp;lang=en" >Ministry</a></li></ul></li><li class="item-134 deeper parent"><a href="#" >Key Sections</a><ul><li class="item-135"><a href="index33f7.html?option=com_content&amp;view=article&amp;id=13&amp;Itemid=135&amp;lang=en" >Corporate Services</a></li><li class="item-165"><a href="index058f.html?option=com_content&amp;view=article&amp;id=17&amp;Itemid=165&amp;lang=en" >HRM &amp; IR</a></li><li class="item-167"><a href="indexa694.html?option=com_content&amp;view=article&amp;id=19&amp;Itemid=167&amp;lang=en" >Information Technology</a></li><li class="item-169"><a href="index8058.html?option=com_content&amp;view=article&amp;id=21&amp;Itemid=169&amp;lang=en" >Mechanical &amp; Electrical</a></li><li class="item-171"><a href="http://appzone.waterboard.lk:8081/training/" target="_blank" >Training Division</a></li><li class="item-173"><a href="index6545.html?option=com_content&amp;view=article&amp;id=62&amp;Itemid=173&amp;lang=en" >Research &amp; Development</a></li><li class="item-175"><a href="indexa6a5.html?option=com_content&amp;view=article&amp;id=27&amp;Itemid=175&amp;lang=en" >Planning &amp; Design</a></li><li class="item-136"><a href="index05f4.html?option=com_content&amp;view=article&amp;id=14&amp;Itemid=136&amp;lang=en" >Policy &amp; Planning</a></li><li class="item-166"><a href="index615d.html?option=com_content&amp;view=article&amp;id=18&amp;Itemid=166&amp;lang=en" >Finance &amp; Costing</a></li><li class="item-168"><a href="indexfeca.html?option=com_content&amp;view=article&amp;id=20&amp;Itemid=168&amp;lang=en" >Commercial Activities</a></li><li class="item-170"><a href="index2935.html?option=com_content&amp;view=article&amp;id=22&amp;Itemid=170&amp;lang=en" >Supplies</a></li><li class="item-172"><a href="index8cf6.html?option=com_content&amp;view=article&amp;id=24&amp;Itemid=172&amp;lang=en" >Laboratory</a></li><li class="item-174"><a href="indexa7ae.html?option=com_content&amp;view=article&amp;id=57&amp;Itemid=174&amp;lang=en" >Sewerage</a></li><li class="item-176"><a href="index14d2.html?option=com_content&amp;view=article&amp;id=28&amp;Itemid=176&amp;lang=en" >Japanese Project Unit</a></li><li class="item-326"><a href="indexe752.html?option=com_content&amp;view=article&amp;id=116&amp;Itemid=326&amp;lang=en" >Workshop</a></li><li class="item-425"><a href="index41ce.html?option=com_content&amp;view=article&amp;id=78&amp;Itemid=425&amp;lang=en" >Corporate Planning</a></li><li class="item-324"><a href="index01b2.html?option=com_content&amp;view=article&amp;id=117&amp;Itemid=324&amp;lang=en" ><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/head-office.png" alt="Head office" /></a></li><li class="item-325"><a href="indexc349.html?option=com_content&amp;view=article&amp;id=118&amp;Itemid=325&amp;lang=en" ><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/wtp.png" alt="WTP" /></a></li><li class="item-364"><a href="index2f51.html?option=com_content&amp;view=article&amp;id=119&amp;Itemid=364&amp;lang=en" >Ground Water</a></li><li class="item-327"><a href="indexe8aa.html?option=com_content&amp;view=article&amp;id=120&amp;Itemid=327&amp;lang=en" ><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/geound.png" alt="GIS Mapping" /></a></li></ul></li><li class="item-142 deeper parent"><a href="#" >Consumer Help</a><ul><li class="item-187"><a href="indexe207.html?option=com_content&amp;view=article&amp;id=30&amp;Itemid=187&amp;lang=en" >Customer Charter</a></li><li class="item-190"><a href="indexa612.html?option=com_content&amp;view=article&amp;id=32&amp;Itemid=190&amp;lang=en" >Call Center Info</a></li><li class="item-192"><a href="indexc135.html?option=com_content&amp;view=article&amp;id=34&amp;Itemid=192&amp;lang=en" >Current Tariff</a></li><li class="item-266"><a href="https://payments.waterboard.lk/payment" target="_blank" ><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/pay.png" alt="Pay Online- intro" /></a></li><li class="item-194"><a href="indexe0a2.html?option=com_content&amp;view=article&amp;id=36&amp;Itemid=194&amp;lang=en" >FAQ's</a></li><li class="item-178"><a href="indexa906.html?option=com_content&amp;view=article&amp;id=29&amp;Itemid=178&amp;lang=en" >Public Complaints</a></li><li class="item-189"><a href="indexd59e.html?option=com_content&amp;view=article&amp;id=31&amp;Itemid=189&amp;lang=en" >Water Conservation</a></li><li class="item-322"><a href="indexe0a2.html?option=com_content&amp;view=article&amp;id=36&amp;Itemid=194&amp;lang=en" ><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/faq.png" alt="FAQ's" /></a></li><li class="item-191"><a href="index93ca.html?option=com_content&amp;view=article&amp;id=33&amp;Itemid=191&amp;lang=en" >New Water Connection</a></li><li class="item-193"><a href="indexd092.html?option=com_content&amp;view=article&amp;id=35&amp;Itemid=193&amp;lang=en" >Useful Telephone Numbers</a></li><li class="item-195"><a href="index8d1a.html?option=com_content&amp;view=article&amp;id=37&amp;Itemid=195&amp;lang=en" >Downloads</a></li><li class="item-321"><a href="index2a9c.html?option=com_content&amp;view=article&amp;id=121&amp;Itemid=321&amp;lang=en" ><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/public-connection.png" alt="Public Connection" /></a></li><li class="item-323"><a href="index4190.html?option=com_content&amp;view=article&amp;id=122&amp;Itemid=323&amp;lang=en" >Complaints</a></li></ul></li><li class="item-143 deeper parent"><a href="#" >Public Notices</a><ul><li class="item-196"><a href="indexae83.html?option=com_content&amp;view=category&amp;layout=blog&amp;id=15&amp;Itemid=196&amp;lang=en" >News</a></li><li class="item-198"><a href="index1068.html?option=com_content&amp;view=article&amp;id=39&amp;Itemid=198&amp;lang=en" >General Notices</a></li><li class="item-197"><a href="index097c.html?option=com_content&amp;view=category&amp;layout=blog&amp;id=8&amp;Itemid=197&amp;lang=en" >Interruptions Notices</a></li><li class="item-328"><a href="indexf2be.html?option=com_content&amp;view=category&amp;layout=blog&amp;id=15&amp;Itemid=328&amp;lang=en" >News Highlights</a></li><li class="item-200"><a href="index128a.html?option=com_content&amp;view=article&amp;id=41&amp;Itemid=200&amp;lang=en" >Vacancies</a></li><li class="item-199"><a href="indexefb5.html?option=com_content&amp;view=article&amp;id=40&amp;Itemid=199&amp;lang=en" >Tenders &amp; Contracts</a></li><li class="item-267"><a href="indexe706.html?option=com_content&amp;view=article&amp;id=123&amp;Itemid=267&amp;lang=en" >Charges/Rates </a></li><li class="item-329"><a href="index128a.html?option=com_content&amp;view=article&amp;id=41&amp;Itemid=200&amp;lang=en" >Vacncies</a></li><li class="item-330"><a href="index8a71.html?option=com_content&amp;view=article&amp;id=126&amp;Itemid=330&amp;lang=en" >Promotions</a></li><li class="item-331"><a href="indexe0a2-2.html?option=com_content&amp;view=article&amp;id=40&amp;Itemid=331&amp;lang=en" >Tenders and Contracts</a></li></ul></li><li class="item-144 deeper parent"><a href="#" >Regional Support Centers</a><ul><li class="item-365"><a href="indexdee6.html?option=com_gmapfp&amp;view=gmapfplist&amp;Itemid=407&amp;lang=en" >Regional Map</a></li><li class="item-202"><a href="indexf456.html?option=com_content&amp;view=article&amp;id=42&amp;Itemid=202&amp;lang=en" >Western Central</a></li><li class="item-204"><a href="index61d1.html?option=com_content&amp;view=article&amp;id=44&amp;Itemid=204&amp;lang=en" >Western North</a></li><li class="item-206"><a href="index5c17.html?option=com_content&amp;view=article&amp;id=46&amp;Itemid=206&amp;lang=en" >Central</a></li><li class="item-208"><a href="indexc659.html?option=com_content&amp;view=article&amp;id=48&amp;Itemid=208&amp;lang=en" >North Central</a></li><li class="item-396"><a href="#" ><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/1.png" alt="Save Water" /></a></li><li class="item-210"><a href="index6ba1.html?option=com_content&amp;view=article&amp;id=50&amp;Itemid=210&amp;lang=en" >Southern</a></li><li class="item-212"><a href="indexfb12.html?option=com_content&amp;view=article&amp;id=52&amp;Itemid=212&amp;lang=en" >Northern</a></li><li class="item-203"><a href="index8d88.html?option=com_content&amp;view=article&amp;id=43&amp;Itemid=203&amp;lang=en" >Western South</a></li><li class="item-205"><a href="indexf7a9.html?option=com_content&amp;view=article&amp;id=45&amp;Itemid=205&amp;lang=en" >Western Production</a></li><li class="item-397"><a href="#" ><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/2.png" alt="Drinking Water " /></a></li><li class="item-207"><a href="index0102.html?option=com_content&amp;view=article&amp;id=47&amp;Itemid=207&amp;lang=en" >North Western</a></li><li class="item-209"><a href="indexd993.html?option=com_content&amp;view=article&amp;id=49&amp;Itemid=209&amp;lang=en" >Sabaragamuwa</a></li><li class="item-211"><a href="index1438.html?option=com_content&amp;view=article&amp;id=51&amp;Itemid=211&amp;lang=en" >Uva</a></li><li class="item-213"><a href="indexfe91.html?option=com_content&amp;view=article&amp;id=53&amp;Itemid=213&amp;lang=en" >Eastern</a></li><li class="item-398"><a href="#" ><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/3.png" alt="Dont waste it" /></a></li></ul></li><li class="item-145 deeper parent"><a href="#" >Projects</a><ul><li class="item-269"><a href="indexc3ce.html?option=com_content&amp;view=article&amp;id=71&amp;Itemid=269&amp;lang=en" >Projects in Progress</a></li><li class="item-270"><a href="index5e05.html?option=com_content&amp;view=article&amp;id=72&amp;Itemid=270&amp;lang=en" >Prioritized list of Projects (Needing Funds)</a></li><li class="item-271"><a href="index93ad.html?option=com_content&amp;view=article&amp;id=73&amp;Itemid=271&amp;lang=en" >Completed Projects</a></li><li class="item-272"><a href="index3b22.html?option=com_content&amp;view=article&amp;id=74&amp;Itemid=272&amp;lang=en" >Projects in Pipe Line</a></li><li class="item-332"><a href="indexc3ce.html?option=com_content&amp;view=article&amp;id=71&amp;Itemid=269&amp;lang=en" ><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/ongoing.png" alt="Ongoing Projects" /></a></li><li class="item-366"><a href="index93ad.html?option=com_content&amp;view=article&amp;id=73&amp;Itemid=271&amp;lang=en" ><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/project-large.png" alt="Completed Projects" /></a></li></ul></li><li class="item-146 deeper parent"><a href="#" >Media </a><ul><li class="item-214"><a href="index6b83.html?option=com_content&amp;view=article&amp;id=54&amp;Itemid=214&amp;lang=en" >Public Relations</a></li><li class="item-216"><a href="index1ac9.html?option=com_content&amp;view=article&amp;id=56&amp;Itemid=216&amp;lang=en" >Publications</a></li><li class="item-215"><a href="index2a14.html?option=com_content&amp;view=article&amp;id=55&amp;Itemid=215&amp;lang=en" >Articles</a></li><li class="item-217"><a href="indexc94f.html?option=com_acymailing&amp;view=user&amp;layout=modify&amp;Itemid=217&amp;lang=en" >Newsletter</a></li><li class="item-412"><a href="indexa755.html?option=com_yendifvideoshare&amp;view=category&amp;id=0&amp;Itemid=412&amp;lang=en" >Video Gallery</a></li><li class="item-368"><a href="index54f8.html?option=com_content&amp;view=article&amp;id=130&amp;Itemid=368&amp;lang=en" ><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/magazine.png" alt="Jalaya Magazine " /></a></li><li class="item-363"><a href="https://www.youtube.com/watch?v=fxqSp6-SDP0" target="_blank" >NWSDB Song</a></li><li class="item-367"><a href="indexfcf4.html?option=com_phocagallery&amp;view=categories&amp;Itemid=367&amp;lang=en" ><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/media.png" alt="Photo Gallery" /></a></li></ul></li></ul>
 

                    </div>
				                
    </div>
    
    <div class="news-head">
				                    <div id="aside">
                        
<ul id="js-news87" class="js-hidden">
	<li class="news-item"><a href="index40be.html?option=com_content&amp;view=article&amp;id=222&amp;lang=en"> Welcome to Lilongwe Water Board website</a></li></ul>
<script type="text/javascript">
    antjQuery(function () {
        antjQuery('#js-news87').ticker({
			controls: 0,
            titleText: 'News  headline',
            direction: 'ltr'
		});
    });
</script>
                    </div>
				    
    </div>
    
    <div class="banner-area">
				 
    	<div class="col1">
       
     		                      <div id="aside">
                        <div class="moduletablered">
 <h3>Important Notices</h3> <div id="lofasc-90" class="lof-articlessroller" style="height:160px; width:auto">
<div class=" lof-vertical lof-container ">


 <!-- MAIN CONTENT of ARTICLESCROLLER MODULE --> 
  <div class="lof-main-wapper" style="height:160px;width:auto">
 		  		<div class="lof-main-item page-1">
        		        		 <div class="lof-row" style="width:99.9%">
                   <div class="lof-inner" style="height:auto">
    
           
     <a class="lof-title" target="_parent" title="CALL FOR PAPERS FOR THE RESEARCH SYMPOSIUM  2016 " href="index9947.html?option=com_content&amp;view=article&amp;id=218:call-for-papers-for-the-research-symposium-2017&amp;catid=8:interruption-notices&amp;Itemid=197&amp;lang=en">
      <div class="blIm">
     <img class="block" src="modules/mod_lofarticlescroller/assets/images/notice.png"   alt=""/>
      </div>  CALL FOR PAPERS FOR ...     </a>
           
     
	<div class="dis">National Water Supply &amp; Drainage Board will arrange a research symposium...</div>
<hr>
          <a target="_parent" class="lof-readmore" title="CALL FOR PAPERS FOR THE RESEARCH SYMPOSIUM  2016 " href="index9947.html?option=com_content&amp;view=article&amp;id=218:call-for-papers-for-the-research-symposium-2017&amp;catid=8:interruption-notices&amp;Itemid=197&amp;lang=en">
        Read more      </a>
    </div>				</div>      
                       
                        </div> 
   		  		<div class="lof-main-item page-2">
        		        		 <div class="lof-row" style="width:99.9%">
                   <div class="lof-inner" style="height:auto">
    
           
     <a class="lof-title" target="_parent" title="  WATER TANK AT BERUWALA FOR NWS & DB, UNDER  JICA ASSISTANCE. " href="indexb4c9.html?option=com_content&amp;view=article&amp;id=221:water-tank-at-beruwala-for-nws-db-under-jica-assistance-2&amp;catid=8:interruption-notices&amp;Itemid=197&amp;lang=en">
      <div class="blIm">
     <img class="block" src="modules/mod_lofarticlescroller/assets/images/notice.png"   alt=""/>
      </div>    WATER TANK AT BERU...     </a>
           
     
	<div class="dis">A LEADING JAPANEESE CONSTRCTION COMPANY CONSTRUCTS A 2000m3 CAPACITY AND 10M...</div>
<hr>
          <a target="_parent" class="lof-readmore" title="  WATER TANK AT BERUWALA FOR NWS & DB, UNDER  JICA ASSISTANCE. " href="indexb4c9.html?option=com_content&amp;view=article&amp;id=221:water-tank-at-beruwala-for-nws-db-under-jica-assistance-2&amp;catid=8:interruption-notices&amp;Itemid=197&amp;lang=en">
        Read more      </a>
    </div>				</div>      
                       
                        </div> 
   		  		<div class="lof-main-item page-3">
        		        		 <div class="lof-row" style="width:99.9%">
                   <div class="lof-inner" style="height:auto">
    
           
     <a class="lof-title" target="_parent" title=" Workshop on New Investment Strategies & Business Models for the NWSDB" href="index213d.html?option=com_content&amp;view=article&amp;id=223:workshop-on-new-investment-strategies-business-models-for-the-nwsdb-2&amp;catid=8:interruption-notices&amp;Itemid=197&amp;lang=en">
      <div class="blIm">
     <img class="block" src="modules/mod_lofarticlescroller/assets/images/notice.png"   alt=""/>
      </div>   Workshop on New Inv...     </a>
           
     
	<div class="dis">Workshop on New Investment Strategies &amp; Business Models for the NWSDB at...</div>
<hr>
          <a target="_parent" class="lof-readmore" title=" Workshop on New Investment Strategies & Business Models for the NWSDB" href="index213d.html?option=com_content&amp;view=article&amp;id=223:workshop-on-new-investment-strategies-business-models-for-the-nwsdb-2&amp;catid=8:interruption-notices&amp;Itemid=197&amp;lang=en">
        Read more      </a>
    </div>				</div>      
                       
                        </div> 
   		  </div>
 </div> 
  <!-- END MAIN CONTENT of ARTICLESCROLLER MODULE --> 
 </div> 
<script type="text/javascript">
var _lofmain =  $('lofasc-90'); 
var object = new LofSlideshow ( _lofmain,
							  { 
								  fxObject:{
									transition:Fx.Transitions.Quad.easeInOut,  
									duration:500								  },
								  startItem:0,
								  interval:5000,
								  direction :'hrright', 
								  navItemHeight:32,
								  navItemWidth:32,
								  navItemsDisplay:3,
								  navPos:'0'
							  } );
	object.start( 1, null );
</script>

</div>

                    </div>
				        
        </div>
    	<div class="col2">
        		                    <div id="aside">
                         						<script type="text/javascript" src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/media/com_uniterevolution/assets/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
						<script type="text/javascript" src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/media/com_uniterevolution/assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
						
				
				<!-- START REVOLUTION SLIDER ver. 2.2.8 -->
				
				<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:none;padding:0px;margin-top:0px;margin-bottom:0px;max-height:220px;direction:ltr;">
					<div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;max-height:220px;height:220px;">						
										<ul>
								
					<li data-transition="random" data-slotamount="7" data-masterspeed="300" > 
					    
						<img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/slider/5.jpg" alt="" />
						
														
				<div class="tp-caption big_white fade"  
					 data-x="0" 
					 data-y="232" 
					 data-speed="300" 
					 data-start="500" 
					 data-easing="easeOutExpo"  >Rural Water Projects </div>
				
								
				<div class="tp-caption small_text lfr"  
					 data-x="1" 
					 data-y="268" 
					 data-speed="300" 
					 data-start="800" 
					 data-easing="easeOutExpo"  >In rural Sri Lanka women are tasked with fetching and carrying water<br> for the entire household, sometimes walking miles with <br>pots and bottles balanced on their heads. Credit: Amantha Perera/IPS</div>
				
												</li>
									
					<li data-transition="random" data-slotamount="7" data-masterspeed="300" > 
					    
						<img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/slider/3.jpg" alt="" />
						
														
				<div class="tp-caption big_white fade"  
					 data-x="0" 
					 data-y="232" 
					 data-speed="300" 
					 data-start="500" 
					 data-easing="easeOutExpo"  >Rural Water Projects </div>
				
								
				<div class="tp-caption small_text lfr"  
					 data-x="1" 
					 data-y="268" 
					 data-speed="300" 
					 data-start="800" 
					 data-easing="easeOutExpo"  >In rural Sri Lanka women are tasked with fetching and carrying water<br> for the entire household, sometimes walking miles with <br>pots and bottles balanced on their heads. Credit: Amantha Perera/IPS</div>
				
												</li>
									
					<li data-transition="random" data-slotamount="7" data-masterspeed="300" > 
					    
						<img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/slider/09.jpg" alt="" />
						
											</li>
									
					<li data-transition="random" data-slotamount="7" data-masterspeed="300" > 
					    
						<img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/slider/4.jpg" alt="" />
						
														
				<div class="tp-caption big_white fade"  
					 data-x="0" 
					 data-y="232" 
					 data-speed="300" 
					 data-start="500" 
					 data-easing="easeOutExpo"  >Rural Water Projects </div>
				
								
				<div class="tp-caption small_text lfr"  
					 data-x="1" 
					 data-y="268" 
					 data-speed="300" 
					 data-start="800" 
					 data-easing="easeOutExpo"  >In rural Sri Lanka women are tasked with fetching and carrying water<br> for the entire household, sometimes walking miles with <br>pots and bottles balanced on their heads. Credit: Amantha Perera/IPS</div>
				
												</li>
									
					<li data-transition="random" data-slotamount="7" data-masterspeed="300" > 
					    
						<img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/slider/10.jpg" alt="" />
						
											</li>
								</ul>
									<div class="tp-bannertimer"></div>					</div>
				</div>
							
			<script type="text/javascript">
				
				var tpj=jQuery;
				
				
				var revapi1;
				
				tpj(document).ready(function() {
				
				if (tpj.fn.cssOriginal != undefined)
					tpj.fn.css = tpj.fn.cssOriginal;
				
				if(tpj('#rev_slider_1_1').revolution == undefined)
					revslider_showDoubleJqueryError('#rev_slider_1_1',"joomla");
				else	
					revapi1 = tpj('#rev_slider_1_1').show().revolution(
					 {
						delay:9000,
						startwidth:740,
						startheight:220,
						hideThumbs:200,
						
						thumbWidth:100,
						thumbHeight:50,
						thumbAmount:5,
						
						navigationType:"bullet",
						navigationArrows:"none",
						navigationStyle:"round",
						
						touchenabled:"on",
						onHoverStop:"on",
						
						shadow:2,
						fullWidth:"on",

						navigationHAlign:"right",
						navigationVAlign:"bottom",
						navigationHOffset:10,
						navigationVOffset:10,
								
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,
								
						shuffle:"off",
						
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0					});
				
				});	//ready
				
			</script>
			
							<!-- END REVOLUTION SLIDER -->
				
                    </div>
				                
                               <main id="content" role="main">
					<!-- Begin Content -->
 					<div id="system-message-container">
	</div>

					<div class="blog-featured" itemscope itemtype="http://schema.org/Blog">




</div>

 					<!-- End Content -->
				</main>
        	
        </div>
    </div>
      <!-- Carsoul Start -->
    <div class="ser-cars">
 			                         <div class="moduletable">
 <div id="owl-demo" class="owl-carousel">
<div class="item"><li class="item-289 deeper parent"><a href="#" ><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/services-tab/details-projects.jpg" alt="Details of Projects" /></a><ul class="nav-child unstyled small"><li class="item-290"><a href="indexc3ce.html?option=com_content&amp;view=article&amp;id=71&amp;Itemid=269&amp;lang=en" >Projects in Progress</a></li><li class="item-291"><a href="index3b22.html?option=com_content&amp;view=article&amp;id=74&amp;Itemid=272&amp;lang=en" >Projects in Pipe Line</a></li><li class="item-292"><a href="index5e05.html?option=com_content&amp;view=article&amp;id=72&amp;Itemid=270&amp;lang=en" >Projects Needing Fund</a></li><li class="item-293"><a href="indexbc5f.html?option=com_content&amp;view=article&amp;id=131&amp;Itemid=293&amp;lang=en" >Progress Monitoring</a></li><li class="item-333"><a href="index129b.html?option=com_content&amp;view=article&amp;id=132&amp;Itemid=333&amp;lang=en" >Beneficiaries</a></li></ul></li></div><div class="item"><li class="item-294 deeper parent"><a href="#" ><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/services-tab/tenders.jpg" alt="About Tenders/ Contracts" /></a><ul class="nav-child unstyled small"><li class="item-295"><a href="indexefb5.html?option=com_content&amp;view=article&amp;id=40&amp;Itemid=199&amp;lang=en" >Tender Notices</a></li><li class="item-296"><a href="indexb62a.html?option=com_content&amp;view=article&amp;id=109&amp;Itemid=296&amp;lang=en" >Awarded Contracts</a></li><li class="item-297"><a href="index7317.html?option=com_content&amp;view=article&amp;id=110&amp;Itemid=297&amp;lang=en" >Registered Suppliers</a></li><li class="item-298"><a href="indexa612.html?option=com_content&amp;view=article&amp;id=32&amp;Itemid=190&amp;lang=en#general_infomation" >General Information</a></li><li class="item-299"><a href="http://www.waterboard.lk/web/index.php?option=com_content&amp;view=article&amp;id=168&amp;Itemid=335&amp;lang=en" >Tender Specificaiotns</a></li></ul></li></div><div class="item"><li class="item-300 deeper parent"><a href="#" ><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/services-tab/Structure-Bill%20Tariff.jpg" alt="Tariff Structure for Water Billing" /></a><ul class="nav-child unstyled small"><li class="item-301"><a href="indexc135.html?option=com_content&amp;view=article&amp;id=34&amp;Itemid=192&amp;lang=en" >Water Tariff</a></li><li class="item-302"><a href="indexc135.html?option=com_content&amp;view=article&amp;id=34&amp;Itemid=192&amp;lang=en" >Sewerage Tariff</a></li><li class="item-303"><a href="indexc135.html?option=com_content&amp;view=article&amp;id=34&amp;Itemid=192&amp;lang=en" >Bill Calculator</a></li></ul></li></div><div class="item"><li class="item-304 deeper parent"><a href="#" ><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/services-tab/consumer.jpg" alt="Consumer Services" /></a><ul class="nav-child unstyled small"><li class="item-305"><a href="index93ca.html?option=com_content&amp;view=article&amp;id=33&amp;Itemid=191&amp;lang=en" >New Connections</a></li><li class="item-306"><a href="index06db.html?option=com_content&amp;view=article&amp;id=134&amp;Itemid=306&amp;lang=en" >Commercial Services</a></li><li class="item-307"><a href="indexe706.html?option=com_content&amp;view=article&amp;id=123&amp;Itemid=267&amp;lang=en" >Charges/Rates</a></li><li class="item-308"><a href="indexa612.html?option=com_content&amp;view=article&amp;id=32&amp;Itemid=190&amp;lang=en" >Whom to Contact</a></li><li class="item-309"><a href="indexa906.html?option=com_content&amp;view=article&amp;id=29&amp;Itemid=178&amp;lang=en" >Online Services</a></li><li class="item-310"><a href="indexf4e5.html?option=com_content&amp;view=article&amp;id=111&amp;Itemid=310&amp;lang=en" >Mobile Services (SMS Based)</a></li></ul></li></div><div class="item"><li class="item-311 deeper parent"><a href="#" ><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/services-tab/public-relations.jpg" alt="Public Relations" /></a><ul class="nav-child unstyled small"><li class="item-312"><a href="index128a.html?option=com_content&amp;view=article&amp;id=41&amp;Itemid=200&amp;lang=en" >Career Opportunities</a></li><li class="item-313"><a href="index8a71.html?option=com_content&amp;view=article&amp;id=126&amp;Itemid=330&amp;lang=en" >Promotional Downloads</a></li><li class="item-314"><a href="index8214.html?option=com_jevents&amp;view=day&amp;layout=listevents&amp;Itemid=314&amp;lang=en" >Special Events</a></li><li class="item-315"><a href="index3cdc.html?option=com_content&amp;view=article&amp;id=135&amp;Itemid=315&amp;lang=en" >Water Supply Details</a></li></ul></li></div></div>



</div>

 				     </div>
       <!-- Carsoul End -->
     
      <!-- Quick Links and What New -->
    <div class="quick-rel">
    	<div class="col3">
       
     		                      <div id="aside">
                        <div class="moduletable">
 

<div class="custom"  >
	<ul>
<li><a href="indexa906.html?option=com_content&amp;view=article&amp;id=29&amp;Itemid=178&amp;lang=en"><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/icon/griven.png" alt="" />Tell us your<br /><strong>Grievances</strong></a></li>
<li><a href="https://payments.waterboard.lk/payment" target="_blank"><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/icon/payonline.png" alt="" />Bill pay online<br /><strong>Pay online</strong></a></li>
<li><a href="http://bis.waterboard.lk/ebis/" target="_blank"><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/icon/customer.png" alt="" />Register here<br /><strong>Customer Care Zone</strong></a></li>
<li><a href="indexbd64.html?option=com_content&amp;view=article&amp;id=197&amp;Itemid=426&amp;lang=en"><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/icon/new.png" alt="" />safety of drinking &nbsp;water<br /><strong>Water Safety Plans</strong><br /></a></li>
<li><a href="index128a.html?option=com_content&amp;view=article&amp;id=41&amp;Itemid=200&amp;lang=en"><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/icon/career.png" alt="" />Review<br /><strong>Career Opportunities</strong></a></li>
<li><a href="index097c.html?option=com_content&amp;view=category&amp;layout=blog&amp;id=8&amp;Itemid=197&amp;lang=en"><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/icon/inttrup.png" alt="inttrup" />Water Supply <br /><strong>Interruption Notices</strong></a></li>
<li><a href="index9de0.html?option=com_content&amp;view=article&amp;id=111&amp;Itemid=318&amp;lang=en"><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/icon/level.png" alt="level" />Water Level<br /><strong>via SMS</strong></a></li>
<li><a href="index26d1.html?option=com_kunena&amp;view=home&amp;defaultmenu=354&amp;Itemid=352"><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/icon/forum.png" alt="forum" />Join Our Community<br /><strong>Forum</strong></a></li>
<li><a href="index30c8.html?option=com_content&amp;view=article&amp;id=136&amp;Itemid=384"><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/icon/qual.png" alt="" />Drinking Water<br /><strong> Quality</strong></a></li>
</ul>
<ul class="none">
<li><a href="indexe37c.html?option=com_content&amp;view=article&amp;id=137&amp;Itemid=385">Supplier Registrations</a>&nbsp;<a href="indexe37c.html?option=com_content&amp;view=article&amp;id=137&amp;Itemid=385" style="font-size: 12.1599998474121px; line-height: 15.8079996109009px;">2015</a><a href="indexe37c.html?option=com_content&amp;view=article&amp;id=137&amp;Itemid=385"></a></li>
<li><a href="indexd687.html?option=com_content&amp;view=article&amp;id=138&amp;Itemid=386">Safe Water Coverage</a></li>
<li><a href="index6d09.html?option=com_content&amp;view=article&amp;id=139&amp;Itemid=387">Bacteriological Quality of Water</a></li>
</ul></div>
</div>
<div class="moduletable">
 <h3>Video Highlight</h3> 
<div class="yendifVideoShare">

<div class="yendifplayer" data-vid="5" data-autoplay="0" data-controlbar="1" data-embed="0" data-fullscreen="0"><video controls poster=http://www.waterboard.lk/web/media/yendifvideoshare/videos/5/Diyapinbindu_poster.jpg><source type="video/youtube" src="http://www.youtube.com/watch?v=vr5Rcz3CJmg"></video></div>
</div></div>

                    </div>
				        
        </div>
    	<div class="col4">
        		                    <div id="aside">
                        <div class="moduletable">
 

<div class="custom"  >
	<ul>
<li><a href="http://www.complaints.gov.lk/" target="_blank">Public Grievances Management</a></li>
<li><a href="http://www.mwsd.gov.lk/" target="_blank">Ministry of Water Supply and Drainage</a></li>
<li><a href="http://www.gic.gov.lk/" target="_blank">Government Information Center</a></li>
<li><a href="http://www.kandywastewater.lk/" target="_blank">Kandy City Wastewater Management Project</a></li>
<li><a href="http://www.communitywater.lk/" target="_blank">3rd International Conference on Community Water Services</a></li>
<li><a href="http://www.sacosan.lk/" target="_blank">SACOSAN Regional Sanitation Centre</a></li>
<li><a href="http://nwsdbrws.org/">Rural Water &amp; Sanitation Activities</a></li>
</ul></div>
</div>
<div class="moduletableblue">
 <h3>News & Events</h3> <div id="lofasc-96" class="lof-articlessroller" style="height:410px; width:auto">
<div class=" lof-vertical lof-container ">


 <!-- MAIN CONTENT of ARTICLESCROLLER MODULE --> 
  <div class="lof-main-wapper" style="height:410px;width:auto">
 		  		<div class="lof-main-item page-1">
        		        		 <div class="lof-row" style="width:99.9%">
                   <div class="lof-inner" style="height:auto">
            <a target="_parent" class="lof-image-link " style=" height:74px; width:100%; display:block" title=" Workshop on New Investment Strategies & Business Models for the NWSDB" href="index742c.html?option=com_content&amp;view=article&amp;id=222:workshop-on-new-investment-strategies-business-models-for-the-nwsdb&amp;catid=15:news&amp;Itemid=196&amp;lang=en">
          <img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/cache/lofthumbs/292x74-1H6A3245.jpg" title=" Workshop on New Investment Strategies & Business Models for the NWSDB" />
        </a> 
    
           <a class="lof-title" target="_parent" title=" Workshop on New Investment Strategies & Business Models for the NWSDB" href="index742c.html?option=com_content&amp;view=article&amp;id=222:workshop-on-new-investment-strategies-business-models-for-the-nwsdb&amp;catid=15:news&amp;Itemid=196&amp;lang=en">
        Workshop on New Investment St...     </a>
           
           
	<div class="dis">Workshop on New Investment Strategies &amp; Business Models for the...</div>

          <a target="_parent" class="lof-readmore" title=" Workshop on New Investment Strategies & Business Models for the NWSDB" href="index742c.html?option=com_content&amp;view=article&amp;id=222:workshop-on-new-investment-strategies-business-models-for-the-nwsdb&amp;catid=15:news&amp;Itemid=196&amp;lang=en">
        Read more      </a>
    </div>				</div>      
                                	<div class="lof-clearfix"></div>
                       
                        		 <div class="lof-row" style="width:99.9%">
                   <div class="lof-inner" style="height:auto">
            <a target="_parent" class="lof-image-link " style=" height:74px; width:100%; display:block" title="  WATER TANK AT BERUWALA FOR NWS & DB, UNDER  JICA ASSISTANCE." href="indexdf29.html?option=com_content&amp;view=article&amp;id=220:water-tank-at-beruwala-for-nws-db-under-jica-assistance&amp;catid=15:news&amp;Itemid=196&amp;lang=en">
          <img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/cache/lofthumbs/292x74-image001.png" title="  WATER TANK AT BERUWALA FOR NWS & DB, UNDER  JICA ASSISTANCE." />
        </a> 
    
           <a class="lof-title" target="_parent" title="  WATER TANK AT BERUWALA FOR NWS & DB, UNDER  JICA ASSISTANCE." href="indexdf29.html?option=com_content&amp;view=article&amp;id=220:water-tank-at-beruwala-for-nws-db-under-jica-assistance&amp;catid=15:news&amp;Itemid=196&amp;lang=en">
         WATER TANK AT BERUWALA FOR N...     </a>
           
           
	<div class="dis">A LEADING JAPANEESE CONSTRCTION COMPANY CONSTRUCTS A 2000m3 CAPACITY...</div>

          <a target="_parent" class="lof-readmore" title="  WATER TANK AT BERUWALA FOR NWS & DB, UNDER  JICA ASSISTANCE." href="indexdf29.html?option=com_content&amp;view=article&amp;id=220:water-tank-at-beruwala-for-nws-db-under-jica-assistance&amp;catid=15:news&amp;Itemid=196&amp;lang=en">
        Read more      </a>
    </div>				</div>      
                       
                        </div> 
   		  		<div class="lof-main-item page-2">
        		        		 <div class="lof-row" style="width:99.9%">
                   <div class="lof-inner" style="height:auto">
            <a target="_parent" class="lof-image-link " style=" height:74px; width:100%; display:block" title="Meeting with secretary Mr. B.M.U.D. Basnayake at 2015.09.24 in Water Board Head Office" href="index99f0.html?option=com_content&amp;view=article&amp;id=219:meeting-with-secretary-mr-b-m-u-d-basnayake-to-the-ministry-of-city-planning-water-supply-on-the-day-of-his-visit-to-nwsdb-at-2015-09-24&amp;catid=15:news&amp;Itemid=196&amp;lang=en">
          <img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/cache/lofthumbs/292x74-secvisit3.jpg" title="Meeting with secretary Mr. B.M.U.D. Basnayake at 2015.09.24 in Water Board Head Office" />
        </a> 
    
           <a class="lof-title" target="_parent" title="Meeting with secretary Mr. B.M.U.D. Basnayake at 2015.09.24 in Water Board Head Office" href="index99f0.html?option=com_content&amp;view=article&amp;id=219:meeting-with-secretary-mr-b-m-u-d-basnayake-to-the-ministry-of-city-planning-water-supply-on-the-day-of-his-visit-to-nwsdb-at-2015-09-24&amp;catid=15:news&amp;Itemid=196&amp;lang=en">
       Meeting with secretary Mr. B.M...     </a>
           
           
	<div class="dis">Meeting with secretary Mr. B.M.U.D. Basnayake to the ministry of...</div>

          <a target="_parent" class="lof-readmore" title="Meeting with secretary Mr. B.M.U.D. Basnayake at 2015.09.24 in Water Board Head Office" href="index99f0.html?option=com_content&amp;view=article&amp;id=219:meeting-with-secretary-mr-b-m-u-d-basnayake-to-the-ministry-of-city-planning-water-supply-on-the-day-of-his-visit-to-nwsdb-at-2015-09-24&amp;catid=15:news&amp;Itemid=196&amp;lang=en">
        Read more      </a>
    </div>				</div>      
                                	<div class="lof-clearfix"></div>
                       
                        		 <div class="lof-row" style="width:99.9%">
                   <div class="lof-inner" style="height:auto">
    
           <a class="lof-title" target="_parent" title="CALL FOR PAPERS FOR THE RESEARCH SYMPOSIUM  2016" href="index055b.html?option=com_content&amp;view=article&amp;id=217:call-for-papers-for-the-research-symposium-2016&amp;catid=15:news&amp;Itemid=196&amp;lang=en">
       CALL FOR PAPERS FOR THE RESEAR...     </a>
           
           
	<div class="dis">National Water Supply &amp; Drainage Board will arrange a research...</div>

          <a target="_parent" class="lof-readmore" title="CALL FOR PAPERS FOR THE RESEARCH SYMPOSIUM  2016" href="index055b.html?option=com_content&amp;view=article&amp;id=217:call-for-papers-for-the-research-symposium-2016&amp;catid=15:news&amp;Itemid=196&amp;lang=en">
        Read more      </a>
    </div>				</div>      
                       
                        </div> 
   		  </div>
 </div> 
  <!-- END MAIN CONTENT of ARTICLESCROLLER MODULE --> 
 </div> 
<script type="text/javascript">
var _lofmain =  $('lofasc-96'); 
var object = new LofSlideshow ( _lofmain,
							  { 
								  fxObject:{
									transition:Fx.Transitions.Quad.easeInOut,  
									duration:500								  },
								  startItem:0,
								  interval:5000,
								  direction :'vrup', 
								  navItemHeight:32,
								  navItemWidth:32,
								  navItemsDisplay:3,
								  navPos:'0'
							  } );
	object.start( 1, null );
</script>

</div>

                    </div>
				        
        </div>
    </div>
      <!-- Quick Links and What New End -->
      
    <!-- Footer -->
	<footer class="footer" role="contentinfo">
    					<div id="breadcrumbs">
						
<ul class="breadcrumb">
	<li class="active">You are here: &#160;</li><li class="active"><span>Home</span></li></ul>

                       
                        <div class="social-m">

<div class="custom"  >
	<table>
<tbody>
<tr>
<td><a href="https://www.facebook.com/nwsdbSL" target="_blank"><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/facebook.png" alt="" width="23" height="22" /></a></td>
<td><a href="https://twitter.com/NWSDB" target="_blank"><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/tweet.png" alt="" /></a></td>
<td><a href="#"><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/you.png" alt="" /></a></td>
<td><a href="https://www.linkedin.com/profile/view?id=369427362&amp;authType=name&amp;authToken=v4Q5&amp;trk=miniprofile-primary-view-button" target="_blank"><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/link.png" alt="" /></a></td>
<td style="width: 5px;">&nbsp;</td>
<td><a href="#" class="tops"><img title="Go to Top" src="images/top.jpg" alt="top" /></a></td>
</tr>
</tbody>
</table></div>
</div>
                        
					</div>
    	<!--<div class="foot-item">
 			<div class="F-col1">
          	  <div class="moduletable">
 <h3>Quick Links</h3> <ul class="nav menu">
<li class="item-180"><a href="/web/index.php?option=com_content&amp;view=article&amp;id=29&amp;Itemid=178&amp;lang=en" >Tell us Your Grievances</a></li><li class="item-138"><a href="https://payments.waterboard.lk/payment" target="_blank" >Bill Pay Online</a></li><li class="item-141"><a href="http://bis.waterboard.lk/ebis/" target="_blank" >Register Here Customer Care Zone</a></li><li class="item-181"><a href="http://www.waterboard.lk/nwc/login.html" target="_blank" >400,000 New Services Connection</a></li><li class="item-316"><a href="/web/index.php?option=com_content&amp;view=article&amp;id=41&amp;Itemid=200&amp;lang=en" >Review Career Opportunities</a></li><li class="item-317"><a href="/web/index.php?option=com_content&amp;view=category&amp;layout=blog&amp;id=8&amp;Itemid=197&amp;lang=en" >Water Supply Interruption Notices</a></li><li class="item-318"><a href="/web/index.php?option=com_content&amp;view=article&amp;id=111&amp;Itemid=318&amp;lang=en" >Water Levels via SMS</a></li></ul>
</div>

 			</div>
            
            <div class="F-col2">
          	  <div class="moduletable">
 <h3>Other Links </h3> <ul class="nav menu">
<li class="item-183"><a href="#" >Place Your Feedback</a></li></ul>
</div>

 			</div>
            
            <div class="F-col3">
          	  <div class="moduletable">
 <h3>Contact us</h3> 

<div class="custom"  >
	<table>
<tbody>
<tr valign="top">
<td><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/icon/map.png" alt="" /></td>
<td rowspan="2">National Water Supply and Drainage Board<br />Galle Road, Ratmalana,<br />Sri Lanka.</td>
<td style="width: 50px;" rowspan="2">&nbsp;</td>
<td><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/icon/fax.png" alt="" /></td>
<td>+94 11 2636449</td>
</tr>
<tr valign="top">
<td>&nbsp;</td>
<td><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/icon/mail.png" alt="" /></td>
<td>gm@waterboard.lk</td>
</tr>
<tr>
<td>&nbsp;</td>
<td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
<tr valign="top">
<td><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/icon/contact.png" alt="" /></td>
<td>+94 11 2638999 (hunting)<br />+94 11 2611589, +94 11 2637194</td>
<td>&nbsp;</td>
<td colspan="2"><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/icon/webmail.png" alt="" /></td>
</tr>
</tbody>
</table></div>
</div>

 			</div>
        
        
        </div>-->
    
    
		<div class="infoter">
        	<div class="gicbaner">
 				

<div class="custom"  >
	<p><a href="https://mail.waterboard.lk/owa/" target="_blank"><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/webmail.png" alt="" /></a>&nbsp; <a href="http://www.gic.gov.lk/" target="_blank"><img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/icon/gic_en.gif" alt="" width="130" height="48" /></a>&nbsp; <img src="<?php echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/icon/1939.gif" alt="" width="113" height="48" /></p></div>

             </div>
        	<div class="visit">
 				 

<div class="lastmodified">Last Update : 19 October 2015.</div>
             </div>
 			<div class="footer1">Copyright &#169; 2015 National Water Supply and Drainage Board.<br> All Rights Reserved.</div>
<div class="footer2"></div>

 		</div>
        
        
        
	</footer>
    
</div>
 <!-- Footer End -->
 
	
	

          
 
    
           
 
     

     <script>
	  
		
 	  jQuery.noConflict();
		 
			(function( $ ) {
			$(function() {
			 
			
			 
			 $('.tops').click(function(){
				$("html, body").animate({ scrollTop: 0 }, 600);
				return false;
			});
			 
				$( "#pop" ).click(function() {
						$(".aligr .cone").fadeIn();
				});
				
				$( ".clo" ).click(function() {
						$(".aligr .cone").fadeOut();
				});
				
				
				$('ul.slimmenu').slimmenu(
				{
					resizeWidth: '800',
					collapserTitle: 'Main Menu',
					easingEffect:'easeInOutQuint',
					animSpeed:'medium',
					indentChildren: true,
					childrenIndenter: '&raquo;'
				});
				
				
				
				$(".ser-cars li").hover(function(){
					$(this).find(".nav-child").fadeIn();
				},function(){
					$(this).find(".nav-child").fadeOut();
				});
				 
				

				
				 
				
			 	$(document).ready(function() {

		/*$.cookieBar({
			declineButton: true
		}); */
		
		/*$.cookie('.waterboard.lk', ''); */

      var owl = $("#owl-demo");

      owl.owlCarousel({
	autoPlay: 3000,
	stopOnHover:true,
	autoHeight:true,
        // Define custom and unlimited items depending from the width
        // If this option is set, itemsDeskop, itemsDesktopSmall, itemsTablet, itemsMobile etc. are disabled
        // For better preview, order the arrays by screen size, but it's not mandatory
        // Don't forget to include the lowest available screen size, otherwise it will take the default one for screens lower than lowest available.
        // In the example there is dimension with 0 with which cover screens between 0 and 450px
        
        itemsCustom : [
          [0, 1],
          [450, 1],
          [600, 2],
          [700, 4],
          [1000, 5],
          [1200, 5],
          [1400, 5],
          [1600, 5]
        ],
        navigation : true,
		pagination:false

      });
	



    });});
				
			})(jQuery);
    
    </script>
    
   
</body>

<!-- Mirrored from waterboard.lk/web/index.php?lang=en by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2015 12:31:07 GMT -->
</html>