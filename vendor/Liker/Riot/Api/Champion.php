<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 13.02.14
 * Time: 18:11
 */

namespace vendor\Liker\Riot\Api;

use vendor\Liker\Riot\Api;
use vendor\Liker\Riot\Types\ChampionDto;
use vendor\Liker\Riot\Response\Champion as ResponseChampion;

class Champion extends Provider {

	/**
	 * Api version
	 * @var string
	 */
	protected $_v = 'v1.1';

	/**
	 * Array of champions
	 * @var ChampionDto[]
	 */
	protected $_champions = array();

	/**
	 * Response on champion API call. Just for OOP auto complete
	 * @var ResponseChampion
	 */
	protected $_api_result;

	const API_TEMPLATE = '{region}/{v}/champion';

	public function __construct($region) {
		$this->_api_template = Champion::API_TEMPLATE;
		$this->_path_params  = array(
			'region' => $region,
			'v'      => $this->_v,
		);
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
	 * Get all champions as array of ChampionDto objects
	 * @return ChampionDto[]
	 */
	public function getAll() {
		$champions = $this->_api_result->champions;
		if (!empty($champions)) {
			foreach ($champions as $key => $champion) {
				$this->_champions[] = new ChampionDto($champion);
			}
		}

		return $this->_champions;
	}

	/**
	 * Get champion by name
	 * @param string $name
	 * @return null|ChampionDto
	 */
	public function get($name) {
		$champions = $this->_api_result->champions;
		if (!empty($champions)) {
			foreach ($champions as $key => $champion) {
				if ($name === $champion->name) {
					return new ChampionDto($champion);
				}
			}
		}

		return null;
	}

} 