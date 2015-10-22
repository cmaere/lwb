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



// Note. It is important to remove spaces between elements.
?>
<?php // The menu class is deprecated. Use nav instead. ?>




<ul class=" maximenuck" style="position:relative;" >

<?php
foreach ($list as $i => &$item)
{
	
	if($item->title == "Home" || $item->title == "home" || $item->title == "HOME")
	{

?>

					
						<li data-level="1" class="maximenuck item101 current active first level1  fullwidth" style="z-index : 12000;position:static;">
							<a class="maximenuck " href="index9ed2.html?lang=en">
								<img src="/lwb/templates/protostar/templates/poora_temp//images/home.png" alt="Home"/>
							</a>
						</li>
						
						
<?php
	}

	
	else
	{
	
				
			
?>
						<li data-level="1" class="maximenuck item102 parent level1  fullwidth" style="z-index : 11999;position:static;">
<?php
// Render the menu item.
		switch ($item->type) :
			case 'separator':
			case 'url':
			case 'component':
			case 'heading':
			require JModuleHelper::getLayoutPath('mod_menu', 'default_' . $item->type);
			break;

			default:
			require JModuleHelper::getLayoutPath('mod_menu', 'default_url');
			break;
		endswitch;



	// The next item is deeper.
	if ($item->deeper)
	{
		?>
		<div class="floatck" style="position:absolute;left:0;right:0;">
			<div class="maxidrop-top">
				<div class="maxidrop-top2"></div>
			</div>
			<div class="maxidrop-main" style="width:auto;height:266px;">
				<div class="maxidrop-main2">
					<div class="maximenuck2 first "  style="width:240px;float:left;">
						<ul class="maximenuck2">
							<li data-level="2" class="maximenuck maximenuckmodule nodropdown item287 first level2 ">
								<div class="maximenuck_mod">
									<div class="custom"  >
										<p>
											<img src="<?php //echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/overview.png" alt="" />
										</p>
									</div>
									<div class="clr"></div>
								</div>
							</li>
						</ul>
						<div class="clr"></div>
					</div>
					<div class="maximenuck2"  style="width:246px;float:left;">
						<ul class="maximenuck2">
							
							<li data-level="2" class="maximenuck nodropdown item103 level2  fullwidth" style="z-index : 11997;position:static;">
								<a class="maximenuck " href="#">
									<span class="titreck">Organization</span>
								</a>
							</li>
							<li data-level="2" class="maximenuck nodropdown item104 level2  fullwidth" style="z-index : 11996;position:static;">
								<a class="maximenuck " href="#">
									<span class="titreck">History</span>
								</a>
							</li>
							<li data-level="2" class="maximenuck nodropdown item106 level2  fullwidth" style="z-index : 11995;position:static;">
								<a class="maximenuck " href="#">
									<span class="titreck">Senior Management</span>
								</a>
							</li>
							<li data-level="2" class="maximenuck nodropdown item105 level2  fullwidth" style="z-index : 11994;position:static;">
								<a class="maximenuck " href="#">
									<span class="titreck">Organizational Structure</span>
								</a>
							</li>
							<li data-level="2" class="maximenuck maximenuckmodule nodropdown item319 level2 ">
								<div class="maximenuck_mod">
									<div class="custom"  >
										<table style="width: 234px;">
											<tbody>
												<tr>
													<td valign="top">
														<img src="<?php //echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/chairmannew.png" alt="chairmannew" />
													</td>
													<td valign="top">
														<a href="#">Eng.K.A. Ansar</a>
														<div style="font-size: 6pt;">
															<a href="#" target="_self">Chairman</a>
														</div>
													</td>
													<td valign="top">
														<a href="#" target="_self">
															<img src="<?php //echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/gm.png" alt="gm" />
														</a>
													</td>
													<td valign="top">
														<a href="#" target="_self">Eng. B.W.R. Balasuriya
														</a>
														<div style="font-size: 6pt;">
															<a href="#" target="_self">General Manager
															</a>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="clr"></div>
								</div>
							</li>
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
									<img src="<?php //echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/powered_by.png" alt="Contact Details"/>
								</a>
							</li>
							<li data-level="2" class="maximenuck nodropdown item320 level2  fullwidth" style="z-index : 11990;position:static;">
								<a class="maximenuck " href="#">
									<img src="<?php //echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/feedback.png" alt="Feedback"/>
								</a>
							</li>
							<li data-level="2" class="maximenuck nodropdown item265 level2  fullwidth" style="z-index : 11989;position:static;">
								<a class="maximenuck " href="index8b6c.html?option=com_content&amp;view=article&amp;id=115&amp;Itemid=265&amp;lang=en">
									<img src="<?php //echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/icon/1939-large.gif" alt="1939 Call us"/>
								</a>
							</li>
						
															
<?php
	}
	elseif ($item->shallower)
	{
		?>
		
		
		
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
																<img src="<?php //echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/minister.png" alt="minister" />
															</a>
														</td>
													</tr>
													<tr>
														<td style="padding-bottom: 11px; padding-top: 3px;">
															<a href="#">
																<img src="<?php //echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/stateministryEng.png" alt="stateministryEng" />
															</a>
														</td>
													</tr>
													<tr>
														<td style="padding-bottom: 9px; padding-top: 3px;">
															<img src="<?php //echo $this->baseurl . '/templates/' . $this->template ;  ?>/images/SecBusnayakeEng.png" alt="SecBusnayakeEng" />
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
		
		
		
		<?php
	}
	else
	{
		// The next item is on the same level.
		echo '</li>';
	}
		
?>							
							
					
					

<?php
	}
	
}

		
?>

					
</ul>



