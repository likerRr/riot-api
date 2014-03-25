<?php
/**
 * Created by PhpStorm.
 * User: Alexey Lizurchik
 * Date: 25.03.14
 * Time: 17:13
 */

namespace vendor\Liker\Riot\Types\LolStaticData\ItemList;

/**
 * Class GroupDto
 * @package vendor\Liker\Riot\Types\LolStaticData\ItemList
 */
class GroupDto {

	/**
	 * @var string
	 */
	protected $_maxGroupOwnable;

	/**
	 * @var string
	 */
	protected $_id;

	function __construct($group) {
		$this->_id              = $group->id;
		$this->_maxGroupOwnable = $group->maxGroupOwnable;
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
	public function maxGroupOwnable() {
		return $this->_maxGroupOwnable;
	}

} 