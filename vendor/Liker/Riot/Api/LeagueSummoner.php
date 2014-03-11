<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 04.03.14
 * Time: 17:07
 */

namespace vendor\Liker\Riot\Api;

use vendor\Liker\Riot\Constants\Region;
use vendor\Liker\Riot\Types\LeagueDto;

class LeagueSummoner extends Provider {

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
	 * Response on champion API call. Just for OOP auto complete
	 * @var array[object]
	 */
	protected $_api_result;

	protected $_leagues;


	public function __construct($region, $summonerId) {
		$this->_api_template = LeagueSummoner::API_TEMPLATE;
		$this->_path_params  = array(
			'region'     => $region,
			'v'          => $this->_v,
			'summonerId' => $summonerId,
		);
	}

	public function result_callback($api_result) {
		if (!empty($api_result)) {
			foreach ($api_result as $leagueDto) {
				$this->_leagues[] = new LeagueDto($leagueDto);
			}
		}
	}

	/**
	 * Get all leagues
	 * @return mixed
	 */
	public function leagues() {
		return $this->_leagues;
	}

	/**
	 * Get Single League
	 * @param $num
	 * @return null
	 */
	public function league($num) {
		return isset($this->_leagues[$num]) ? $this->_leagues[$num] : null;
	}

} 