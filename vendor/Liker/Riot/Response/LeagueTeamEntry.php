<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 14.02.14
 * Time: 18:14
 */

namespace vendor\Liker\Riot\Response;

use vendor\Liker\Riot\Types\LeagueItemDto;

/**
 * Class Champion
 * @package vendor\Liker\Riot\Response
 */
class LeagueTeamEntry {

	/** @var LeagueItemDto[] */
	private $_entries;

	/**
	 * @param $apiResult
	 */
	public function __construct($apiResult) {
		if (!empty($apiResult)) {
			foreach ($apiResult as $leagueItemDto) {
				$this->_entries[] = new LeagueItemDto($leagueItemDto);
			}
		}
	}

	/**
	 * Get all summoner's leagues
	 * @param int $num - league number
	 * @return false|LeagueItemDto|LeagueItemDto[]
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

} 