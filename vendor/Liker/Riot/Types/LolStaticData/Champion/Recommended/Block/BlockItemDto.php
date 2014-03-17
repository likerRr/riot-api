<?php
/**
 * Created by PhpStorm.
 * User: Alexey Lizurchik
 * Date: 17.03.14
 * Time: 16:58
 */

namespace vendor\Liker\Riot\Types\LolStaticData\Champion\Recommended\Block;


class BlockItemDto {

	/**
	 * @var int
	 */
	protected $_count;

	/**
	 * @var string
	 */
	protected $_id;

	function __construct($blockItem) {
		$this->_count = $blockItem->count;
		$this->_id    = $blockItem->id;
	}

	/**
	 * @return int
	 */
	public function count() {
		return $this->_count;
	}

	/**
	 * @return string
	 */
	public function id() {
		return $this->_id;
	}

} 