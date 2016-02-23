<?php

$file = isset($file)?$file:$_REQUEST["file"];
if (empty($file)) return "";

$basefolder = "./";

require_once($basefolder.'config.php');

$filefolder = preg_replace("/^\.\.\//","",$filefolder);
$countfile = $basefolder.$countsfolder.str_replace($filefolder,'',$file).$count_ext;

$count = 0;
if (file_exists($countfile)) $count = @file_get_contents($countfile);

if (isset($_REQUEST["file"])) echo $count;
return $count;

?>