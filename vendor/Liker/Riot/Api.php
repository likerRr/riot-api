<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 13.02.14
 * Time: 14:31
 */

namespace vendor\Liker\Riot;

use vendor\Liker\Riot\Api\LeagueChallenger;
use vendor\Liker\Riot\Api\Champion;
use vendor\Liker\Riot\Api\Game;
use vendor\Liker\Riot\Api\LeagueSummoner;
use vendor\Liker\Riot\Api\LeagueSummonerEntry;

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
	 * @see https://developer.riotgames.com/api/methods#!/545/1726
	 * @return Champion
	 */
	public function champion($region) {
		$champion = new Champion($region);

		return $champion;
	}

	/**
	 * @param $region
	 * @param $summonerId
	 * @see https://developer.riotgames.com/api/methods#!/546/1727
	 * @return Game
	 */
	public function game($region, $summonerId) {
		$champion = new Game($region, $summonerId);

		return $champion;
	}

	/**
	 * @param $region
	 * @see https://developer.riotgames.com/api/methods#!/540/1698
	 * @return LeagueChallenger
	 */
	public function leagueChallenger($region) {
		$challenger = new LeagueChallenger($region);

		return $challenger;
	}

	/**
	 * @param $region
	 * @param $summonerId
	 * @see https://developer.riotgames.com/api/methods#!/540/1700
	 * @return LeagueSummonerEntry
	 */
	public function leagueSummonerEntry($region, $summonerId) {
		$leagueSummonerEntry = new LeagueSummonerEntry($region, $summonerId);

		return $leagueSummonerEntry;
	}

	/**
	 * @param $region
	 * @param $summonerId
	 * @see https://developer.riotgames.com/api/methods#!/540/1699
	 * @return LeagueSummoner
	 */
	public function leagueSummoner($region, $summonerId) {
		$leagueSummoner = new LeagueSummoner($region, $summonerId);

		return $leagueSummoner;
	}

	/**
	 * @return string|null
	 */
	public static function key() {
		return Api::$_instance->_key;
	}

}