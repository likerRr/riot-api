<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 13.02.14
 * Time: 18:22
 */

namespace vendor\Liker\Riot\Api;


use vendor\Liker\Riot\Api;
use vendor\Liker\Riot\Error;

class Provider {

	/**
	 * Response on API call
	 * @var bool|null|object
	 */
	protected $_api_result = null;

	protected $_path_params = array();

	protected $_query_params = array();

	protected $_api_template = '';

	protected $_api_url = '';

	protected $_api_uri = '';

	protected $_status_error = false;

	/**
	 * @var Error
	 */
	protected $_status = null;

	/**
	 * @return $this
	 */
	public function request() {
		$this->buildApiUri();
		$result = json_decode(Request::make($this->_api_uri));
		$this->checkStatus($result);
		if ($this->isNoError()) {
			$this->_api_result = $result;
			if (method_exists($this, 'result_callback')) {
				call_user_func(array($this, 'result_callback'));
			}
		}

		return $this;
	}

	protected function checkStatus($statusJSON) {
		if (isset($statusJSON->status)) {
			$this->_status = new Error($statusJSON->status);
		}
	}

	public function isNoError() {
		if ($this->_status === null) {
			return true;
		}

		return false;
	}

	public function getErrorMessage() {
		return $this->_status->message;
	}

	public function getErrorCode() {
		return $this->_status->code;
	}

	/**
	 * @return $this
	 */
	protected function buildApiUri() {
		$url         = $this->_api_template;
		$pathParams  = $this->_path_params;
		$queryParams = $this->_query_params;
		$query = '';

		foreach ($pathParams as $param => $value) {
			$url = str_replace('{' . $param . '}', $value, $url);
		}
		foreach ($queryParams as $param => $value) {
			$query .= $param . '=' . $value . '&';
		}

		$this->_api_url = $url;
		$this->_api_uri = Api::API_URL . $url . '?' . $query . 'api_key=' . Api::key();

		return $this;
	}

} 