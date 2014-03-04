<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 04.03.14
 * Time: 13:31
 */

namespace vendor\Liker\Riot\Api;


use vendor\Liker\Riot\Constants\Region;
use vendor\Liker\Riot\Types\LeagueDto;
use vendor\Liker\Riot\Types\LeagueItemDto;

class LeagueChallenger extends Provider {

	const API_TEMPLATE = '{region}/{v}/league/challenger';

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
	 * Response on champion API call. Just for OOP auto complete
	 * @var \vendor\Liker\Riot\Types\LeagueDto
	 */
	protected $_api_result;

	/**
	 * Array of entries
	 * @var LeagueItemDto[]
	 */
	protected $_entries;

	public function __construct($region) {
		$this->_api_template = LeagueChallenger::API_TEMPLATE;
		$this->_path_params  = array(
			'region'     => $region,
			'v'          => $this->_v,
		);
	}

	public function result_callback($api_result) {
		$this->_api_result = new LeagueDto($api_result);
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

	/**
	 * Get league name
	 * @return mixed|null
	 */
	public function getName() {
		if ($this->_api_result != null) {
			return $this->_api_result->name();
		}

		return null;
	}

	/**
	 * Get tier name
	 * @return mixed|null
	 */
	public function getTier() {
		if ($this->_api_result != null) {
			return $this->_api_result->tier();
		}

		return null;
	}

	/**
	 * Get queue name
	 * @return mixed|null
	 */
	public function getQueue() {
		if ($this->_api_result != null) {
			return $this->_api_result->queue();
		}

		return null;
	}

	/**
	 * Get array of entries
	 */
	public function getEntries() {
		if ($this->_api_result != null) {
			return $this->_api_result->entries();
		}

		return null;
	}

	/**
	 * Get league entry
	 */
	public function getEntry($num) {
		if ($this->_api_result != null) {
			return $this->_api_result->entry($num);
		}

		return null;
	}

} 