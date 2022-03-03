<?php /* Smarty version 2.6.12, created on 2014-06-06 19:10:34
         compiled from body_right.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'body_right.tpl', 4, false),)), $this); ?>
<div class="right_panel">	
                    	<div class="testimonial">
                        	<div class="testi_txt">
                            	<?php echo ((is_array($_tmp=$this->_tpl_vars['testi'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 250) : smarty_modifier_truncate($_tmp, 250)); ?>
 
                            </div>
                            <div class="name"><?php echo $this->_tpl_vars['author']; ?>
</div>
                        </div>
						<div class="icons_three"><div class="bottom_menu">
                    	<ul>
                        	<li><img src="images/about_icon.png" alt="" /><br /><a href="aboutus.php">About Us</a></li>
                            <li><img src="images/career_icon.png" alt="" /><br /><a href="career.php">Career</a></li>
                            <li><img src="images/contact_icon.png" alt="" /><br /><a href="contactus.php">Contact Us</a></li>
                        </ul>
                    </div></div>
					<div class="feature_main">
					<div class="feature_top"><img src="images/feature_top.png" border="0" /></div>
					<div class="feature_cen">
					<div class="featr_txt">
					<ul>
					<li>Wheelchair Transportation</li>
					<li>Stretcher Transportation</li>
					<li>One-way/Round Trip base cost wheelchair trans</li>
					<li>Doctor's Appointments</li>
					<li>Non-Emergency Hospital Visits</li>
					<li>Facility Discharge</li>
					<li>Dialysis</li>
					</ul>
					</div>
					</div>
					<div class="feature_bottom"><img src="images/feature_bottom.png" border="0" /></div>
					</div>
                    </div>