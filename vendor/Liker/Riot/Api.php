<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 13.02.14
 * Time: 14:31
 */

namespace vendor\Liker\Riot;

use vendor\Liker\Riot\Api\Champion;

class Api {

	protected $_key = null;

	protected static $_instance = null;

	public static function instance($key) {
		if (Api::$_instance === null) {
			Api::$_instance = new Api($key);
		}

		return Api::$_instance;
	}

	protected function __construct($key) {
		$this->_key = $key;
	}

	public function champion($region) {
		return Champion::instance($region)->get();
	}

}