<?php
/**
 * Created by PhpStorm.
 * User: Alexey Lizurchik
 * Date: 26.03.14
 * Time: 15:12
 */

namespace vendor\Liker\Riot\Types\LolStaticData\MasteryList\MasteryTree;
use vendor\Liker\Riot\Types\LolStaticData\MasteryList\MasteryTree\MasteryTreeList\MasteryTreeItemDto;

/**
 * Class MasteryTreeListDto
 * @package vendor\Liker\Riot\Types\LolStaticData\MasteryList\MasteryTree
 */
class MasteryTreeListDto {

	/**
	 * @var MasteryTreeItemDto[]
	 */
	protected $_masteryTreeItems;

	/**
	 * @param $masteryTreeList
	 */
	function __construct($masteryTreeList) {
		if (!empty($masteryTreeList->masteryTreeItems)) {
			foreach ($masteryTreeList->masteryTreeItems as $masteryTreeItem) {
				$this->_masteryTreeItems[] = new MasteryTreeItemDto($masteryTreeItem);
			}
		}
	}

	/**
	 * @param int $num
	 * @return MasteryTreeItemDto[]|MasteryTreeItemDto|false
	 */
	public function masteryTreeItems($num = null) {
		if ($num !== null) {
			$num = (int) $num;

			return (isset($this->_masteryTreeItems[$num])) ? $this->_masteryTreeItems[$num] : false;
		}

		return $this->_masteryTreeItems;
	}

} 