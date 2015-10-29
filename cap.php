<?php 
$url = "http://www.bing.com/images/search?q=".urlencode($_GET['word']);

$content = file_get_contents($url);
preg_match_all('/http:\/\/([^"]+).(jpg|png|gif)/', $content , $data, PREG_PATTERN_ORDER);

$DATA_FINAL['collections'] = array();
foreach ($data[0] as $_URL) {
	if(strpos($_URL,'wikimedia') !== false){
		$_URL = '/error.png';
	}
  	array_push($DATA_FINAL['collections'], $_URL);
}

echo json_encode($DATA_FINAL);
?>
