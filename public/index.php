<?php

if (!\file_exists(__DIR__.'/../pxnloader.php')) {
	echo "\n<h2>File not found: pxnloader.php, run <i>composer update</i></h2>\n";
	exit(1);
}
require(__DIR__.'/../pxnloader.php');

//debug(TRUE);

\pxn\gcWebsite\gcWebsite::init();
\pxn\gcWebsite\gcShell::init();
