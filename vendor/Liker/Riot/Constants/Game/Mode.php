<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 13.02.14
 * Time: 15:10
 */

namespace vendor\Liker\Riot\Constants\Game;


class Mode {

	const CLASSIC = 'CLASSIC';
	const ODIN = 'ODIN';
	const ARAM = 'ARAM';
	const TUTORIAL = 'TUTORIAL';
	const ONEFORALL = 'ONEFORALL';
	const FIRSTBLOOD = 'FIRSTBLOOD';

	protected $_mode = 'Unknown';
	protected $_description = 'Mode';
	protected $_loose = 'Unknown Mode';

	public static function get($name) {
		return new Mode($name);
	}

	public function __construct($name) {
		$this->init($name);
	}

	protected function init($name) {
		switch ($name) {
			case Mode::CLASSIC: {
				$this->make(Mode::CLASSIC, 'Classic Summoner\'s Rift and Twisted Treeline games', 'Classic');
				break;
			}
			case Mode::ODIN: {
				$this->make(Mode::CLASSIC, 'Dominion/Crystal Scar games', 'Dominion');
				break;
			}
			case Mode::ARAM: {
				$this->make(Mode::ARAM, 'ARAM games', 'ARAM');
				break;
			}
			case Mode::TUTORIAL: {
				$this->make(Mode::TUTORIAL, 'Tutorial games', 'Tutorial');
				break;
			}
			case Mode::ONEFORALL: {
				$this->make(Mode::ONEFORALL, 'One for All games', 'One for All');
				break;
			}
			case Mode::FIRSTBLOOD: {
				$this->make(Mode::FIRSTBLOOD, 'Snowdown Showdown games', 'Snowdown Showdown');
				break;
			}
			default: {
				$this->make($this->_mode, $this->_description, $this->_loose);
			}
		}
	}

	protected function make($name, $description, $loose) {
		$this->_mode        = $name;
		$this->_description = $description;
		$this->_loose       = $loose;
	}

	/**
	 * @return string
	 */
	public function mode() {
		return $this->_mode;
	}

	/**
	 * @return string
	 */
	public function description() {
		return $this->_description;
	}

	/**
	 * @return string
	 */
	public function loose() {
		return $this->_loose;
	}

} 