<?php /* Smarty version 2.6.12, created on 2016-03-01 08:47:02
         compiled from services_homepage.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'services_homepage.tpl', 13, false),)), $this); ?>
 <!-- START SECTION 1 -->
  <section class="w-section section">
   <div class="w-container">
    <div class="w-row">
      <div class="w-col w-col-4">
        <div class="flip-container">
                    <div class="front">
                      <div class="ico-flip">
                            <i class="fa fa-ambulance"></i>
                          </div>
                      <div class="div-spc">
                        <h5><?php echo $this->_tpl_vars['servicesdata']['0']['title']; ?>
</h5>
                        <p><?php echo ((is_array($_tmp=$this->_tpl_vars['servicesdata']['0']['excerpt'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 140) : smarty_modifier_truncate($_tmp, 140)); ?>
</p>
                      </div>
                    </div>
        
        <div class="back">
              <div>
                <h5 class="white-orignal head"><?php echo $this->_tpl_vars['servicesdata']['0']['title']; ?>
</h5>
                <p class="white-orignal head"><?php echo ((is_array($_tmp=$this->_tpl_vars['servicesdata']['0']['excerpt'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 140) : smarty_modifier_truncate($_tmp, 140)); ?>
</p>
              </div>
              <div class="div-spc"><a class="button btn-transparent" href="#">Learn More</a>
              </div>
            </div>
        
        </div>
      </div>
      <div class="w-col w-col-4">
        <div class="flip-container">
            <div class="front">
             <div class="ico-flip">
                    <i class="fa fa-ambulance"></i>
                  </div>
              <div class="div-spc">
                <h5><?php echo $this->_tpl_vars['servicesdata']['1']['title']; ?>
</h5>
                <p><?php echo ((is_array($_tmp=$this->_tpl_vars['servicesdata']['1']['excerpt'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 140) : smarty_modifier_truncate($_tmp, 140)); ?>
</p>
              </div>
            </div>
            <div class="back">
              <div>
                <h5 class="white-orignal head"><?php echo $this->_tpl_vars['servicesdata']['1']['title']; ?>
</h5>
                <p class="white-orignal head"><?php echo ((is_array($_tmp=$this->_tpl_vars['servicesdata']['1']['excerpt'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 140) : smarty_modifier_truncate($_tmp, 140)); ?>
</p>
              </div>
              <div class="div-spc"><a class="button btn-transparent" href="#">Learn More</a>
              </div>
            </div>
        </div>
      </div>
      <div class="w-col w-col-4">
        <div class="flip-container">
            <div class="front">
              <div class="ico-flip">
                <i class="fa fa-wheelchair"></i></div>
              <div class="div-spc">
                <h5><?php echo $this->_tpl_vars['servicesdata']['2']['title']; ?>
</h5>
                <p><?php echo ((is_array($_tmp=$this->_tpl_vars['servicesdata']['2']['excerpt'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 140) : smarty_modifier_truncate($_tmp, 140)); ?>
</p>
              </div>
            </div>
            <div class="back">
              <div>
                <h5 class="white-orignal head"><?php echo $this->_tpl_vars['servicesdata']['2']['title']; ?>
</h5>
                <p class="white-orignal head"><?php echo ((is_array($_tmp=$this->_tpl_vars['servicesdata']['2']['excerpt'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 140) : smarty_modifier_truncate($_tmp, 140)); ?>
</p>
              </div>
              <div class="div-spc"><a class="button btn-transparent" href="#">Learn More</a>
              </div>
            </div>
        </div>
      </div>
    </div> 
      </div>
  </section>
  <!-- END SECTION 1 -->