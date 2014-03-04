<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 14.02.14
 * Time: 14:54
 */

namespace vendor\Liker\Riot\Types;


use vendor\Liker\Riot\Constants\Game\Mode;
use vendor\Liker\Riot\Constants\Game\Type;
use vendor\Liker\Riot\Constants\Sub\Type as SubType;

class GameDto {

	/**
	 * 	Champion ID associated with game
	 * @var int
	 */
	protected $_championId;

	/**
	 * Date that end game data was recorded, specified as epoch milliseconds
	 * @var int
	 */
	protected $_createDate;

	/**
	 * Other players associated with the game
	 * @var array
	 */
	protected $_fellowPlayers;

	/**
	 * Array ob PlayerDto objects
	 * @var PlayerDto[]
	 */
	protected $_players;

	/**
	 * Game id
	 * @var int
	 */
	protected $_gameId;

	/**
	 * Game mode. (legal values: CLASSIC, ODIN, ARAM, TUTORIAL, ONEFORALL, FIRSTBLOOD)
	 * @var string|Mode
	 */
	protected $_gameMode;

	/**
	 * Game type. (legal values: CUSTOM_GAME, MATCHED_GAME, TUTORIAL_GAME)
	 * @var string|Type
	 */
	protected $_gameType;

	/**
	 * Invalid flag.
	 * @var boolean
	 */
	protected $_invalid;

	/**
	 * Level.
	 * @var int
	 */
	protected $_level;

	/**
	 * Map ID
	 * @var int
	 */
	protected $_mapId;

	/**
	 * ID of first summoner spell.
	 * @var int
	 */
	protected $_spell1;

	/**
	 * ID of second summoner spell.
	 * @var int
	 */
	protected $_spell2;

	/**
	 * Statistics associated with the game for this summoner.
	 * @var RawStatsDto
	 */
	protected $_stats;

	/**
	 * Game sub-type. (legal values: NONE, NORMAL, BOT, RANKED_SOLO_5x5, RANKED_PREMADE_3x3, RANKED_PREMADE_5x5,
	 * ODIN_UNRANKED, RANKED_TEAM_3x3, RANKED_TEAM_5x5, NORMAL_3x3, BOT_3x3, ARAM_UNRANKED_5x5, ONEFORALL_5x5,
	 * FIRSTBLOOD_1x1, FIRSTBLOOD_2x2, SR_6x6)
	 * @var string|SubType
	 */
	protected $_subType;

	/**
	 * Team ID associated with game. Team ID 100 is blue team. Team ID 200 is purple team.
	 * @var int
	 */
	protected $_teamId;

	public function __construct($game) {
		$this->_championId    = $game->championId;
		$this->_createDate    = $game->createDate;
		$this->_fellowPlayers = $game->fellowPlayers;
		$this->_gameId        = $game->gameId;
		$this->_gameMode      = $game->gameMode;
		$this->_gameType      = $game->gameType;
		$this->_invalid       = $game->invalid;
		$this->_level         = $game->level;
		$this->_mapId         = $game->mapId;
		$this->_spell1        = $game->spell1;
		$this->_spell2        = $game->spell2;
		$this->_stats         = $game->stats;
		$this->_subType       = $game->subType;
		$this->_teamId        = $game->teamId;
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
	public function createDate() {
		return $this->_createDate;
	}

	/**
	 * @return array|\vendor\Liker\Riot\Types\PlayerDto[]
	 */
	public function players() {
		if (!empty($this->_fellowPlayers)) {
			foreach ($this->_fellowPlayers as $player) {
				$this->_players[] = new PlayerDto($player);
			}
		}

		return $this->_players;
	}

	/**
	 * Get custom player from fellow players
	 * @see $_fellowPlayers
	 * @param $num
	 * @return null|PlayerDto
	 */
	public function player($num) {
		if (isset($this->_fellowPlayers[$num])) {
			return new PlayerDto($this->_fellowPlayers[$num]);
		}

		return null;
	}

	/**
	 * @return int
	 */
	public function gameId() {
		return $this->_gameId;
	}

	/**
	 * @return string|\vendor\Liker\Riot\Constants\Game\Mode
	 */
	public function gameMode() {
		return $this->_gameMode;
	}

	/**
	 * @return string|\vendor\Liker\Riot\Constants\Game\Type
	 */
	public function gameType() {
		return $this->_gameType;
	}

	/**
	 * @return boolean
	 */
	public function invalid() {
		return $this->_invalid;
	}

	/**
	 * @return int
	 */
	public function level() {
		return $this->_level;
	}

	/**
	 * @return int
	 */
	public function mapId() {
		return $this->_mapId;
	}

	/**
	 * @return int
	 */
	public function spell1() {
		return $this->_spell1;
	}

	/**
	 * @return int
	 */
	public function spell2() {
		return $this->_spell2;
	}

	/**
	 * @return \vendor\Liker\Riot\Types\RawStatsDto
	 */
	public function stats() {
		return new RawStatsDto($this->_stats);
	}

	/**
	 * @return string|\vendor\Liker\Riot\Constants\Sub\Type
	 */
	public function subType() {
		return $this->_subType;
	}

	/**
	 * @return int
	 */
	public function teamId() {
		return $this->_teamId;
	}

} 