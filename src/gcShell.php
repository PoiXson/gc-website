<?php
/*
 * GrowControl Website
 * @copyright 2004-2016
 * @author lorenzo at poixson.com
 * @link http://growcontrol.com/
 */
namespace pxn\gcWebsite;

use pxn\phpUtils\ShellTools;
use pxn\phpUtils\ShellHelp;
use pxn\phpUtils\pxdb\dbCommands;


class gcShell extends \pxn\phpUtils\app\ShellApp {



	public function __construct() {
		self::setAllowShortFlagValues(TRUE);
		parent::__construct();
	}



	protected function doRender() {
		$result = parent::doRender();
		if ($result !== TRUE) {
			return $result;
		}

		$arg = \strtolower(ShellTools::getArg());
		if (empty($arg)) {
			self::DisplayHelp();
			return NULL;
		}

		// db command
		if ($arg == 'db') {
			$result = dbCommands::run();
			if ($result !== TRUE) {
				return FALSE;
			}
			$this->setRendered();
			return TRUE;
		}

		if (ShellTools::isHelp()) {
			self::DisplayHelp();
			return NULL;
		}
		return FALSE;
	}



	public static function DisplayHelp() {
//TODO:
echo "\nHELP\n\n";
		ExitNow(1);
	}



}
