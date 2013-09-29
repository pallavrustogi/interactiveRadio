<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';

	echo "<Say>Sorry, I can't do that yet.</Say>";
	echo '<Redirect>handle-incoming-call.php</Redirect>';
	

	echo '</Response>';
?>
