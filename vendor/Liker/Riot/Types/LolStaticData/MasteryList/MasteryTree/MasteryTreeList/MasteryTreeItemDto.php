<?php
/**
 * Created by PhpStorm.
 * User: Alexey Lizurchik
 * Date: 26.03.14
 * Time: 15:16
 */

namespace vendor\Liker\Riot\Types\LolStaticData\MasteryList\MasteryTree\MasteryTreeList;

/**
 * Class MasteryTreeItemDto
 * @package vendor\Liker\Riot\Types\LolStaticData\MasteryList\MasteryTree\MasteryTreeList
 */
class MasteryTreeItemDto {

	/**
	 * @var string
	 */
	protected $_masteryId;

	/**
	 * @var string
	 */
	protected $_prereq;

	function __construct($masteryTreeItem) {
		$this->_masteryId = $masteryTreeItem->masteryId;
		$this->_prereq    = $masteryTreeItem->prereq;
	}

	/**
	 * @return string
	 */
	public function masteryId() {
		return $this->_masteryId;
	}

	/**
	 * @return string
	 */
	public function prereq() {
		return $this->_prereq;
	}

}