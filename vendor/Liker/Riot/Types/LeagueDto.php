<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 14.02.14
 * Time: 14:54
 */

namespace vendor\Liker\Riot\Types;


use vendor\Liker\Riot\Constants\Tier;

class LeagueDto {

	/**
	 * @var LeagueItemDto[]
	 */
	protected $_entries;

	/**
	 * This name is an internal place-holder name only. Display and localization of names in the game client are handled client-side.
	 * @var string
	 */
	protected $_name;

	/**
	 * @var int
	 */
	protected $_participantId;

	/**
	 * (legal values: RANKED_SOLO_5x5, RANKED_TEAM_3x3, RANKED_TEAM_5x5)
	 * @var string
	 */
	protected $_queue;

	/**
	 * (legal values: CHALLENGER, DIAMOND, PLATINUM, GOLD, SILVER, BRONZE)
	 * @var string|Tier
	 */
	protected $_tier;

	public function __construct($league) {
		$this->_name          = $league->name;
		$this->_participantId = $league->participantId;
		$this->_queue         = $league->queue;
		$this->_tier          = $league->tier;
		if (!empty($league->entries)) {
			foreach ($league->entries as $entry) {
				$this->_entries[] = new LeagueItemDto($entry);
			}
		}
	}

	/**
	 * @param null|int $num
	 * @return LeagueItemDto|LeagueItemDto[]|false
	 */
	public function entries($num = null) {
		if ($num !== null) {
			$num = (int) $num;
			if (isset($this->_entries[$num])) {
				return $this->_entries[$num];
			}

			return false;
		}
		else {
			return $this->_entries;
		}
	}

	/**
	 * @return mixed
	 */
	public function name() {
		return $this->_name;
	}

	/**
	 * @return mixed
	 */
	public function participantId() {
		return $this->_participantId;
	}

	/**
	 * @return mixed
	 */
	public function queue() {
		return $this->_queue;
	}

	/**
	 * @return mixed
	 */
	public function tier() {
		return $this->_tier;
	}


} 