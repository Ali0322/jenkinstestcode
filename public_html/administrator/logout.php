<?PHP
/* *************************** *
	   * Created On : 27th May,2009 
	   * Coded By : Abrar Kiyani
	   * All Rights Reserved 2009 by : HITS (Hybrid IT Services) 
	   * MMTp://www.hybriditservices.com/demos/MMTglobal-2/hybridTracktrans.com
	   *************************** */
	include_once('DBAccess/Database.inc.php');
	unset($_SESSION['allowUser']);
	session_destroy();
	
	//header("Location: login.php")
	echo '<script>location.href="login.php";</script>';
    exit;	
	
?>