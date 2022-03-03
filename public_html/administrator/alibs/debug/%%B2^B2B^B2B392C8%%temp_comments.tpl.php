<?php /* Smarty version 2.6.12, created on 2022-02-23 15:11:15
         compiled from rpaneltpl/temp_comments.tpl */ ?>
<?php echo '
<link rel="stylesheet" href="../theme/style.css" type="text/css">
<link rel="stylesheet" type="text/css" href="../theme/chromestyle.css" />
<link href="../theme/styles.css" rel="stylesheet" type="text/css">
<script language="javascript" type="text/javascript" src="../scripts/jquery-1.2.6.js"></script>
<script language="javascript" type="text/javascript" src="../scripts/jquery.validate.js"></script>
'; ?>

<body>
<table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">
<tr>
<td class="admintopheading">Temporary Comments</td>
</tr>
<tr>
<td align="left" valign="top">
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr><form action="temp_comments.php?tdid=<?php echo $this->_tpl_vars['tdid']; ?>
" method="post" >
<td><table width="100%" border="0">
  <tr>
    <td>&nbsp;<textarea name="temp_comments"  rows="16" cols="65"><?php echo $this->_tpl_vars['temp_comments']; ?>
</textarea></td>
  </tr>
  <tr>
    <td style="text-align:center;">&nbsp;<input type="submit" class="btn" value="Update Temporary Comments" /></td>
  </tr>
</table>
</td></form>
</tr>
</table>		  </td>
</tr>
</table>
</body>