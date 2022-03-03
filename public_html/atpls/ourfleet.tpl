 {include file="top.tpl"}
 {include file="header.tpl"}
 <div class="left_panel"><div style="background-color:#CCC; height:431px; padding-top:25px;">
                    	{literal}
        <script language="javascript">AC_FL_RunContent = 0;</script>
		<script src="scripts/AC_RunActiveContent.js" language="javascript"></script>
    <script language="javascript">
	
	if (AC_FL_RunContent == 0) {
		alert("This page requires AC_RunActiveContent.js.");
	} else {
		AC_FL_RunContent(
			'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0',
			'width', '630',
			<!--'height', '375',-->
			'height', '400',
			'src', 'preview',
			'quality', 'high',
			'pluginspage', 'http://www.hybriditservices.com/demos/httglobal-2/macromedia.com/go/getflashplayer',
			'align', 'middle',
			'play', 'true',
			'loop', 'true',
			'scale', 'showall',
			'wmode', 'transparent',
			'devicefont', 'false',
			'id', 'preview',
			
			'name', 'preview',
			'menu', 'true',
			'allowFullScreen', 'false',
			'allowScriptAccess','sameDomain',
			'movie', 'preview',
			'salign', ''
			); //end AC code
	}
	</script>
	{/literal}</div>
                	</div>
 {include file="body_right.tpl"}
 {include file="footer.tpl"}