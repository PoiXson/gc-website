<?php
/*
 * GrowControl Website
 * @copyright 2004-2016
 * @author lorenzo at poixson.com
 * @link http://growcontrol.com/
 */
namespace pxn\gcWebsite;


class gcWebsite extends \pxn\phpUtils\portal\Website {



	public function __construct() {
		parent::__construct();
		// fav icon
		$this->setIcon('static/treeicon.ico');
	}



}
