{include file=loginhead.tpl}

{literal}

<script type="text/javascript">

<!-- jquery login form validation -->	

$(document).ready(function() {

$("#loginform").validationEngine();

//$("#capture").realperson();

});

function hidden(){

$("#showMe").hide("slow");					

}

</script>

{/literal}	

<div class="main_container" align="center">

<!-- display error messages (if any) -->

{if $msg neq ''}

<div class="notification error png_bg" id="showMe">

<a href="javascript:hidden();" class="close"><img src="images/icons/cross_grey_small.png" border="0" title="Close this notification" alt="close" /></a>

<div>{$msg}</div>

</div>

{/if}

	<div class="login_panel">



<!-- login form start from here -->

		<div class="form_cl">

			<form action="login.php" name="loginform" id="loginform" method="post">

				<div class="user_name">

				  <input name="adminname" id="adminname" type="text" class="validate[required,custom[noSpecialCaracters],length[0,20]] login_input" value="{$adminname}" maxlength="20" />

				</div>

				<div class="password_login">

					<input name="adminpass" id="adminpass" type="password" class="validate[required,length[5,15]] login_input" />

				</div>

			  	<!--<div class="capture">
				<div style="float:left;">
				<input name="pincode" class="validate[required] captcha_input" id="pincode" size="28" />
				</div>
				<div style="float:right">
<img src="CaptchaSecurityImages.php?width=100&height=40&character=5"  />
</div>
								
				<input name="capture" type="text" class="validate[required] captcha_input" id="capture" maxlength="6" />

				</div>-->

                <div class="btn_login">                

				<input  class="login_btn_cl" type="submit" value=""/>

                </div>

			</form>

            <!--<div class="login_forget"><a href="" >forget your password ?</a></div>-->

<!-- login form end here -->

		</div>

	</div>

</div>

<!-- mian coding End from here -->

