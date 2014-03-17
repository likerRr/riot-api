<?php
/**
 * Created by PhpStorm.
 * User: Alexey Lizurchik
 * Date: 17.03.14
 * Time: 16:56
 */

namespace vendor\Liker\Riot\Types\LolStaticData\Champion\Recommended;

use vendor\Liker\Riot\Types\LolStaticData\Champion\Recommended\Block\BlockItemDto;

class BlockDto {

	/**
	 * @var BlockItemDto[]
	 */
	protected $_items;

	/**
	 * @var string
	 */
	protected $_type;

	function __construct($block) {
		if (!empty($block->items)) {
			foreach ($block->items as $blockItem) {
				$this->_items[] = new BlockItemDto($blockItem);
			}
		}
		$this->_type  = $block->type;
	}

	/**
	 * @param int $num
	 * @return BlockItemDto[]|BlockItemDto|false
	 */
	public function items($num = null) {
		if ($num !== null) {
			$num = (int) $num;

			return (isset($this->_items[$num])) ? $this->_items[$num] : false;
		}

		return $this->_items;
	}

	/**
	 * @return string
	 */
	public function type() {
		return $this->_type;
	}

} 