<?php /* Smarty version 2.6.12, created on 2016-02-22 09:23:00
         compiled from ourgallery.tpl */ ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<section class="section gray">
    <div class="w-container">
      <div class="top-title">
        <div class="title-txt">
        <h2>Our Gallery</h2>
        </div>
        <div class="divider"></div>
        <div class="w-col-12">
        <div class="w-col-12">
           <!---------------------------------our Gallery-------------------------------->
			<div class="container">
		
			
		<div class="main">
			<div class="gamma-container gamma-loading" id="gamma-container">

				<ul class="gamma-gallery">
					<?php unset($this->_sections['q']);
$this->_sections['q']['name'] = 'q';
$this->_sections['q']['loop'] = is_array($_loop=$this->_tpl_vars['gallery']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<li>
							<div data-alt="img03" data-description="<h3><?php echo $this->_tpl_vars['gallery'][$this->_sections['q']['index']]['title']; ?>
</h3>" data-max-width="1800" data-max-height="1350">
								<div data-src="<?php echo $this->_tpl_vars['gallery'][$this->_sections['q']['index']]['image']; ?>
" data-min-width="1300"></div>
								<div data-src="<?php echo $this->_tpl_vars['gallery'][$this->_sections['q']['index']]['image']; ?>
" data-min-width="1000"></div>
								<div data-src="<?php echo $this->_tpl_vars['gallery'][$this->_sections['q']['index']]['image']; ?>
" data-min-width="700"></div>
								<div data-src="<?php echo $this->_tpl_vars['gallery'][$this->_sections['q']['index']]['image']; ?>
" data-min-width="300"></div>
								<div data-src="<?php echo $this->_tpl_vars['gallery'][$this->_sections['q']['index']]['image']; ?>
" data-min-width="200"></div>
								<div data-src="<?php echo $this->_tpl_vars['gallery'][$this->_sections['q']['index']]['image']; ?>
" data-min-width="140"></div>
								<div data-src="<?php echo $this->_tpl_vars['gallery'][$this->_sections['q']['index']]['image']; ?>
"></div>
								<noscript>
									<img src="<?php echo $this->_tpl_vars['gallery'][$this->_sections['q']['index']]['image']; ?>
" alt="img03"/>
								</noscript>
							</div>
						</li>
					<?php endfor; endif; ?>	
					
				</ul>

			<div class="gamma-overlay"></div>

		</div>

			</div><!--/main-->
		</div>
		   <!-----------------------------------our Gallery End---------------------------->
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