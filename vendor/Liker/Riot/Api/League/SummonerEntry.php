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
use vendor\Liker\Riot\Response\League\SummonerEntry as ResponseLeagueSummonerEntry;

/**
 * Class SummonerEntry
 * @package vendor\Liker\Riot\Api\League
 */
class SummonerEntry extends Provider {

	const API_TEMPLATE = '{region}/{v}/league/by-summoner/{summonerId}/entry';

	/**
	 * @var array
	 */
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
	 * @see http://developer.riotgames.com/api/methods#!/578/1812
	 * @var bool|null|object
	 */
	protected $_api_result;

	/**
	 * @var ResponseLeagueSummonerEntry
	 */
	protected $_response;

	/**
	 * @param $region
	 * @param $summonerId
	 */
	public function __construct($region, $summonerId) {
		$this->_api_template = SummonerEntry::API_TEMPLATE;
		$this->_path_params  = array(
			'region'     => $region,
			'v'          => $this->_v,
			'summonerId' => $summonerId,
		);
	}

	protected function result_callback() {
		$this->_response = new ResponseLeagueSummonerEntry($this->_api_result);
	}

	/**
	 * Get response as object
	 * @return ResponseLeagueSummonerEntry
	 */
	public function get() {
		return $this->_response;
	}

} 