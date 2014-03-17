<?php
/**
 * Created by PhpStorm.
 * User: Alexey Lizurchik
 * Date: 17.03.14
 * Time: 14:32
 */

namespace vendor\Liker\Riot\Types\LolStaticData\Champion;


class StatsDto {

	/**
	 * @var double
	 */
	protected $_armor;

	/**
	 * @var double
	 */
	protected $_armorperlevel;

	/**
	 * @var double
	 */
	protected $_attackdamage;

	/**
	 * @var double
	 */
	protected $_attackdamageperlevel;

	/**
	 * @var double
	 */
	protected $_attackrange;

	/**
	 * @var double
	 */
	protected $_attackspeedoffset;

	/**
	 * @var double
	 */
	protected $_attackspeedperlevel;

	/**
	 * @var double
	 */
	protected $_crit;

	/**
	 * @var double
	 */
	protected $_critperlevel;

	/**
	 * @var double
	 */
	protected $_hp;

	/**
	 * @var double
	 */
	protected $_hpperlevel;

	/**
	 * @var double
	 */
	protected $_hpregen;

	/**
	 * @var double
	 */
	protected $_hpregenperlevel;

	/**
	 * @var double
	 */
	protected $_movespeed;

	/**
	 * @var double
	 */
	protected $_mp;

	/**
	 * @var double
	 */
	protected $_mpperlevel;

	/**
	 * @var double
	 */
	protected $_mpregen;

	/**
	 * @var double
	 */
	protected $_mpregenperlevel;

	/**
	 * @var double
	 */
	protected $_spellblock;

	/**
	 * @var double
	 */
	protected $_spellblockperlevel;

	function __construct($stats)
	{
		$this->_armor                = $stats->armor;
		$this->_armorperlevel        = $stats->armorperlevel;
		$this->_attackdamage         = $stats->attackdamage;
		$this->_attackdamageperlevel = $stats->attackdamageperlevel;
		$this->_attackrange          = $stats->attackrange;
		$this->_attackspeedoffset    = $stats->attackspeedoffset;
		$this->_attackspeedperlevel  = $stats->attackspeedperlevel;
		$this->_crit                 = $stats->crit;
		$this->_critperlevel         = $stats->critperlevel;
		$this->_hp                   = $stats->hp;
		$this->_hpperlevel           = $stats->hpperlevel;
		$this->_hpregen              = $stats->hpregen;
		$this->_hpregenperlevel      = $stats->hpregenperlevel;
		$this->_movespeed            = $stats->movespeed;
		$this->_mp                   = $stats->mp;
		$this->_mpperlevel           = $stats->mpperlevel;
		$this->_mpregen              = $stats->mpregen;
		$this->_mpregenperlevel      = $stats->mpregenperlevel;
		$this->_spellblock           = $stats->spellblock;
		$this->_spellblockperlevel   = $stats->spellblockperlevel;
	}

	/**
	 * @return float
	 */
	public function armor() {
		return $this->_armor;
	}

	/**
	 * @return float
	 */
	public function armorPerLevel() {
		return $this->_armorperlevel;
	}

	/**
	 * @return float
	 */
	public function attackDamage() {
		return $this->_attackdamage;
	}

	/**
	 * @return float
	 */
	public function attackDamagePerLevel() {
		return $this->_attackdamageperlevel;
	}

	/**
	 * @return float
	 */
	public function attackRange() {
		return $this->_attackrange;
	}

	/**
	 * @return float
	 */
	public function attackSpeedOffset() {
		return $this->_attackspeedoffset;
	}

	/**
	 * @return float
	 */
	public function attackSpeedPerLevel() {
		return $this->_attackspeedperlevel;
	}

	/**
	 * @return float
	 */
	public function crit() {
		return $this->_crit;
	}

	/**
	 * @return float
	 */
	public function critPerLevel() {
		return $this->_critperlevel;
	}

	/**
	 * @return float
	 */
	public function hp() {
		return $this->_hp;
	}

	/**
	 * @return float
	 */
	public function hpPerLevel() {
		return $this->_hpperlevel;
	}

	/**
	 * @return float
	 */
	public function hpRegen() {
		return $this->_hpregen;
	}

	/**
	 * @return float
	 */
	public function hpRegenPerLevel() {
		return $this->_hpregenperlevel;
	}

	/**
	 * @return float
	 */
	public function moveSpeed() {
		return $this->_movespeed;
	}

	/**
	 * @return float
	 */
	public function mp() {
		return $this->_mp;
	}

	/**
	 * @return float
	 */
	public function mpPerLevel() {
		return $this->_mpperlevel;
	}

	/**
	 * @return float
	 */
	public function mpRegen() {
		return $this->_mpregen;
	}

	/**
	 * @return float
	 */
	public function mpRegenPerLevel() {
		return $this->_mpregenperlevel;
	}

	/**
	 * @return float
	 */
	public function spellBlock() {
		return $this->_spellblock;
	}

	/**
	 * @return float
	 */
	public function spellBlockPerLevel() {
		return $this->_spellblockperlevel;
	}

} 