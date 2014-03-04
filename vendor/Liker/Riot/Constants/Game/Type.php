<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 13.02.14
 * Time: 15:11
 */

namespace vendor\Liker\Riot\Constants\Game;


class Type {

	const CUSTOM_GAME   = 'CUSTOM_GAME';
	const TUTORIAL_GAME = 'TUTORIAL_GAME';
	const MATCHED_GAME  = 'MATCHED_GAME';

	protected $_type        = 'Unknown';
	protected $_description = 'Type';
	protected $_loose       = 'Unknown Type';

	public static function get($type) {
		return new Type($type);
	}

	public function __construct($type) {
		$this->init($type);
	}

	protected function init($type) {
		switch ($type) {
			case Type::CUSTOM_GAME: {
				$this->make('CUSTOM_GAME', 'Custom Games', 'Custom');
				break;
			}
			case Type::TUTORIAL_GAME: {
				$this->make('TUTORIAL_GAME', 'Tutorial Games', 'Tutorial');
				break;
			}
			case Type::MATCHED_GAME: {
				$this->make('MATCHED_GAME', 'All other games', 'Other');
				break;
			}
			default: {

			}
		}
	}

	protected function make($type, $description, $loose) {
		$this->_type        = $type;
		$this->_description = $description;
		$this->_loose       = $loose;
	}

	/**
	 * @return string
	 */
	public function type() {
		return $this->_type;
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