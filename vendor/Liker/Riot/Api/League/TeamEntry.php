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
use vendor\Liker\Riot\Response\League\TeamEntry as ResponseLeagueTeamEntry;

/**
 * Class TeamEntry
 * @package vendor\Liker\Riot\Api\League
 */
class TeamEntry extends Provider {

	const API_TEMPLATE = '{region}/{v}/league/by-team/{teamId}/entry';

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
	 * @see http://developer.riotgames.com/api/methods#!/578/1809
	 * @var bool|null|object
	 */
	protected $_api_result;

	/**
	 * @var ResponseLeagueTeamEntry
	 */
	protected $_response;

	/**
	 * @param $region
	 * @param $teamId
	 */
	public function __construct($region, $teamId) {
		$this->_api_template = TeamEntry::API_TEMPLATE;
		$this->_path_params  = array(
			'region' => $region,
			'v'      => $this->_v,
			'teamId' => $teamId,
		);
	}

	protected function result_callback() {
		$this->_response = new ResponseLeagueTeamEntry($this->_api_result);
	}

	/**
	 * Get response as object
	 * @return ResponseLeagueTeamEntry
	 */
	public function get() {
		return $this->_response;
	}

} 