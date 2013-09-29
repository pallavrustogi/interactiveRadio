<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';

	echo "<Say>Sorry, I can't do that yet.</Say>";
	echo '<Redirect>https://raw.github.com/pallavrustogi/interactiveRadio/master/img/handle-user-input.php</Redirect>';
	

	echo '</Response>';
?>
