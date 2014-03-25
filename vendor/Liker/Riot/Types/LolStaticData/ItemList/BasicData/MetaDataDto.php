<?php
/**
 * Created by PhpStorm.
 * User: Alexey Lizurchik
 * Date: 25.03.14
 * Time: 16:28
 */

namespace vendor\Liker\Riot\Types\LolStaticData\ItemList\BasicData;

class MetaDataDto {

	/**
	 * @var boolean
	 */
	protected $_isRune;

	/**
	 * @var string
	 */
	protected $_tier;

	/**
	 * @var string
	 */
	protected $_type;

	function __construct($metaData) {
		$this->_isRune = $metaData->isRune;
		$this->_tier   = $metaData->tier;
		$this->_type   = $metaData->type;
	}

	/**
	 * @return boolean
	 */
	public function isRune() {
		return $this->_isRune;
	}

	/**
	 * @return string
	 */
	public function tier() {
		return $this->_tier;
	}

	/**
	 * @return string
	 */
	public function type() {
		return $this->_type;
	}


} 