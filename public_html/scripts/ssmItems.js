<!--



/*

Configure menu styles below

NOTE: To edit the link colors, go to the STYLE tags and edit the ssm2Items colors

*/

YOffset=150; // no quotes!!

XOffset=0;

staticYOffset=30; // no quotes!!

slideSpeed=20 // no quotes!!

waitTime=100; // no quotes!! this sets the time the menu stays out for after the mouse goes off it.

menuBGColor="white";

menuIsStatic="yes"; //this sets whether menu should stay static on the screen

menuWidth=200; // Must be a multiple of 10! no quotes!!

menuCols=2;

hdrFontFamily="verdana";

hdrFontSize="2";

hdrFontColor="white";

hdrBGColor="#293462";

hdrAlign="left";

hdrVAlign="center";

hdrHeight="1";

linkFontFamily="Verdana";

linkFontSize="0";

linkBGColor="#ffffff";

linkOverBGColor="#e4e4e4";

linkTarget="_top";

linkAlign="Left";

barBGColor="#404347";

barFontFamily="Verdana";

barFontSize="2";

barFontColor="white";

barVAlign="center";

barWidth=20; // no quotes!!

barText="Main Menu"; // <IMG> tag supported. Put exact html for an image to show.



///////////////////////////



// ssmItems[...]=[name, link, target, colspan, endrow?] - leave 'link' and 'target' blank to make a header

ssmItems[0]=["Main Menu"] //create header



ssmItems[1]=["<IMG border='0' SRC='images/myaccount.png' alt='' />", "myaccount.php",""]

ssmItems[2]=["<IMG border='0' SRC='images/myrequest.png' alt='' />", "myrequests.php",""]

ssmItems[3]=["<a href='trip_request.php' ><IMG border='0' SRC='images/addrequest.png' alt='' />", "getrequests.php?id=0",""]



ssmItems[4]=["<IMG border='0' SRC='images/casemanager.png' alt='' />", "casemanagers.php",""]

ssmItems[5]=["<IMG border='0' SRC='images/myhistory.png' alt='' />", "myreports.php",""]



ssmItems[6]=["<IMG border='0' SRC='images/clinictrip.png' alt='' />", "clinictrip.php",""]

ssmItems[7]=["<IMG border='0' SRC='images/testimonials.png' alt='' />", "testimonials.php",""]



ssmItems[8]=["<IMG border='0' SRC='images/logout.png' alt='' />", "logout.php",""]

buildMenu();



//-->