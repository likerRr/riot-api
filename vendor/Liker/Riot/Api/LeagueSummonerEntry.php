<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 04.03.14
 * Time: 17:07
 */

namespace vendor\Liker\Riot\Api;


use vendor\Liker\Riot\Constants\Region;
use vendor\Liker\Riot\Types\LeagueItemDto;

class LeagueSummonerEntry extends Provider {

	const API_TEMPLATE = '{region}/{v}/league/by-summoner/{summonerId}/entry';

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

	/**
	 * @var LeagueItemDto[]
	 */
	protected $_entries;

	public function __construct($region, $summonerId) {
		$this->_api_template = LeagueSummonerEntry::API_TEMPLATE;
		$this->_path_params  = array(
			'region'     => $region,
			'v'          => $this->_v,
			'summonerId' => $summonerId,
		);
	}

	public function result_callback($api_result) {
		if (!empty($api_result)) {
			foreach ($api_result as $entry) {
				$this->_entries[] = new LeagueItemDto($entry);
			}
		}
	}

	/**
	 * Get summoners league entries
	 * @return null|LeagueItemDto[]
	 */
	public function entries() {
		return $this->_entries;
	}

	/**
	 * Get single entry
	 * @param $num
	 * @return null|LeagueItemDto
	 */
	public function entry($num) {
		return isset($this->_entries[$num]) ? $this->_entries[$num] : null;
	}

} 