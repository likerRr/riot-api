<?php
/**
 * Created by PhpStorm.
 * User: Alexey Lizurchik
 * Date: 17.03.14
 * Time: 14:31
 */

namespace vendor\Liker\Riot\Types\LolStaticData\Champion;


class SkinDto {

	/**
	 * @var string
	 */
	protected $_id;

	/**
	 * @var string
	 */
	protected $_name;

	/**
	 * @var int
	 */
	protected $_num;

	public function __construct($skin) {
		$this->_id   = $skin->id;
		$this->_name = $skin->name;
		$this->_num  = $skin->num;
	}

	/**
	 * @return string
	 */
	public function id() {
		return $this->_id;
	}

	/**
	 * @return string
	 */
	public function name() {
		return $this->_name;
	}

	/**
	 * @return int
	 */
	public function num() {
		return $this->_num;
	}

} 