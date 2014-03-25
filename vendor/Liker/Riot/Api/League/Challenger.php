<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 04.03.14
 * Time: 13:31
 */

namespace vendor\Liker\Riot\Api\League;

use vendor\Liker\Riot\Api\Provider;
use vendor\Liker\Riot\Constants\Region;
use vendor\Liker\Riot\Types\League\LeagueDto;

/**
 * Class Challenger
 * @package vendor\Liker\Riot\Api\League
 */
class Challenger extends Provider {

	const API_TEMPLATE = '{region}/{v}/league/challenger';

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
	 * @see http://developer.riotgames.com/api/methods#!/578/1810
	 * @var bool|null|object
	 */
	protected $_api_result;

	/**
	 * @var LeagueDto
	 */
	protected $_response;

	/**
	 * @param $region
	 */
	public function __construct($region) {
		$this->_api_template = Challenger::API_TEMPLATE;
		$this->_path_params  = array(
			'region'     => $region,
			'v'          => $this->_v,
		);
	}

	protected function result_callback() {
		$this->_response = new LeagueDto($this->_api_result);
	}

	/**
	 * Get response as object
	 * @return LeagueDto
	 */
	public function get() {
		return $this->_response;
	}

	/**
	 * Additional query param to retrieve only free to play champions
	 * @param $type
	 * @return $this
	 */
	public function qType($type) {
		$this->_query_params['type'] = $type;

		return $this;
	}

} 