<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 13.02.14
 * Time: 14:31
 */

namespace vendor\Liker\Riot;

use vendor\Liker\Riot\Api\Champion\Champion;
use vendor\Liker\Riot\Api\Game\Game;
use vendor\Liker\Riot\Api\League\Challenger;
use vendor\Liker\Riot\Api\League\Summoner;
use vendor\Liker\Riot\Api\League\SummonerEntry;
use vendor\Liker\Riot\Api\League\Team;
use vendor\Liker\Riot\Api\League\TeamEntry;
use vendor\Liker\Riot\Api\LolStaticData\Champion as StaticChampion;

class Api {

	/**
	 * Api URL
	 */
	const API_URL = 'https://prod.api.pvp.net/api/lol/';

	/**
	 * Developer's API key
	 * @var string|null
	 */
	protected $_key = null;


	/** @var Api */
	protected static $_instance = null;

	/**
	 * @param $key - API key
	 * @return Api
	 */
	public static function instance($key) {
		if (Api::$_instance === null) {
			Api::$_instance = new Api($key);
		}

		return Api::$_instance;
	}

	/**
	 * @param $key API key
	 */
	protected function __construct($key) {
		$this->_key = $key;
	}

	/**
	 * @param $region
	 * @return Champion
	 */
	public function champion($region) {
		$champion = new Champion($region);

		return $champion;
	}

	/**
	 * @param $region
	 * @param $summonerId
	 * @return Game
	 */
	public function game($region, $summonerId) {
		$champion = new Game($region, $summonerId);

		return $champion;
	}

	/**
	 * @param $region
	 * @return Challenger
	 */
	public function leagueChallenger($region) {
		$challenger = new Challenger($region);

		return $challenger;
	}

	/**
	 * @param $region
	 * @param $summonerId
	 * @return SummonerEntry
	 */
	public function leagueSummonerEntry($region, $summonerId) {
		$leagueSummonerEntry = new SummonerEntry($region, $summonerId);

		return $leagueSummonerEntry;
	}

	/**
	 * @param $region
	 * @param $summonerId
	 * @return Summoner
	 */
	public function leagueSummoner($region, $summonerId) {
		$leagueSummoner = new Summoner($region, $summonerId);

		return $leagueSummoner;
	}

	/**
	 * @param $region
	 * @param $teamId
	 * @return Team
	 */
	public function leagueTeam($region, $teamId) {
		$leagueTeam = new Team($region, $teamId);

		return $leagueTeam;
	}

	/**
	 * @param $region
	 * @param $teamId
	 * @return TeamEntry
	 */
	public function leagueTeamEntry($region, $teamId) {
		$leagueTeamEntry = new TeamEntry($region, $teamId);

		return $leagueTeamEntry;
	}

	/**
	 * @param $region
	 * @param $championId
	 * @see https://developer.riotgames.com/api/methods#!/544/1725
	 * @return StaticChampion
	 */
	public function staticChampion($region, $championId = '') {
		$staticChampion = new StaticChampion($region, $championId);

		return $staticChampion;
	}

	/**
	 * @return string|null
	 */
	public static function key() {
		return Api::$_instance->_key;
	}

}