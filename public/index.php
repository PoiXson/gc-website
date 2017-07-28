<?php
// Place this file in public/ on your web server

if (!\file_exists(__DIR__.'/../pxnloader.php')) {
	echo "\n<h2>File not found: pxnloader.php, run <i>composer install</i></h2>\n\n";
	exit(1);
}
require(__DIR__.'/../pxnloader.php');


// uncomment to force debug mode
//debug(TRUE);


// gc website
$app = register_app('pxn\\gcWebsite\\gcWebsite');
\pxn\phpPortal\ConfigPortal::setDefaultPage('blog');

// shell tools
$app = register_app('pxn\\gcWebsite\\gcShell');
