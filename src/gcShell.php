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
use pxn\phpUtils\Defines;

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
			ExitNow(Defines::EXIT_CODE_GENERAL);
		}

		// db command
		if ($arg == 'db') {
			$result = dbCommands::run();
			$this->setRendered();
			if ($result !== TRUE) {
				ExitNow(Defines::EXIT_CODE_INTERNAL_ERROR);
			}
			return TRUE;
		}

		echo "Invalid command: $arg\n";
		self::DisplayHelp();
		ExitNow(Defines::EXIT_CODE_INVALID_COMMAND);
	}



	public static function DisplayHelp() {
//TODO: use ShellHelp class for this
		echo "\n";
		echo " pxnPortal Tools\n";
		echo " ===============\n";
		echo "\n";
		echo "Usage:\n";
		echo "  [options] [--] [<command>]\n";
		echo "\n";
		echo "Available commands:\n";
		echo "  db\n";
		echo "\n";
		echo "Options:\n";
		echo "  -V, --version  Display the script version.\n";
		echo "  -h, --help     This help message.\n";
		echo "\n";
	}



}
