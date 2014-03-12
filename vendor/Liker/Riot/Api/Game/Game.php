<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 04.03.14
 * Time: 11:13
 */

namespace vendor\Liker\Riot\Api\Game;


use vendor\Liker\Riot\Api\Provider;
use vendor\Liker\Riot\Constants\Region;
use vendor\Liker\Riot\Response\Game\Game as ResponseGame;

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
	 * Response on API call
	 * @see https://developer.riotgames.com/api/methods#!/546/1727
	 * @var bool|null|object
	 */
	protected $_api_result;

	/**
	 * @var ResponseGame
	 */
	protected $_response;

	/**
	 * @param $region
	 * @param $summonerId
	 */
	public function __construct($region, $summonerId) {
		$this->_api_template = Game::API_TEMPLATE;
		$this->_path_params  = array(
			'region'     => $region,
			'v'          => $this->_v,
			'summonerId' => $summonerId,
		);
	}

	protected function result_callback() {
		$this->_response = new ResponseGame($this->_api_result);
	}

	/**
	 * Get response as object
	 * @return ResponseGame
	 */
	public function get() {
		return $this->_response;
	}

} 