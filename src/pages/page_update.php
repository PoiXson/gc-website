<?php
/*
 * PoiXson phpPortal - Website Utilities Library
 * @copyright 2004-2016
 * @license GPL-3
 * @author lorenzo at poixson.com
 * @link http://poixson.com/
 */
namespace pxn\gcWebsite\pages;

use pxn\phpPortal\pages\Blog_Queries;

use pxn\phpUtils\pxdb\dbPool;
use pxn\phpUtils\pxdb\dbUtils;
use pxn\phpUtils\System;


class page_update extends \pxn\phpPortal\Page {



	public function __construct() {
	}



	public function getPageContents() {
		if (!System::isShell()) {
			return 'This script can only run from shell!';
		}
		$pool = dbPool::getPool();
		// create/update tables
		dbUtils::UpdateTables($pool);
		// update blog comment counts
		{
			$blogQueries = new Blog_Queries(
				$pool,
				100
			);
			$blogQueries->UpdateCommentCounts();
		}
		return " == Done == \n\n";
	}



}
