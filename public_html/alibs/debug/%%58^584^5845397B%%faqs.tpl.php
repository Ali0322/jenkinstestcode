<?php /* Smarty version 2.6.12, created on 2016-02-18 09:47:03
         compiled from faqs.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<section class="section gray">
    <div class="w-container">
      <div class="top-title">
        <div class="title-txt">
        <h2>Frequently Asked Questions</h2>
        </div>
        <div class="divider"></div>
        <div class="w-col-12">
        <div class="w-col-12">
                    
                <div class="w-embed">
					<div class="accordion ui-accordion ui-widget ui-helper-reset">
						<?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['services']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['q']['show'] = true;
$this->_sections['q']['max'] = $this->_sections['q']['loop'];
$this->_sections['q']['step'] = 1;
$this->_sections['q']['start'] = $this->_sections['q']['step'] > 0 ? 0 : $this->_sections['q']['loop']-1;
if ($this->_sections['q']['show']) {
    $this->_sections['q']['total'] = $this->_sections['q']['loop'];
    if ($this->_sections['q']['total'] == 0)
        $this->_sections['q']['show'] = false;
} else
    $this->_sections['q']['total'] = 0;
if ($this->_sections['q']['show']):

            for ($this->_sections['q']['index'] = $this->_sections['q']['start'], $this->_sections['q']['iteration'] = 1;
                 $this->_sections['q']['iteration'] <= $this->_sections['q']['total'];
                 $this->_sections['q']['index'] += $this->_sections['q']['step'], $this->_sections['q']['iteration']++):
$this->_sections['q']['rownum'] = $this->_sections['q']['iteration'];
$this->_sections['q']['index_prev'] = $this->_sections['q']['index'] - $this->_sections['q']['step'];
$this->_sections['q']['index_next'] = $this->_sections['q']['index'] + $this->_sections['q']['step'];
$this->_sections['q']['first']      = ($this->_sections['q']['iteration'] == 1);
$this->_sections['q']['last']       = ($this->_sections['q']['iteration'] == $this->_sections['q']['total']);
?>
						<!-- Accordion 1 -->
							<h3 class="ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all"><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span></span>
							 <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne<?php echo $this->_tpl_vars['services'][$this->_sections['q']['index']]['id']; ?>
">
							   <?php echo $this->_tpl_vars['services'][$this->_sections['q']['index']]['question']; ?>

							</a>
							</h3>
							<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" style="display: block;">
							  <p><?php echo $this->_tpl_vars['services'][$this->_sections['q']['index']]['answer']; ?>
</p>
							</div>
						<?php endfor; endif; ?>
					 </div>
				</div>  
                            <p class="btn btn-primary btn-lg" style="background-color:#CCC;" ><a href="contactus.php">Still Have Question? </a></p>
                            
                          
                        </div><!--/#accordion1-->
                    </div>
               
               </div>
        </div>
      </div>
      <div>
      </div>
     </div> 
    </section>
               
               




<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>