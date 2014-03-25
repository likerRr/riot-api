<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 13.02.14
 * Time: 18:11
 */

namespace vendor\Liker\Riot\Api\Champion;

use vendor\Liker\Riot\Api\Provider;
use vendor\Liker\Riot\Constants\Region;
use vendor\Liker\Riot\Response\Champion\Champion as ResponseChampion;

/**
 * Class Champion
 * @package vendor\Liker\Riot\Api\Champion
 */
class Champion extends Provider {

	const API_TEMPLATE = '{region}/{v}/champion';

	/**
	 * @var array
	 */
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
	protected $_v = 'v1.1';

	/**
	 * Counted in rate limit
	 * @var bool
	 */
	protected $_limited = true;

	/** @var ResponseChampion */
	protected $_response;

	/**
	 * Response on API call
	 * @see https://developer.riotgames.com/api/methods#!/545/1726
	 * @var bool|null|object
	 */
	protected $_api_result;

	/**
	 * @param $region
	 */
	public function __construct($region) {
		$this->_api_template = Champion::API_TEMPLATE;
		$this->_path_params  = array(
			'region' => $region,
			'v'      => $this->_v,
		);
	}

	protected function result_callback() {
		$this->_response = new ResponseChampion($this->_api_result);
	}

	/**
	 * Additional query param to retrieve only free to play champions
	 * @return $this
	 */
	public function qFreeToPlay() {
		$this->_query_params['freeToPlay'] = 'true';

		return $this;
	}

	/**
	 * Get response as object
	 * @return ResponseChampion
	 */
	public function get() {
		return $this->_response;
	}

} 