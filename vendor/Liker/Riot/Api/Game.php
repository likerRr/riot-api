<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 04.03.14
 * Time: 11:13
 */

namespace vendor\Liker\Riot\Api;


use vendor\Liker\Riot\Constants\Region;
use vendor\Liker\Riot\Types\GameDto;

class Game extends Provider {

	const API_TEMPLATE = '{region}/{v}/game/by-summoner/{summonerId}/recent';

	public static $availableRegions = array(
		Region::BR,
		Region::EUNE,
		Region::EUW,
		Region::LAN,
		Region::LAS,
		Region::NA,
		Region::OCE,
	);

	/**
	 * Api version
	 * @var string
	 */
	protected $_v = 'v1.3';

	/**
	 * Counted in rate limit
	 * @var bool
	 */
	protected $_limited = true;

	/**
	 * Response on champion API call. Just for OOP auto complete
	 * @var \vendor\Liker\Riot\Response\Game
	 */
	protected $_api_result;

	/**
	 * Array of games
	 * @var GameDto[]
	 */
	protected $_games;

	public function __construct($region, $summonerId) {
		$this->_api_template = Game::API_TEMPLATE;
		$this->_path_params  = array(
			'region'     => $region,
			'v'          => $this->_v,
			'summonerId' => $summonerId,
		);
	}

	public function getSummonerId() {
		return $this->_api_result->summonerId;
	}

	public function getGame($num) {
		if ($this->_api_result != null) {
			$games = $this->_api_result->games;
			if (isset($games[$num])) {
				return new GameDto($games[$num]);
			}
		}

		return null;
	}

	public function getGames() {
		if ($this->_api_result != null) {
			$games = $this->_api_result->games;
			if (!empty($games)) {
				foreach ($games as $game) {
					$this->_games[] = new GameDto($game);
				}

				return $this->_games;
			}
		}

		return null;
	}

} 