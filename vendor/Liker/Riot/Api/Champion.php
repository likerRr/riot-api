<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 13.02.14
 * Time: 18:11
 */

namespace vendor\Liker\Riot\Api;


use vendor\Liker\Riot\Api;

class Champion extends Api implements Provider {

	protected $_v = '1.1';

	protected $_region = '';

	protected static $_instance = null;

	protected $_json = '{}';

	protected function __construct($region) {
		$this->_region = $region;

	}

	/**
	 * @param $region
	 * @return Champion
	 */
	public static function instance($region) {
		if (Champion::$_instance === null) {
			Champion::$_instance = new Champion($region);
		}

		return Champion::$_instance;
	}

	public function get() {
		$uri = $this->makeUri();
		$this->_json = Request::make($uri);

		return $this;
	}

	public function makeUri() {
		$uri = urlencode(Provider::API_URL . $this->_region . '/v' . $this->_v . '/champion');

		return $uri;
	}

} 