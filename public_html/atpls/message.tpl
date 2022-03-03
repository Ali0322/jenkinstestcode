 {include file="top.tpl"}
 {include file="header.tpl"}
 <div style="padding-left:100px;">
 <div class="welcome_panel">
              <div class="heading">{$pgTitle}</div>
              <div class="text"> {if $msg neq ''}{$msg}{/if}{if $error neq ''}{$error}{/if}</div>
              </div> 
      
</div>

<!--{if $smarty.session.user eq ''} 
 {include file="body_right.tpl"}{/if}-->
 <div style="height:320px;"></div>
 {include file="footer.tpl"}