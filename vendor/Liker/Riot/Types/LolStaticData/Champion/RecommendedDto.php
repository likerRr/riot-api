<?php
/**
 * Created by PhpStorm.
 * User: Alexey Lizurchik
 * Date: 17.03.14
 * Time: 14:31
 */

namespace vendor\Liker\Riot\Types\LolStaticData\Champion;

use vendor\Liker\Riot\Types\LolStaticData\Champion\Recommended\BlockDto;

class RecommendedDto {

	/**
	 * @var BlockDto[]
	 */
	protected $_blocks;

	/**
	 * @var string
	 */
	protected $_champion;

	/**
	 * @var string
	 */
	protected $_map;

	/**
	 * @var string
	 */
	protected $_mode;

	/**
	 * @var boolean
	 */
	protected $_priority;

	/**
	 * @var string
	 */
	protected $_title;

	/**
	 * @var string
	 */
	protected $_type;

	function __construct($recommended) {
		if (!empty($recommended->blocks)) {
			foreach ($recommended->blocks as $block) {
				$this->_blocks[] = new BlockDto($block);
			}
		}
		$this->_champion = $recommended->champion;
		$this->_map      = $recommended->map;
		$this->_mode     = $recommended->mode;
		$this->_priority = $recommended->priority;
		$this->_title    = $recommended->title;
		$this->_type     = $recommended->type;
	}

	/**
	 * @param null $num
	 * @return BlockDto[]|BlockDto|false
	 */
	public function blocks($num = null) {
		if ($num !== null) {
			$num = (int) $num;

			return (isset($this->_blocks[$num])) ? $this->_blocks[$num] : false;
		}

		return $this->_blocks;
	}

	/**
	 * @return string
	 */
	public function champion() {
		return $this->_champion;
	}

	/**
	 * @return string
	 */
	public function map() {
		return $this->_map;
	}

	/**
	 * @return string
	 */
	public function mode() {
		return $this->_mode;
	}

	/**
	 * @return boolean
	 */
	public function priority() {
		return $this->_priority;
	}

	/**
	 * @return string
	 */
	public function title() {
		return $this->_title;
	}

	/**
	 * @return string
	 */
	public function type() {
		return $this->_type;
	}

} 