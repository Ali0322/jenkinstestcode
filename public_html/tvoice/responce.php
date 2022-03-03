<?php  echo '<?xml version="1.0" encoding="UTF-8"?>
<Response>
    <Gather action="http://demo5.nemtclouddispatch.com/tvoice/process_gather.php?id='.$_REQUEST['id'].'" method="GET">
        <Say>
            Dear Bryan Adam, you have a pending trip scheduled today.
		</Say>	
		<Pause  length="1"></Pause>
		<Say>	
			 Please press 1 for confirmation  
        </Say>
		<Pause  length="1"></Pause>
		<Say>
            press 2 for cancellation  
        </Say>
    </Gather>
    <Say>We didn`t receive any input. Goodbye!</Say>
</Response>';

?>

