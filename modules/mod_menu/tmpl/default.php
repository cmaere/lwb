<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$cha		= JFactory::getDocument();
$cha_base = JUri::base();
$cha_tmpl = "protostar";
$app = JFactory::getApplication();
$menu = $app->getMenu();



//var_dump($menu_items);

//die();
// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');

?>




<ul class=" maximenuck" style="position:relative;" >

<?php
$x = 102;
$y = 0;
foreach ($list as $i => &$item)
{
	

	
	
	
	if($item->title == "Home" || $item->title == "home" || $item->title == "HOME")
	{

?>

					
						<li data-level="1" class="maximenuck item101 current active first level1  fullwidth" style="z-index : 12000;position:static;">
							<a class="maximenuck " href="<?php echo $cha_base;?>">
								<img src="<?php echo $cha_base . 'templates/' . $cha_tmpl ;  ?>/images/home.png" alt="Home"/>
							</a>
						</li>
						
						
<?php
	}

	
	
	else
	{
	
				
			
?>
						<li data-level="1" class="maximenuck item<?php echo $x; ?> parent level1  fullwidth" style="z-index : 11999;position:static;">
							<a class="maximenuck " href="#">
								<span class="titreck"><?php echo $item->title; ?></span>
							</a>
							
							
	<!-- charlie dropdown menu -->						
		<div class="floatck" style="position:absolute;left:0;right:0;">
			<div class="maxidrop-top">
				<div class="maxidrop-top2"></div>
			</div>
			<div class="maxidrop-main" style="width:auto;height:266px;">
				<div class="maxidrop-main2">
					
					
					<?php 
					$cha_position = "cha-mainmenu-item".$y."-position-1";
					//echo $y;
					if ($cha->countModules($cha_position)) : ?>
					<div class="maximenuck2 first "  style="width:240px;float:left;">
						<ul class="maximenuck2">
							<li data-level="2" class="maximenuck maximenuckmodule nodropdown item287 first level2 ">
								<div class="maximenuck_mod">
									<div class="custom"  >
										
									<?php
									          
									          $modules =& JModuleHelper::getModules($cha_position);
									          foreach ($modules as $module){
									             echo JModuleHelper::renderModule($module);
									          }
									          ?>
											
									</div>
									<div class="clr"></div>
								</div>
							</li>
						</ul>
						<div class="clr"></div>
					</div>
					<?php endif; ?>
					<div class="maximenuck2"  style="width:246px;float:left;">
						<ul class="maximenuck2">
							
							<?php
							
								$menu_items = $menu->getItems('parent_id', $item->id);
								
								if(sizeof($menu_items) > 0)
								{
									foreach ($menu_items as $j => &$cha_item)
									{
										
							?>
							
							<li data-level="2" class="maximenuck nodropdown item<?php echo $x; ?> level2  fullwidth" style="z-index : 11997;position:static;">
								<a class="maximenuck " href="<?php echo $cha_item->route; ?>">
									<span class="titreck"><?php echo $cha_item->title; ?></span>
								</a>
							</li>
							
							<?php
										$x++;
									}
								}
							?>
							
							
						</ul>
						<div class="clr"></div>
					</div>
					<div class="maximenuck2"  style="width:220px;float:left;">
						<ul class="maximenuck2">
							<li data-level="2" class="maximenuck nodropdown item132 level2  fullwidth" style="z-index : 11992;position:static;">
								<a class="maximenuck " href="#">
									<span class="titreck">Strength &amp; Technical Capabilities</span>
								</a>
							</li>
							<li data-level="2" class="maximenuck nodropdown item264 level2  fullwidth" style="z-index : 11991;position:static;">
								<a class="maximenuck " href="#">
									<img src="<?php echo $cha_base . 'templates/' . $cha_tmpl ;  ?>/images/powered_by.png" alt="Contact Details"/>
								</a>
							</li>
							<li data-level="2" class="maximenuck nodropdown item320 level2  fullwidth" style="z-index : 11990;position:static;">
								<a class="maximenuck " href="#">
									<img src="<?php echo $cha_base . 'templates/' . $cha_tmpl ;  ?>/images/feedback.png" alt="Feedback"/>
								</a>
							</li>
							<li data-level="2" class="maximenuck nodropdown item265 level2  fullwidth" style="z-index : 11989;position:static;">
								<a class="maximenuck " href="index8b6c.html?option=com_content&amp;view=article&amp;id=115&amp;Itemid=265&amp;lang=en">
									<img src="<?php echo $cha_base . 'templates/' . $cha_tmpl ;  ?>/images/icon/1939-large.gif" alt="1939 Call us"/>
								</a>
							</li>
						
															

		
		
		
							</ul>
							<div class="clr"></div>
						</div>
						<div class="maximenuck2"  style="width:258px;float:left;">
							<ul class="maximenuck2"><li data-level="2" class="maximenuck maximenuckmodule nodropdown item133 last level2 ">
								<div class="maximenuck_mod">
									<div class="moduletable">
										<h3>Ministry</h3>
										<div class="custom"  >
											<table>
												<tbody>
													<tr>
														<td style="padding-bottom: 11px; padding-top: 3px;">
															<a href="#">
																<img src="<?php echo $cha_base . 'templates/' . $cha_tmpl ;  ?>/images/minister.png" alt="minister" />
															</a>
														</td>
													</tr>
													<tr>
														<td style="padding-bottom: 11px; padding-top: 3px;">
															<a href="#">
																<img src="<?php echo $cha_base . 'templates/' . $cha_tmpl ;  ?>/images/stateministryEng.png" alt="stateministryEng" />
															</a>
														</td>
													</tr>
													<tr>
														<td style="padding-bottom: 9px; padding-top: 3px;">
															<img src="<?php echo $cha_base . 'templates/' . $cha_tmpl ;  ?>/images/SecBusnayakeEng.png" alt="SecBusnayakeEng" />
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="clr"></div>
								</div>
							</li>
						</ul>
						<div class="clr"></div>
					</div>
					<div class="clr"></div>
				</div>
			</div>
			<div class="maxidrop-bottom">
				<div class="maxidrop-bottom2"></div>
			</div>
		</div>
		
		
	
		
	</li>
						
							
					
					

<?php 


	}
	
	$y++;
	$x++;
	
}

		
?>

					
</ul>



