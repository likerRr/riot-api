<?php
/**
 * Created by PhpStorm.
 * User: Alexey Lizurchik
 * Date: 17.03.14
 * Time: 16:26
 */

namespace vendor\Liker\Riot\Types\LolStaticData\Champion\ChampionSpell;


class SpellVarsDto {

	/**
	 * @var double
	 */
	protected $_coeff;

	/**
	 * @var
	 */
	protected $_dyn;

	/**
	 * @var string
	 */
	protected $_key;

	/**
	 * @var string
	 */
	protected $_link;

	public function __construct($spellVars) {
		$this->_coeff = $spellVars->coeff;
		$this->_dyn   = $spellVars->dyn;
		$this->_key   = $spellVars->key;
		$this->_link  = $spellVars->link;
	}

	/**
	 * @return float
	 *
	 */
	public function coefficient() {
		return $this->_coeff;
	}

	/**
	 * @return mixed
	 */
	public function dyn() {
		return $this->_dyn;
	}

	/**
	 * @return string
	 */
	public function key() {
		return $this->_key;
	}

	/**
	 * @return string
	 */
	public function link() {
		return $this->_link;
	}

} 