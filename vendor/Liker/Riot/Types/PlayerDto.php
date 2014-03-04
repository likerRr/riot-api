<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 04.03.14
 * Time: 11:52
 */

namespace vendor\Liker\Riot\Types;


class PlayerDto {

	/**
	 * Champion id associated with player.
	 * @var int
	 */
	protected $_championId;

	/**
	 * Summoner id associated with player.
	 * @var int
	 */
	protected $_summonerId;

	/**
	 * Team id associated with player.
	 * @var int
	 */
	protected $_teamId;

	public function __construct($player) {
		$this->_championId = $player->championId;
		$this->_summonerId = $player->summonerId;
		$this->_teamId     = $player->teamId;
	}

	/**
	 * @return int
	 */
	public function championId() {
		return $this->_championId;
	}

	/**
	 * @return int
	 */
	public function summonerId() {
		return $this->_summonerId;
	}

	/**
	 * @return int
	 */
	public function teamId() {
		return $this->_teamId;
	}

} 