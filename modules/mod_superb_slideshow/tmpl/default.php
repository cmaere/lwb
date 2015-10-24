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

$sbs_imglink 			= $params->get('sbs_imglink');
$sbs_width 				= $params->get('sbs_width');
$sbs_height 			= $params->get('sbs_height');
$sbs_random 			= $params->get('sbs_random');
$sbs_pause 				= $params->get('sbs_pause');
$sbs_fadeduration 		= $params->get('sbs_fadeduration');
$sbs_cycles 			= $params->get('sbs_cycles');
$sbs_durationoftrans 	= $params->get('sbs_durationoftrans');
$moduleclass_sfx 		= $params->get('moduleclass_sfx');

if(!is_numeric($sbs_width)){$sbs_width = 200;} 
if(!is_numeric($sbs_height)){$sbs_height = 150;} 
if(!is_numeric($sbs_pause)){$sbs_pause = 2500;}
if(!is_numeric($sbs_fadeduration)){$sbs_fadeduration = 500;}
if(!is_numeric($sbs_cycles)){$sbs_cycles = 0;}

if($sbs_random  == "Y")
{
	shuffle($images);
}

$sbs_package = "";
foreach ( $images as $images ) 
{
	$sbs_path = JURI::base().$folder ."/". $images->name;
	$sbs_path = str_replace('\\', '/', $sbs_path);
	$sbs_title = substr($images->name, 0,strrpos($images->name,'.')); 
	$sbs_title = str_replace('_', ' ', $sbs_title);   
	if($sbs_imglink == "" )
	{
		$sbs_imglink =  '#';
	}
	$sbs_package = $sbs_package .'["'.$sbs_path.'", "'.$sbs_imglink.'", "_self", "'.$sbs_title.'"],';
}

?>
<script type="text/javascript">
var sswldgallery=new sswldSlideShow({
	sswld_wrapperid: "super_<?php echo $moduleclass_sfx; ?>",
	sswld_dimensions: [<?php echo $sbs_width; ?>, <?php echo $sbs_height; ?>],
	sswld_imagearray: [<?php echo $sbs_package; ?>],
	sswld_displaymode: {type:'auto', pause:<?php echo $sbs_pause; ?>, cycles:<?php echo $sbs_cycles; ?>, wraparound:false},
	sswld_persist: false,
	sswld_fadeduration: <?php echo $sbs_fadeduration; ?>,
	sswld_descreveal: "<?php echo $sbs_durationoftrans; ?>",
	sswld_togglerid: ""
})
</script>
<div id="super_<?php echo $moduleclass_sfx; ?>"></div>