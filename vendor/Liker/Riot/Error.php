<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 14.02.14
 * Time: 15:48
 */

namespace vendor\Liker\Riot;


class Error {

	/**
	 * Error code
	 * @var int
	 */
	public $code;

	/**
	 * Error message
	 * @var string
	 */
	public $message;

	/**
	 * Set up error code and message
	 * @param $statusJSON
	 */
	public function __construct($statusJSON) {
		$this->code    = $statusJSON->status_code;
		$this->message = $statusJSON->message;
	}

} 