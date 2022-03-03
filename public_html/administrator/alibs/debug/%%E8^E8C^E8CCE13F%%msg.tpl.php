<?php /* Smarty version 2.6.12, created on 2020-10-23 10:21:12
         compiled from vehtpl/msg.tpl */ ?>
<table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">
        <tr>
          <td align="left" class="labeltxt"><?php if ($this->_tpl_vars['msgs'] != ''): ?> <?php echo $this->_tpl_vars['msgs']; ?>
 <?php endif; ?>
		  <?php if ($this->_tpl_vars['errors'] != ''): ?> <?php echo $this->_tpl_vars['errors']; ?>
 <?php endif; ?> </td>
        </tr>
</table>