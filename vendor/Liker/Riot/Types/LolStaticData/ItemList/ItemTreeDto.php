<?php
/**
 * Created by PhpStorm.
 * User: Alexey Lizurchik
 * Date: 25.03.14
 * Time: 17:15
 */

namespace vendor\Liker\Riot\Types\LolStaticData\ItemList;

/**
 * Class TreeDto
 * @package vendor\Liker\Riot\Types\LolStaticData\ItemList
 */
class ItemTreeDto {

	/**
	 * @var string
	 */
	protected $_header;

	/**
	 * @var string[]
	 */
	protected $_tags;

	/**
	 * @param $tree
	 */
	function __construct($tree) {
		$this->_header = $tree->header;
		$this->_tags   = $tree->tags;
	}

	/**
	 * @return string
	 */
	public function header() {
		return $this->_header;
	}

	/**
	 * @return \string[]
	 */
	public function tags() {
		return $this->_tags;
	}


} 