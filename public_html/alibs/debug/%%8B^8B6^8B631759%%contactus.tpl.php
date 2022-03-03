<?php /* Smarty version 2.6.12, created on 2016-02-17 07:01:55
         compiled from contactus.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

            
            <section class="section gray">
    <div class="w-container">
      <div class="top-title">
        <div class="title-txt">
        <h1>Drop Your Message</h1>
        </div>
        <div class="divider"></div>
        <div class="w-col-12">
        <div class="w-col-12">
            
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form11" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                <div class="row">
						<div class="col-sm-6" style="margin-top:20px;">
							<div class="input-group">
								<span class="input-group-addon">Name *</span>
								<input type="text" name="name" class="form-control" placeholder="Enter Your Name" required="required">								
							</div>
						</div>
						<div class="col-sm-6" style="margin-top:20px;">
							<div class="input-group">
							<span class="input-group-addon">Email *</span>
							<input type="text" name="email" class="form-control" placeholder="Enter Your Email" required="required">
							</div>
						</div>
					</div>
                    <div class="row">
						<div class="col-sm-12" style="margin-top:20px;">
							<div class="input-group">
								<span class="input-group-addon">Message *</span>
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Enter Your Message"></textarea>
							</div>
						</div>
							</div>
                       <div class="row">     
                       <div class="form-group" style="margin-top:20px; margin-left:14px;">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Send Message</button>
                        </div>
                   </div>
                </form> 
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