<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 14.02.14
 * Time: 18:14
 */

namespace vendor\Liker\Riot\Response\League;

use vendor\Liker\Riot\Types\League\LeagueDto;

/**
 * Class Champion
 * @package vendor\Liker\Riot\Response
 */
class Team {

	/** @var LeagueDto[] */
	private $_leagues;

	/**
	 * @param $apiResult
	 * @see http://developer.riotgames.com/api/methods#!/578/1812
	 */
	public function __construct($apiResult) {
		if (!empty($apiResult)) {
			foreach ($apiResult as $leagueDto) {
				$this->_leagues[] = new LeagueDto($leagueDto);
			}
		}
	}

	/**
	 * Get all team's leagues
	 * @param int $num - league number
	 * @return false|LeagueDto|LeagueDto[]
	 */
	public function leagues($num = null) {
		if ($num !== null) {
			$num = (int) $num;
			if (isset($this->_leagues[$num])) {
				return $this->_leagues[$num];
			}

			return false;
		}
		else {
			return $this->_leagues;
		}
	}

} 