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

/**
 * Class Mastery
 * @package vendor\Liker\Riot\Api\LolStaticData
 */
class Mastery extends Provider {

	const API_TEMPLATE = 'static-data/{region}/{v}/mastery/{id}';

	/**
	 * @var array
	 */
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

	/**
	 * @var MasteryDto
	 * @see http://developer.riotgames.com/api/methods#!/544/1716
	 */
	protected $_response;

	/**
	 * @var MasteryListDto
	 * @see http://developer.riotgames.com/api/methods#!/544/1721
	 */
	protected $_responseAll;

	/**
	 * Response on API call
	 * @see http://developer.riotgames.com/api/methods#!/544/1721
	 * @see http://developer.riotgames.com/api/methods#!/544/1716
	 * @var bool|null|object
	 */
	protected $_api_result;

	/**
	 * @param $region
	 * @param string|int $masteryId
	 */
	public function __construct($region, $masteryId = '') {
		$this->_api_template = Item::API_TEMPLATE;
		$this->_path_params  = array(
			'region' => $region,
			'v'      => $this->_v,
			'id'     => $masteryId,
		);
	}

	protected function result_callback() {
		if (isset($this->_path_params['id']) && empty($this->_path_params['id'])) {
			$this->_responseAll = new MasteryListDto($this->_api_result);
		}
		else {
			$this->_response = new MasteryDto($this->_api_result);
		}
	}

	/**
	 * @return ItemDto
	 */
	public function get() {
		return $this->_response;
	}

	/**
	 * @return ItemListDto
	 */
	public function getAll() {
		return $this->_responseAll;
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
	public function qMasteryData($data) {
		$this->_query_params['masteryData'] = is_array($data) ? implode(',', $data) : $data;

		return $this;
	}

	/**
	 * Tags to return additional data. Only basic data is returned by default if this parameter isn't specified.
	 * These tags allow for additional data to be returned. To return all additional data, use the tag 'all'.
	 * @param $data
	 * @return $this
	 */
	public function qMasteryListData($data) {
		$this->_query_params['masteryListData'] = is_array($data) ? implode(',', $data) : $data;

		return $this;
	}

} 