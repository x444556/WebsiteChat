<?php
	$Text = file("chat.txt");
	for($i=0;$i < count($Text); $i++){
		echo $Text[$i];
	}
?>