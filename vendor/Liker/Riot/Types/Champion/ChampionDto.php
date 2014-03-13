<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 14.02.14
 * Time: 14:54
 */

namespace vendor\Liker\Riot\Types\Champion;


class ChampionDto {

	/**
	 * @var int Champion ID
	 */
	protected $_id;

	/**
	 * @var string Champion name
	 */
	protected $_name;

	/**
	 * @var boolean Indicates if the champion is active
	 */
	protected $_active;

	/**
	 * @var int Champion attack rank
	 */
	protected $_attackRank;

	/**
	 * @var int Champion defense rank
	 */
	protected $_defenseRank;

	/**
	 * @var int Champion magic rank
	 */
	protected $_magicRank;

	/**
	 * @var int Champion difficulty rank
	 */
	protected $_difficultyRank;

	/**
	 * @var boolean Bot enabled flag (for custom games)
	 */
	protected $_botEnabled;

	/**
	 * @var boolean Indicates if the champion is free to play. Free to play champions are rotated periodically
	 */
	protected $_freeToPlay;

	/**
	 * @var boolean Bot Match Made enabled flag (for Co-op vs. AI games)
	 */
	protected $_botMmEnabled;

	/**
	 * @var boolean Ranked play enabled flag
	 */
	protected $_rankedPlayEnabled;

	public function __construct($champion) {
		$this->_id                = $champion->id;
		$this->_name              = $champion->name;
		$this->_active            = $champion->active;
		$this->_attackRank        = $champion->attackRank;
		$this->_defenseRank       = $champion->defenseRank;
		$this->_magicRank         = $champion->magicRank;
		$this->_difficultyRank    = $champion->difficultyRank;
		$this->_botEnabled        = $champion->botEnabled;
		$this->_freeToPlay        = $champion->freeToPlay;
		$this->_botMmEnabled      = $champion->botMmEnabled;
		$this->_rankedPlayEnabled = $champion->rankedPlayEnabled;
	}

	/**
	 * @return string
	 */
	public function name() {
		return $this->_name;
	}

	/**
	 * @return int
	 */
	public function id() {
		return $this->_id;
	}

	/**
	 * @return boolean
	 */
	public function active() {
		return $this->_active;
	}

	/**
	 * @return int
	 */
	public function attackRank() {
		return $this->_attackRank;
	}

	/**
	 * @return int
	 */
	public function defenseRank() {
		return $this->_defenseRank;
	}

	/**
	 * @return int
	 */
	public function magicRank() {
		return $this->_magicRank;
	}

	/**
	 * @return int
	 */
	public function difficultyRank() {
		return $this->_difficultyRank;
	}

	/**
	 * @return boolean
	 */
	public function botEnabled() {
		return $this->_botEnabled;
	}

	/**
	 * @return boolean
	 */
	public function freeToPlay() {
		return $this->_freeToPlay;
	}

	/**
	 * @return boolean
	 */
	public function botMmEnabled() {
		return $this->_botMmEnabled;
	}

}