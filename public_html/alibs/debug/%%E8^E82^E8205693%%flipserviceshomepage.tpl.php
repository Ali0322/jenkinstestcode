<?php /* Smarty version 2.6.12, created on 2016-02-18 04:40:19
         compiled from flipserviceshomepage.tpl */ ?>
<!-- START SECTION 3 -->
  <section class="w-section section">
    <div class="w-container">
      <div>
        <div class="w-row">
        <div class="col-md-12 col-md-12">
		
		<div class="w-col w-col-12 w-col-stack col-spc">
            <div class="w-embed">
              <div class="accordion ui-accordion ui-widget ui-helper-reset">
                <!-- Accordion 1 -->
               <?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['servicesdata']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			   <h3 class="ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all"><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span></span>
			   <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne<?php echo $this->_tpl_vars['servicesdata'][$this->_sections['q']['index']]['id']; ?>
" aria-expanded="false">
                    <?php echo $this->_tpl_vars['servicesdata'][$this->_sections['q']['index']]['title']; ?>

                </a>
			   </h3>
                <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" style="display: block;">
                  <p><?php echo $this->_tpl_vars['servicesdata'][$this->_sections['q']['index']]['content']; ?>
</p>
                </div>
				 <?php endfor; endif; ?>
              </div>
            </div>
        </div>

        </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END SECTION 3 -->