<?php
/**
 * Created by PhpStorm.
 * User: Alexey Lizurchik
 * Date: 17.03.14
 * Time: 14:32
 */

namespace vendor\Liker\Riot\Types\LolStaticData\Champion;

use vendor\Liker\Riot\Types\LolStaticData\Champion\ChampionSpell\LevelTipDto;
use vendor\Liker\Riot\Types\LolStaticData\Champion\ChampionSpell\SpellVarsDto;

class ChampionSpellDto {

	/**
	 * @var int[]
	 */
	protected $_cooldown;

	/**
	 * @var string
	 */
	protected $_cooldownBurn;

	/**
	 * @var int[]
	 */
	protected $_cost;

	/**
	 * @var string
	 */
	protected $_costBurn;

	/**
	 * @var string
	 */
	protected $_costType;

	/**
	 * @var string
	 */
	protected $_description;

	/**
	 * @var object[]
	 */
	protected $_effect;

	/**
	 * @var string[]
	 */
	protected $_effectBurn;

	/**
	 * @var string
	 */
	protected $_id;

	/**
	 * @var ImageDto
	 */
	protected $_image;

	/**
	 * @var LevelTipDto
	 */
	protected $_leveltip;

	/**
	 * @var int
	 */
	protected $_maxrank;

	/**
	 * @var string
	 */
	protected $_name;

	/**
	 * @var int[]
	 */
	protected $_range;

	/**
	 * @var string
	 */
	protected $_rangeBurn;

	/**
	 * @var string
	 */
	protected $_resource;

	/**
	 * @var string
	 */
	protected $_tooltip;

	/**
	 * @var SpellVarsDto[]
	 */
	protected $_vars;

	public function __construct($championSpell) {
		$this->_cooldown     = $championSpell->cooldown;
		$this->_cooldownBurn = $championSpell->cooldownBurn;
		$this->_cost         = $championSpell->cost;
		$this->_costBurn     = $championSpell->costBurn;
		$this->_costType     = $championSpell->costType;
		$this->_description  = $championSpell->description;
		$this->_effect       = $championSpell->effect;
		$this->_effectBurn   = $championSpell->effectBurn;
		$this->_id           = $championSpell->id;
		$this->_image        = new ImageDto($championSpell->image);
		$this->_leveltip     = new LevelTipDto($championSpell->leveltip);
		$this->_maxrank      = $championSpell->maxrank;
		$this->_name         = $championSpell->name;
		$this->_range        = $championSpell->range;
		$this->_rangeBurn    = $championSpell->rangeBurn;
		$this->_resource     = $championSpell->resource;
		$this->_tooltip      = $championSpell->tooltip;
		if (!empty($championSpell->vars)) {
			foreach ($championSpell->vars as $var) {
				$this->_vars = new SpellVarsDto($var);
			}
		}
	}

	/**
	 * @return \int[]
	 */
	public function coolDown() {
		return $this->_cooldown;
	}

	/**
	 * @return string
	 */
	public function coolDownBurn() {
		return $this->_cooldownBurn;
	}

	/**
	 * @return \int[]
	 */
	public function cost() {
		return $this->_cost;
	}

	/**
	 * @return string
	 */
	public function costBurn() {
		return $this->_costBurn;
	}

	/**
	 * @return string
	 */
	public function costType() {
		return $this->_costType;
	}

	/**
	 * @return string
	 */
	public function description() {
		return $this->_description;
	}

	/**
	 * @return \object[]
	 */
	public function effect() {
		return $this->_effect;
	}

	/**
	 * @return \string[]
	 */
	public function effectBurn() {
		return $this->_effectBurn;
	}

	/**
	 * @return string
	 */
	public function id() {
		return $this->_id;
	}

	/**
	 * @return ImageDto
	 */
	public function image() {
		return $this->_image;
	}

	/**
	 * @return LevelTipDto
	 */
	public function levelTip() {
		return $this->_leveltip;
	}

	/**
	 * @return int
	 */
	public function maxRank() {
		return $this->_maxrank;
	}

	/**
	 * @return string
	 */
	public function name() {
		return $this->_name;
	}

	/**
	 * @return \int[]
	 */
	public function range() {
		return $this->_range;
	}

	/**
	 * @return string
	 */
	public function rangeBurn() {
		return $this->_rangeBurn;
	}

	/**
	 * @return string
	 */
	public function resource() {
		return $this->_resource;
	}

	/**
	 * @return string
	 */
	public function tooltip() {
		return $this->_tooltip;
	}

	/**
	 * @return SpellVarsDto[]
	 */
	public function vars() {
		return $this->_vars;
	}

} 