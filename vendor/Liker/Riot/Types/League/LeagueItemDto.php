<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 14.02.14
 * Time: 14:54
 */

namespace vendor\Liker\Riot\Types\League;

class LeagueItemDto {

	/**
	 * @var boolean
	 */
	protected $_isFreshBlood;

	/**
	 * @var boolean
	 */
	protected $_isHotStreak;

	/**
	 * @var boolean
	 */
	protected $_isInactive;

	/**
	 * @var boolean
	 */
	protected $_isVeteran;

	/**
	 * @var int
	 */
	protected $_lastPlayed;

	/**
	 * @var string
	 */
	protected $_leagueName;

	/**
	 * @var int
	 */
	protected $_leaguePoints;

	/**
	 * @var MiniSeriesDto
	 */
	protected $_miniSeries;

	/**
	 * @var string
	 */
	protected $_playerOrTeamId;

	/**
	 * @var string
	 */
	protected $_playerOrTeamName;

	/**
	 * @var string
	 */
	protected $_queueType;

	/**
	 * @var string
	 */
	protected $_rank;

	/**
	 * @var string
	 */
	protected $_tier;

	/**
	 * @var int
	 */
	protected $_wins;

	function __construct($leagueItem)
	{
		$this->_isFreshBlood     = $leagueItem->isFreshBlood;
		$this->_isHotStreak      = $leagueItem->isHotStreak;
		$this->_isInactive       = $leagueItem->isInactive;
		$this->_isVeteran        = $leagueItem->isVeteran;
		$this->_lastPlayed       = $leagueItem->lastPlayed;
		$this->_leagueName       = $leagueItem->leagueName;
		$this->_leaguePoints     = $leagueItem->leaguePoints;
		$this->_miniSeries       = new MiniSeriesDto($leagueItem->miniSeries);
		$this->_playerOrTeamId   = $leagueItem->playerOrTeamId;
		$this->_playerOrTeamName = $leagueItem->playerOrTeamName;
		$this->_queueType        = $leagueItem->queueType;
		$this->_rank             = $leagueItem->rank;
		$this->_tier             = $leagueItem->tier;
		$this->_wins             = $leagueItem->wins;
	}

	/**
	 * @return boolean
	 */
	public function isFreshBlood() {
		return $this->_isFreshBlood;
	}

	/**
	 * @return boolean
	 */
	public function isHotStreak() {
		return $this->_isHotStreak;
	}

	/**
	 * @return boolean
	 */
	public function isInactive() {
		return $this->_isInactive;
	}

	/**
	 * @return boolean
	 */
	public function isVeteran() {
		return $this->_isVeteran;
	}

	/**
	 * @return int
	 */
	public function lastPlayed() {
		return $this->_lastPlayed;
	}

	/**
	 * @return string
	 */
	public function leagueName() {
		return $this->_leagueName;
	}

	/**
	 * @return int
	 */
	public function leaguePoints() {
		return $this->_leaguePoints;
	}

	/**
	 * @return string
	 */
	public function playerOrTeamId() {
		return $this->_playerOrTeamId;
	}

	/**
	 * @return string
	 */
	public function playerOrTeamName() {
		return $this->_playerOrTeamName;
	}

	/**
	 * @return string
	 */
	public function queueType() {
		return $this->_queueType;
	}

	/**
	 * @return string
	 */
	public function rank() {
		return $this->_rank;
	}

	/**
	 * @return string
	 */
	public function tier() {
		return $this->_tier;
	}

	/**
	 * @return int
	 */
	public function wins() {
		return $this->_wins;
	}

	/**
	 * @return MiniSeriesDto
	 */
	public function miniSeries() {
		return $this->_miniSeries;
	}

} 