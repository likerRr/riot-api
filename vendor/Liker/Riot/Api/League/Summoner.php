<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 04.03.14
 * Time: 17:07
 */

namespace vendor\Liker\Riot\Api\League;

use vendor\Liker\Riot\Api\Provider;
use vendor\Liker\Riot\Constants\Region;
use vendor\Liker\Riot\Response\League\Summoner as ResponseLeagueSummoner;

class Summoner extends Provider {

	const API_TEMPLATE = '{region}/{v}/league/by-summoner/{summonerId}';

	public static $availableRegions = array(
		Region::BR,
		Region::EUNE,
		Region::EUW,
		Region::NA,
		Region::TR,
	);

	/**
	 * Api version
	 * @var string
	 */
	protected $_v = 'v2.3';

	/**
	 * Counted in rate limit
	 * @var bool
	 */
	protected $_limited = true;

	/**
	 * Response on API call
	 * @see http://developer.riotgames.com/api/methods#!/578/1808
	 * @var bool|null|object
	 */
	protected $_api_result;

	/**
	 * @var ResponseLeagueSummoner
	 */
	protected $_response;


	/**
	 * @param $region
	 * @param $summonerId
	 */
	public function __construct($region, $summonerId) {
		$this->_api_template = Summoner::API_TEMPLATE;
		$this->_path_params  = array(
			'region'     => $region,
			'v'          => $this->_v,
			'summonerId' => $summonerId,
		);
	}

	protected function result_callback() {
		$this->_response = new ResponseLeagueSummoner($this->_api_result);
	}

	/**
	 * Get response as object
	 * @return ResponseLeagueSummoner
	 */
	public function get() {
		return $this->_response;
	}

} 