<?php
/*
 * GrowControl Website
 * @copyright 2004-2016
 * @author lorenzo at poixson.com
 * @link http://growcontrol.com/
 * /
namespace pxn\gcWebsite;

use pxn\phpUtils\Defines;


// find autoloader.php
{
	$search_paths = [
			__DIR__,
			__DIR__.'/..',
	];
	$found = FALSE;
	foreach ($search_paths as $path) {
		if (empty($path)) continue;
		$path = \realpath("{$path}/vendor/");
		if (empty($path)) continue;
		if (\is_file("{$path}/autoload.php")) {
			require("{$path}/autoload.php");
			$found = TRUE;
			break;
		}
	}
	if (!$found) {
		fail('Failed to find composer autoload.php',
			Defines::EXIT_CODE_IO_ERROR);
	}
}
//{
//	$path = __DIR__.'/../../phpUtils/vendor/autoload.php';
//	echo "\n *** Using local development copy of phpUtils! *** \n\n";
//	if (!\file_exists($path)) {
//		fail("Local copy of phpUtils couldn't be found: $path",
//			Defines::EXIT_CODE_IO_ERROR);
//	}
//	$path = \realpath($path);
//	if (empty($path)) {
//		echo "Local copy of phpUtils couldn't be found!\n";
//		exit(1);
//	}
//	require($path);
//}


// init logger
//{
//	$log = xLog::getRoot();
//	$log->setLevel(xLevel::ALL);
//	$log->setFormatter(
//		new FullFormat()
//	);
////	$log->setFormatter(
////		(new BasicFormatter())->setPrefix(' <<xBuild>>')
////	);
//	$log->setHandler(
//		new ShellHandler()
//	);
//	xLog::HandleBuffer();
//}



$website = new \pxn\gcWebsite\gcWebsite();
$website->doRender();
*/
