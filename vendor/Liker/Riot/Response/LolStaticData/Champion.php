<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 14.02.14
 * Time: 18:14
 */

namespace vendor\Liker\Riot\Response\LolStaticData;

use vendor\Liker\Riot\Types\LolStaticData\ChampionDto;

class Champion {

	/** @var ChampionDto[] */
	protected $_data;

	/**
	 * @var string
	 */
	protected $_format;

	/**
	 * @var string
	 */
	protected $_keys;

	/**
	 * @var string
	 */
	protected $_type;

	/**
	 * @var string
	 */
	protected $_version;

	/**
	 * @see http://developer.riotgames.com/api/methods#!/544/1725
	 * @param $apiResult
	 */
	public function __construct($apiResult) {
		if (!empty($apiResult->data)) {
			foreach ($apiResult->data as $champion) {
				$this->_data[] = new ChampionDto($champion);
			}
		}
		$this->_format  = $apiResult->format;
		$this->_keys    = $apiResult->keys;
		$this->_type    = $apiResult->type;
		$this->_version = $apiResult->version;
	}

	/**
	 * @param int|null $num
	 * @return ChampionDto[]|ChampionDto|false
	 */
	public function champions($num = null) {
		if ($num !== null) {
			$num = (int) $num;
			if (isset($this->_data[$num])) {
				return $this->_data[$num];
			}

			return false;
		}
		else {
			return $this->_data;
		}
	}

	/**
	 * @return string
	 */
	public function format() {
		return $this->_format;
	}

	/**
	 * @return string
	 */
	public function keys() {
		return $this->_keys;
	}

	/**
	 * @return string
	 */
	public function type() {
		return $this->_type;
	}

	/**
	 * @return string
	 */
	public function version() {
		return $this->_version;
	}

} 