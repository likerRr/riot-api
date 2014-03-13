<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 13.02.14
 * Time: 18:11
 */

namespace vendor\Liker\Riot\Api\LolStaticData;

use vendor\Liker\Riot\Api;
use vendor\Liker\Riot\Api\Provider;
use vendor\Liker\Riot\Constants\Region;
use vendor\Liker\Riot\Response\LolStaticData\Champion as ResponseStaticChampion;
use vendor\Liker\Riot\Types\LolStaticData\StaticChampionDto;

class Champion extends Provider {

	const API_TEMPLATE = 'static-data/{region}/{v}/champion/{id}';

	public static $availableRegions = array(
		Region::BR,
		Region::EUNE,
		Region::EUW,
		Region::KR,
		Region::LAN,
		Region::LAS,
		Region::NA,
		Region::OCE,
		Region::RU,
		Region::TR,
	);

	/**
	 * Api version
	 * @var string
	 */
	protected $_v = 'v1';

	/**
	 * Counted in rate limit
	 * @var bool
	 */
	protected $_limited = false;

	protected $_response;

	/**
	 * Response on champion API call. Just for OOP auto complete
	 * @var ResponseStaticChampion
	 */
	protected $_api_result;

	public function __construct($region, $championId = '') {
		$this->_api_template = Champion::API_TEMPLATE;
		$this->_path_params  = array(
			'region' => $region,
			'v'      => $this->_v,
			'id'     => $championId,
		);
	}

	protected function result_callback() {
		var_dump($this->_api_result);
		if (isset($this->_path_params['id']) && empty($this->_path_params['id'])) {
			$this->_response = new ResponseStaticChampion($this->_api_result);
		}
		else {
			$this->_response = new StaticChampionDto($this->_api_result);
		}
	}

	public function get() {
		return $this->_response;
	}

	/**
	 * Locale code for returned data (e.g., en_US, es_ES).
	 * @param $locale
	 * @return $this
	 */
	public function qLocale($locale = 'en_US') {
		$this->_query_params['locale'] = $locale;

		return $this;
	}

	/**
	 * Data dragon version for returned data. If not specified, the latest version of data is returned.
	 * @param $dragonVersion
	 * @return $this
	 */
	public function qVersion($dragonVersion) {
		$this->_query_params['version'] = $dragonVersion;

		return $this;
	}

	/**
	 * Tags to return additional data. Only basic data is returned by default if this parameter isn't specified.
	 * These tags allow for additional data to be returned. To return all additional data, use the tag 'all'.
	 * @param $data
	 * @return $this
	 */
	public function qChampData($data) {
		$this->_query_params['champData'] = is_array($data) ? implode(',', $data) : $data;

		return $this;
	}

} 