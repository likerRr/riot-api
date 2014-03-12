<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 14.02.14
 * Time: 18:14
 */

namespace vendor\Liker\Riot\Response\Champion;


use vendor\Liker\Riot\Types\ChampionDto;

/**
 * Class Champion
 * @package vendor\Liker\Riot\Response
 */
class Champion {

	/** @var ChampionDto[] */
	private $_champions;

	/**
	 * @param $apiResult
	 * @see https://developer.riotgames.com/api/methods#!/545/1726
	 */
	public function __construct($apiResult) {
		if (!empty($apiResult)) {
			foreach ($apiResult->champions as $champion) {
				$this->_champions[] = new ChampionDto($champion);
			}
		}
	}

	/**
	 * @param string|null $name
	 * @return ChampionDto|ChampionDto[]|false
	 */
	public function champions($name = null) {
		if ($name !== null) {
			foreach ($this->_champions as $champion) {
				if ($champion->name() == $name) {
					return $champion;
				}
			}

			return false;
		}
		else {
			return $this->_champions;
		}
	}

} 