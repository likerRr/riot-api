<?php
/**
 * Created by PhpStorm.
 * User: Alexey Lizurchik
 * Date: 26.03.14
 * Time: 15:01
 */

namespace vendor\Liker\Riot\Types\LolStaticData\MasteryList;
use vendor\Liker\Riot\Types\LolStaticData\MasteryList\MasteryTree\MasteryTreeListDto;

/**
 * Class MasteryTreeDto
 * @package vendor\Liker\Riot\Types\LolStaticData\MasteryList
 */
class MasteryTreeDto {

	/**
	 * @var MasteryTreeListDto[]
	 */
	protected $_defence;

	/**
	 * @var MasteryTreeListDto[]
	 */
	protected $_offense;

	/**
	 * @var MasteryTreeListDto[]
	 */
	protected $_utility;

	function __construct($masteryTree) {
		if (!empty($masteryTree->Defense)) {
			foreach ($masteryTree->Defense as $defense) {
				$this->_defence[] = new MasteryTreeListDto($defense);
			}
		}
		if (!empty($masteryTree->Offense)) {
			foreach ($masteryTree->Offense as $offense) {
				$this->_offense[] = new MasteryTreeListDto($offense);
			}
		}
		if (!empty($masteryTree->Utility)) {
			foreach ($masteryTree->Utility as $utility) {
				$this->_utility[] = new MasteryTreeListDto($utility);
			}
		}
	}

	/**
	 * @param int $num
	 * @return MasteryTreeListDto[]|MasteryTreeListDto|false
	 */
	public function defence($num = null) {
		if ($num !== null) {
			$num = (int) $num;

			return (isset($this->_defence[$num])) ? $this->_defence[$num] : false;
		}

		return $this->_defence;
	}

	/**
	 * @param int $num
	 * @return MasteryTreeListDto[]|MasteryTreeListDto|false
	 */
	public function offense($num = null) {
		if ($num !== null) {
			$num = (int) $num;

			return (isset($this->_offense[$num])) ? $this->_offense[$num] : false;
		}

		return $this->_offense;
	}

	/**
	 * @param int $num
	 * @return MasteryTreeListDto[]|MasteryTreeListDto|false
	 */
	public function utility($num = null) {
		if ($num !== null) {
			$num = (int) $num;

			return (isset($this->_utility[$num])) ? $this->_utility[$num] : false;
		}

		return $this->_utility;
	}

} 