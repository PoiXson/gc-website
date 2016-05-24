<?php
/*
 * GrowControl Website
 * @copyright 2004-2016
 * @author lorenzo at poixson.com
 * @link http://growcontrol.com/
 */
namespace pxn\gcWebsite;

use pxn\phpUtils\Config;
use pxn\phpUtils\Defines;


class gcWebsite extends \pxn\phpUtils\portal\Website {



	public static function autoinit() {
		return new self();
	}
	public function __construct() {
		parent::__construct();
		// fav icon
		Config::set(Defines::KEY_SITE_TITLE, '{pagetitle} - GrowControl');
		Config::set(Defines::KEY_FAV_ICON,   'static/treeicon.ico');
	}



}
