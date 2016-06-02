<?php

if (!\file_exists('../pxnloader.php')) {
	echo '<h2>File not found: pxnloader.php, run <i>composer update</i></h2>';
	exit(1);
}
require('../pxnloader.php');

//debug(TRUE);

\pxn\gcWebsite\gcWebsite::autoinit();
