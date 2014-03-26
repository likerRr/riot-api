<?php
/**
 * Created by PhpStorm.
 * User: Alexey Lizurchik
 * Date: 25.03.14
 * Time: 18:16
 */

namespace vendor\Liker\Riot\Types\LolStaticData;
use vendor\Liker\Riot\Types\LolStaticData\MasteryList\MasteryDto;
use vendor\Liker\Riot\Types\LolStaticData\MasteryList\MasteryTreeDto;

/**
 * Class MasteryListDto
 * @package vendor\Liker\Riot\Types\LolStaticData
 */
class MasteryListDto {

	/**
	 * @var MasteryDto[]
	 */
	protected $_data;

	/**
	 * @var MasteryTreeDto
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
	 * @param $masteryList
	 */
	function __construct($masteryList) {
		if (!empty($masteryList->data)) {
			foreach ($masteryList->data as $id => $data) {
				$this->_data[$id] = new MasteryDto($data);
			}
		}
		$this->_tree    = new MasteryTreeDto($masteryList->tree);
		$this->_type    = $masteryList->type;
		$this->_version = $masteryList->version;
	}

	/**
	 * @param int $masteryId
	 * @return false|MasteryDto[]|MasteryDto
	 */
	public function data($masteryId = null) {
		if ($masteryId !== null) {
			$masteryId = (int) $masteryId;

			return (isset($this->_data[$masteryId])) ? $this->_data[$masteryId] : false;
		}

		return $this->_data;
	}

	/**
	 * @return MasteryTreeDto
	 */
	public function tree() {
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