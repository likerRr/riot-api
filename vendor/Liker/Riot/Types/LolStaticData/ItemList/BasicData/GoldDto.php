<?php
/**
 * Created by PhpStorm.
 * User: Alexey Lizurchik
 * Date: 19.03.14
 * Time: 17:33
 */

namespace vendor\Liker\Riot\Types\LolStaticData\ItemList\BasicData;

class GoldDto {

	/**
	 * @var int
	 */
	protected $_base;

	/**
	 * @var boolean
	 */
	protected $_purchasable;

	/**
	 * @var int
	 */
	protected $_sell;

	/**
	 * @var int
	 */
	protected $_total;

	function __construct($gold) {
		$this->_base        = $gold->base;
		$this->_purchasable = $gold->purchasable;
		$this->_sell        = $gold->sell;
		$this->_total       = $gold->total;
	}

	/**
	 * @return int
	 */
	public function base() {
		return $this->_base;
	}

	/**
	 * @return boolean
	 */
	public function purchasable() {
		return $this->_purchasable;
	}

	/**
	 * @return int
	 */
	public function sell() {
		return $this->_sell;
	}

	/**
	 * @return int
	 */
	public function total() {
		return $this->_total;
	}

} 