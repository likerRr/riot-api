<?php
/**
 * Created by PhpStorm.
 * User: Alexey Lizurchik
 * Date: 19.03.14
 * Time: 16:27
 */

namespace vendor\Liker\Riot\Types\LolStaticData\ItemList;

use vendor\Liker\Riot\Types\LolStaticData\Champion\ImageDto;
use vendor\Liker\Riot\Types\LolStaticData\ItemList\BasicData\BasicDataStatsDto;
use vendor\Liker\Riot\Types\LolStaticData\ItemList\BasicData\GoldDto;
use vendor\Liker\Riot\Types\LolStaticData\ItemList\BasicData\MetaDataDto;

class BasicDataDto {

	/**
	 * @var string
	 */
	protected $_colloq;

	/**
	 * @var boolean
	 */
	protected $_consumeOnFull;

	/**
	 * @var boolean
	 */
	protected $_consumed;

	/**
	 * @var int
	 */
	protected $_depth;

	/**
	 * @var string
	 */
	protected $_description;

	/**
	 * @var string[]
	 */
	protected $_from;

	/**
	 * @var GoldDto
	 */
	protected $_gold;

	/**
	 * @var string
	 */
	protected $_group;

	/**
	 * @var boolean
	 */
	protected $_hideFromAll;

	/**
	 * @var ImageDto
	 */
	protected $_image;

	/**
	 * @var boolean
	 */
	protected $_inStore;

	/**
	 * @var string[]
	 */
	protected $_into;

	/**
	 * @var string[boolean]
	 */
	protected $_maps;

	/**
	 * @var string
	 */
	protected $_name;

	/**
	 * @var string
	 */
	protected $_plaintext;

	/**
	 * @var string
	 */
	protected $_requiredChampion;

	/**
	 * @var MetaDataDto
	 */
	protected $_rune;

	/**
	 * @var int
	 */
	protected $_specialRecipe;

	/**
	 * @var int
	 */
	protected $_stacks;

	/**
	 * @var BasicDataStatsDto
	 */
	protected $_stats;

	/**
	 * @var string[]
	 */
	protected $_tags;

	function __construct($basicData) {
		$this->_colloq           = $basicData->colloq;
		$this->_consumeOnFull    = $basicData->consumeOnFull;
		$this->_consumed         = $basicData->consumed;
		$this->_depth            = $basicData->depth;
		$this->_description      = $basicData->description;
		$this->_from             = $basicData->from;
		$this->_gold             = new GoldDto($basicData->gold);
		$this->_group            = $basicData->group;
		$this->_hideFromAll      = $basicData->hideFromAll;
		$this->_image            = new ImageDto($basicData->image);
		$this->_inStore          = $basicData->inStore;
		$this->_into             = $basicData->into;
		$this->_maps             = $basicData->maps;
		$this->_name             = $basicData->name;
		$this->_plaintext        = $basicData->plaintext;
		$this->_requiredChampion = $basicData->requiredChampion;
		$this->_rune             = new MetaDataDto($basicData->rune);
		$this->_specialRecipe    = $basicData->specialRecipe;
		$this->_stacks           = $basicData->stacks;
		$this->_stats            = new BasicDataStatsDto($basicData->stats);
		$this->_tags             = $basicData->tags;
	}

	/**
	 * @return string
	 */
	public function colloq() {
		return $this->_colloq;
	}

	/**
	 * @return boolean
	 */
	public function consumeOnFull() {
		return $this->_consumeOnFull;
	}

	/**
	 * @return boolean
	 */
	public function consumed() {
		return $this->_consumed;
	}

	/**
	 * @return int
	 */
	public function depth() {
		return $this->_depth;
	}

	/**
	 * @return string
	 */
	public function description() {
		return $this->_description;
	}

	/**
	 * @param int $num
	 * @return \string[]|string|false
	 */
	public function from($num = null) {
		if ($num !== null) {
			$num = (int) $num;

			return (isset($this->_from[$num])) ? $this->_from[$num] : false;
		}

		return $this->_from;
	}

	/**
	 * @return \vendor\Liker\Riot\Types\LolStaticData\ItemList\GoldDto
	 */
	public function gold() {
		return $this->_gold;
	}

	/**
	 * @return string
	 */
	public function group() {
		return $this->_group;
	}

	/**
	 * @return boolean
	 */
	public function hideFromAll() {
		return $this->_hideFromAll;
	}

	/**
	 * @return \vendor\Liker\Riot\Types\LolStaticData\Champion\ImageDto
	 */
	public function image() {
		return $this->_image;
	}

	/**
	 * @return boolean
	 */
	public function inStore() {
		return $this->_inStore;
	}

	/**
	 * @param int $num
	 * @return \string[]|string|false
	 */
	public function into($num = null) {
		if ($num !== null) {
			$num = (int) $num;

			return (isset($this->_into[$num])) ? $this->_into[$num] : false;
		}

		return $this->_into;
	}

	/**
	 * @param string $mapId
	 * @return string[boolean]|boolean
	 */
	public function maps($mapId = null) {
		if ($mapId !== null) {
			$mapId = (int) $mapId;

			return (isset($this->_maps[$mapId])) ? $this->_maps[$mapId] : false;
		}
		return $this->_maps;
	}

	/**
	 * @return string
	 */
	public function name() {
		return $this->_name;
	}

	/**
	 * @return string
	 */
	public function plaintext() {
		return $this->_plaintext;
	}

	/**
	 * @return string
	 */
	public function requiredChampion() {
		return $this->_requiredChampion;
	}

	/**
	 * @return \vendor\Liker\Riot\Types\LolStaticData\ItemList\MetaDataDto
	 */
	public function rune() {
		return $this->_rune;
	}

	/**
	 * @return int
	 */
	public function specialRecipe() {
		return $this->_specialRecipe;
	}

	/**
	 * @return int
	 */
	public function stacks() {
		return $this->_stacks;
	}

	/**
	 * @return \vendor\Liker\Riot\Types\LolStaticData\ItemList\BasicDataStatsDto
	 */
	public function stats() {
		return $this->_stats;
	}

	/**
	 * @param int $num
	 * @return \string[]|string|false
	 */
	public function tags($num = null) {
		if ($num !== null) {
			$num = (int) $num;

			return (isset($this->_tags[$num])) ? $this->_tags[$num] : false;
		}

		return $this->_tags;
	}

} 