<?php

/*
 * command line and online service
 */
echo "welcome in nbp scheduler step one";
//check if something came from cli
//if(isset($argv[1]) && !empty($argv[1]))
//{
	$json = json_decode(file_get_contents('/home/pi/nbp/tab_a/raw/20190214.json', FILE_USE_INCLUDE_PATH));
	echo "<pre>".print_r($json, 1)."</pre>";
  
//}
?>
