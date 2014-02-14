<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 13.02.14
 * Time: 14:31
 */

namespace vendor\Liker\Riot;

use vendor\Liker\Riot\Api\Champion;
use vendor\Liker\Riot\Api\Provider;

class Api extends Provider {

	/**
	 * Api URL
	 */
	const API_URL = 'https://prod.api.pvp.net/api/lol/';

	/**
	 * Developer's API key
	 * @var string|null
	 */
	protected $_key = null;


	/** @var Api */
	protected static $_instance = null;

	/**
	 * @param $key API key
	 * @return Api
	 */
	public static function instance($key) {
		if (Api::$_instance === null) {
			Api::$_instance = new Api($key);
		}

		return Api::$_instance;
	}

	/**
	 * @param $key API key
	 */
	protected function __construct($key) {
		$this->_key = $key;
	}

	/**
	 * @param $region
	 * @return Champion
	 */
	public function champion($region) {
		$champion = new Champion($region);

		return $champion;
	}

	/**
	 * @return string|null
	 */
	public static function key() {
		return Api::$_instance->_key;
	}


}