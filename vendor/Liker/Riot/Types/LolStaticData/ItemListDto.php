<?php
/**
 * Created by PhpStorm.
 * User: Alexey Lizurchik
 * Date: 19.03.14
 * Time: 16:12
 */

namespace vendor\Liker\Riot\Types\LolStaticData;

use vendor\Liker\Riot\Types\LolStaticData\ItemList\BasicDataDto;
use vendor\Liker\Riot\Types\LolStaticData\ItemList\GroupDto;
use vendor\Liker\Riot\Types\LolStaticData\ItemList\ItemTreeDto;

/**
 * Class ItemListDto
 * @package vendor\Liker\Riot\Types\LolStaticData
 */
class ItemListDto {

	/**
	 * @var BasicDataDto
	 */
	protected $_basic;

	/**
	 * @var ItemDto[]
	 */
	protected $_data;

	/**
	 * @var GroupDto[]
	 */
	protected $_groups;

	/**
	 * @var ItemTreeDto[]
	 */
	protected $_tree;

	/**
	 * @var string
	 */
	protected $_type;

	/**
	 * @var string
	 */
	protected $_version;

	/**
	 * @param $itemList
	 */
	function __construct($itemList) {
		$this->_basic = new BasicDataDto($itemList->basic);
		if (!empty($itemList->data)) {
			foreach ($itemList->data as $dataId => $dataVal) {
				$this->_data[$dataId] = new ItemDto($dataVal);
			}
		}
		if (!empty($itemList->groups)) {
			foreach ($itemList->groups as $group) {
				$this->_groups[] = new GroupDto($group);
			}
		}
		if (!empty($itemList->tree)) {
			foreach ($itemList->tree as $tree) {
				$this->_tree[] = new ItemTreeDto($tree);
			}
		}
		$this->_type    = $itemList->type;
		$this->_version = $itemList->version;
	}

	/**
	 * @return BasicDataDto
	 */
	public function basic() {
		return $this->_basic;
	}

	/**
	 * Return item by id
	 * @param int $id
	 * @return ItemDto[]|ItemDto|false
	 */
	public function data($id = null) {
		if ($id !== null) {
			$id = (int) $id;

			return (isset($this->_data[$id])) ? $this->_data[$id] : false;
		}

		return $this->_data;
	}

	/**
	 * @param int $num
	 * @return GroupDto[]|GroupDto|false
	 */
	public function groups($num = null) {
		if ($num !== null) {
			$num = (int) $num;

			return (isset($this->_groups[$num])) ? $this->_groups[$num] : false;
		}

		return $this->_groups;
	}

	/**
	 * @param int $num
	 * @return ItemTreeDto[]|ItemTreeDto|false
	 */
	public function tree($num = null) {
		if ($num !== null) {
			$num = (int) $num;

			return (isset($this->_tree[$num])) ? $this->_tree[$num] : false;
		}
		return $this->_tree;
	}

	/**
	 * @return string
	 */
	public function type() {
		return $this->_type;
	}

	/**
	 * @return string
	 */
	public function version() {
		return $this->_version;
	}

} 