 {include file="top.tpl"}
<div class="logo" style="width:1000px;"><a href="index2.php"><img src="images/van.png" alt="{$site_title} Logo" border="0"  title="{$site_title} Logo" style="display:block;margin:auto;" /></a></div> 
 <div class="form_panel1" style="width:590px; margin:auto; margin-top:250px; text-align:center;">
        <div class="heading"><img src="images/login_icon.png" alt="" />Facility / Case Manager </div>
        <div class="form_bg">                               	
        <div class="form1">
   <!--     <div class="login_heading">Login Here</div>-->
        <form  method="post" name="loginform" id="loginform" action="login.php">
        <table cellpadding="5" align="left" cellspacing="4" width="62%" style="margin:auto;float:none; float:left;">
        <tr>
        <td colspan="2" align="center">{$error}</td>
        </tr>                     	
        <tr>
        <td class="label">User Name:</td>
        <td><input type="text" name="username" id="username" value="{$username}" class="txt_box required" /></td>
        <td></td>
        </tr>
        <tr>
        <td class="label">Password:</td>
        <td><input type="password" name="pwd" id="pwd" class="txt_box required"/></td>
        <td></td>
        </tr>
       <!-- <tr>
        <td class="label"></td>
        <td> <br />
        Not a member. <a href="signup.php">Signup Now</a>
        </td>
        <td></td>
        </tr>-->
        <tr>
        <td class="label"></td>
        <td>
        <input type="submit" value="Submit" id="submit" name="submit" class="btn">
        <input type="reset" value="Reset" class="btn">
       </td>
        <td></td>
        </tr>
        </table>
        </form>
        </div>
        </div>
        </div>
  
                   