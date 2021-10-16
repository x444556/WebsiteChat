<?php
	if(isset($_GET['q'])) {
		$msg = $_GET['q'];
		file_put_contents("chat.txt",$msg."\n",FILE_APPEND);
	}
	
	$Text = file("chat.txt");
	for($i=0;$i < count($Text); $i++){
		echo $Text[$i];
	}
?>