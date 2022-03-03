<?php /* Smarty version 2.6.12, created on 2014-07-11 19:51:33
         compiled from testimonials.tpl */ ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <?php if ($_SESSION['user'] != ''): ?><div style="padding-left:100px;"><?php endif; ?>
 <div class="left_panel">
    <?php if ($this->_tpl_vars['record'] != '0'): ?>
    
    <?php unset($this->_sections['a']);
$this->_sections['a']['name'] = 'a';
$this->_sections['a']['loop'] = is_array($_loop=$this->_tpl_vars['data2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['a']['show'] = true;
$this->_sections['a']['max'] = $this->_sections['a']['loop'];
$this->_sections['a']['step'] = 1;
$this->_sections['a']['start'] = $this->_sections['a']['step'] > 0 ? 0 : $this->_sections['a']['loop']-1;
if ($this->_sections['a']['show']) {
    $this->_sections['a']['total'] = $this->_sections['a']['loop'];
    if ($this->_sections['a']['total'] == 0)
        $this->_sections['a']['show'] = false;
} else
    $this->_sections['a']['total'] = 0;
if ($this->_sections['a']['show']):

            for ($this->_sections['a']['index'] = $this->_sections['a']['start'], $this->_sections['a']['iteration'] = 1;
                 $this->_sections['a']['iteration'] <= $this->_sections['a']['total'];
                 $this->_sections['a']['index'] += $this->_sections['a']['step'], $this->_sections['a']['iteration']++):
$this->_sections['a']['rownum'] = $this->_sections['a']['iteration'];
$this->_sections['a']['index_prev'] = $this->_sections['a']['index'] - $this->_sections['a']['step'];
$this->_sections['a']['index_next'] = $this->_sections['a']['index'] + $this->_sections['a']['step'];
$this->_sections['a']['first']      = ($this->_sections['a']['iteration'] == 1);
$this->_sections['a']['last']       = ($this->_sections['a']['iteration'] == $this->_sections['a']['total']);
?>  
    <div class="welcome_panel">
    <div class="heading"><?php echo $this->_tpl_vars['data2'][$this->_sections['a']['index']]['fname']; ?>
 <?php echo $this->_tpl_vars['data2'][$this->_sections['a']['index']]['lname']; ?>
</div>
    
    <div class="text">
    <?php echo $this->_tpl_vars['data2'][$this->_sections['a']['index']]['message']; ?>

    </div>
    <div class="more_link"><a href="#"></a></div>
    </div>
    <?php endfor; endif; ?>
    <?php endif; ?>
    
    <div class="welcome_panel">
    <div class="heading"><?php echo $this->_tpl_vars['HeadingTitle']; ?>
</div>
    <div class="text"><?php echo $this->_tpl_vars['content']; ?>
</div>
    </div>
    <?php if ($_SESSION['user'] != ''): ?>
    <div style=" float:left; width:90%; margin-top:20px; " align="center">
    <form name="testimonialform" id="testimonialform" action="testimonials.php" method="post">
    <table width="99%" border="0" cellspacing="2" cellpadding="2" align="left" style="text-align:left;">
    <tr>
  <td width="44%" valign="top" class="form_labels">First Name: <span class="SmallnoteTxt">* </span></td>
  <td width="56%"><input maxlength="20" type="text" name="fname" id="fname" value="<?php echo $this->_tpl_vars['fname']; ?>
" class="txt_box2 required chars" /></td>
    </tr>
     <tr>
     <td valign="top" class="form_labels">Last Name: <span class="SmallnoteTxt">* </span></td>
    <td><input type="text" name="lname" id="lname" value="<?php echo $this->_tpl_vars['lname']; ?>
" class="txt_box2 required chars" maxlength="20" /></td>
     </tr>
     <tr>
    <td valign="top" class="form_labels">Message: <span class="SmallnoteTxt">* </span></td>
    <td><textarea name="message" cols="25" rows="6" id="message" class="txt_area  required"><?php echo $this->_tpl_vars['message']; ?>
</textarea></td>
    </tr>
    <tr>
    <td valign="top">&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
    <tr>
    <td valign="top">&nbsp;</td>
    <td>
    <input type="<?php if ($_SESSION['user'] == ''): ?>button<?php else: ?>submit<?php endif; ?>" name="submit" value="Submit" <?php if ($_SESSION['user'] == ''): ?>onclick="alert('You need to register to post the testimonial. \n Thank you!'); return false;"<?php endif; ?>  class="btn"/>
    <input type="reset" name="reset" value="Reset" class="btn"  />			  </td>
    </tr>
    </table>
    </form>
    </div>                    
    <?php endif; ?>
    </div>
    <?php if ($_SESSION['user'] != ''): ?></div><?php else: ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "body_right.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> <?php endif; ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>