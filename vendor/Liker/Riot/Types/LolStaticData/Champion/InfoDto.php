<?php
/**
 * Created by PhpStorm.
 * User: Alexey Lizurchik
 * Date: 17.03.14
 * Time: 14:30
 */

namespace vendor\Liker\Riot\Types\LolStaticData\Champion;


class InfoDto {

	/**
	 * @var int
	 */
	protected $_attack;

	/**
	 * @var int
	 */
	protected $_defense;

	/**
	 * @var int
	 */
	protected $_difficulty;

	/**
	 * @var int
	 */
	protected $_magic;

	function __construct($info) {
		$this->_attack     = $info->attack;
		$this->_defense    = $info->defense;
		$this->_difficulty = $info->difficulty;
		$this->_magic      = $info->magic;
	}

	/**
	 * @return int
	 */
	public function attack() {
		return $this->_attack;
	}

	/**
	 * @return int
	 */
	public function defense() {
		return $this->_defense;
	}

	/**
	 * @return int
	 */
	public function difficulty() {
		return $this->_difficulty;
	}

	/**
	 * @return int
	 */
	public function magic() {
		return $this->_magic;
	}

}