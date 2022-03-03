<?php /* Smarty version 2.6.12, created on 2014-12-17 16:15:39
         compiled from driver_login_byref.tpl */ ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 
<div class="logo" style="width:1000px;"><a href="index.php"><img src="images/van.png" alt="<?php echo $this->_tpl_vars['site_title']; ?>
 Logo" border="0"  title="<?php echo $this->_tpl_vars['site_title']; ?>
 Logo" style="display:block;margin:auto;" /></a></div> 
 <div class="form_panel1" style="width:690px; margin:auto; margin-top:250px; text-align:center;">
        <div class="heading"><img src="images/login_icon.png" alt="" />Driver Login</div>
        <div class="form_bg">                               	
        <div class="form1">
        <form  method="post" name="loginform" id="loginform" action="driver_login_byref.php"><br />
        <table cellpadding="5" align="left" cellspacing="4" width="70%" style="margin:auto; float:none;">
        <tr>
        <td colspan="2" align="center"><?php echo $this->_tpl_vars['error']; ?>
</td>
        </tr>                     	
        <tr>
        <td class="label">User Name:</td>
        <td><input type="text" name="username" id="username" value="<?php echo $this->_tpl_vars['username']; ?>
" class="txt_box required" /></td>
        <td></td>
        </tr>
        <tr>
        <td class="label">Password:</td>
        <td><input type="password" name="pwd" id="pwd" class="txt_box required"/></td>
        <td></td>
        </tr>
        <tr>
        <td class="label"></td>
        <td>
        <input type="submit" value="Login" id="submit" name="submit" class="btn">
        <input type="reset" value="Reset" class="btn">
       </td>
        <td></td>
        </tr>
        </table>
        </form>
        </div>
        </div>
        </div>
  