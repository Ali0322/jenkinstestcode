<?php 
ob_start();
echo 'dummy content';
if (headers_sent() || !ob_get_length()) {
   echo 'Your sever does not support output buffering';
} else {
   echo 'Output buffering supported'; 
}
ob_clean();
?>