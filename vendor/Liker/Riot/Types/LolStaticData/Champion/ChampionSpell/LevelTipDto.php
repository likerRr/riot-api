<?php
/**
 * Created by PhpStorm.
 * User: Alexey Lizurchik
 * Date: 17.03.14
 * Time: 16:22
 */

namespace vendor\Liker\Riot\Types\LolStaticData\Champion\ChampionSpell;


class LevelTipDto {

	/**
	 * @var string[]
	 */
	protected $_effect;

	/**
	 * @var string[]
	 */
	protected $_label;

	public function __construct($levelTip) {
		$this->_effect = $levelTip->effect;
		$this->_label  = $levelTip->label;
	}

	/**
	 * @param int $num
	 * @return string[]|string|false
	 */
	public function effect($num = null) {
		if ($num !== null) {
			$num = (int) $num;
			return isset($this->_effect[$num]) ? $this->_effect[$num] : false;
		}

		return $this->_effect;
	}

	/**
	 * @param null $num
	 * @return \string[]|string|false
	 */
	public function label($num = null) {
		if ($num !== null) {
			return (isset($this->_label[$num])) ? $this->_label[$num] : false;
		}

		return $this->_label;
	}


} 