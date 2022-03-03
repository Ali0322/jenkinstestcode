<?php
/**
 * Usage Examples
 *
 * @author  Sebastian Borggrewe <me@sebastianborggrewe.de>
 * @since   2010/01/24
 * @package APNP
 */

error_reporting(E_ALL | E_STRICT);
include 'APNSBase.php';
include 'APNotification.php';
include 'APFeedback.php';

try{

  # Notification Example
  $notification = new APNotification('development');
  $notification->setDeviceToken("b74067155debb06a502cbf9052c9bd11ae704582a352e910ada6536d902d03ad");
  $notification->setMessage("Test Push");
  $notification->setBadge(1);
  $notification->setPrivateKey('certificates/HBMDevFeb16SSLFinal.pem');
  $notification->setPrivateKeyPassphrase('HYBRID');
  $notification->send();

  # Feedback Example
  $feedback = new APFeedback('development');
  $feedback->setPrivateKey('certificates/HBMDevFeb16SSLFinal.pem');
  $feedback->setPrivateKeyPassphrase('HYBRID');
  $feedback->receive();

}catch(Exception $e){
  echo $e->getLine().': '.$e->getMessage();
}
?>
