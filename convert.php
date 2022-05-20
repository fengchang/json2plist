<?php

try
{
	include(__DIR__.'/Converter.php');

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$str = trim($_POST['content']);
		if($_POST['do']=='json2plist')
		{
			$con = new Converter();
			@$con->importJson($str);
			echo $con->exportPlist();
		}
		else if($_POST['do']=='plist2json')
		{
			$con = new Converter();
			@$con->importPlist($str);
			echo $con->exportJson();
		}
	}
}
catch(Exception $e)
{
	echo 'Cannot parse input data. Please check it again.';
}