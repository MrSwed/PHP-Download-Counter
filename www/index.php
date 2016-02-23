<?php
require_once('config.php');

if (isset($_REQUEST['file'])) {
	$filename = $_REQUEST['file'];
	$filepath = $filefolder . $filename;
	if (!empty($statsfolder)) {
		$statspath = $statsfolder.$filename.$stat_ext;
		$statsdir = dirname($statspath);
		if (!is_dir($statsdir)) mkdir($statsdir, 0777, true);
	}
	if (!empty($countsfolder)) {
		$countspath = $countsfolder.$filename.$count_ext;
		$countsdir = dirname($countspath);
		if (!is_dir($countsdir)) mkdir($countsdir, 0777, true);
	}
	

/*	debug * /
	echo <<<EF
<pre>
 $statsdir
	$filename
	$filepath
	$statspath
EF;
	
	print_r($_REQUEST);
	print_r($_SERVER);
	exit;
	
/*	debug */
	
	if (file_exists($filepath)) {
		if (!empty($statspath)) @file_put_contents($statspath, $clientInfo, FILE_APPEND);
		if (!empty($countspath)) {
			$count = 0;
			if (file_exists($countspath)) $count = @file_get_contents($countspath);
			$count++;
			@file_put_contents($countspath,$count);
		}
		header("Location: " . $_SERVER["REQUEST_URI"]."?count");
	}
}
exit('Bad request');
?>