<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 14.02.14
 * Time: 14:54
 */

namespace vendor\Liker\Riot\Types\LolStaticData;

use vendor\Liker\Riot\Types\LolStaticData\Champion\ChampionSpellDto;
use vendor\Liker\Riot\Types\LolStaticData\Champion\ImageDto;
use vendor\Liker\Riot\Types\LolStaticData\Champion\InfoDto;
use vendor\Liker\Riot\Types\LolStaticData\Champion\PassiveDto;
use vendor\Liker\Riot\Types\LolStaticData\Champion\RecommendedDto;
use vendor\Liker\Riot\Types\LolStaticData\Champion\SkinDto;
use vendor\Liker\Riot\Types\LolStaticData\Champion\StatsDto;

class ChampionDto {

	/**
	 * @var string[]
	 */
	protected $_allyTips;

	/**
	 * @var string
	 */
	protected $_blurb;

	/**
	 * @var string[]
	 */
	protected $_enemytips;

	/**
	 * @var int
	 */
	protected $_id;

	/**
	 * @var ImageDto
	 */
	protected $_image;

	/**
	 * @var InfoDto
	 */
	protected $_info;

	/**
	 * @var string
	 */
	protected $_key;

	/**
	 * @var string
	 */
	protected $_lore;

	/**
	 * @var string
	 */
	protected $_name;

	/**
	 * @var string
	 */
	protected $_partype;

	/**
	 * @var PassiveDto
	 */
	protected $_passive;

	/**
	 * @var RecommendedDto[]
	 */
	protected $_recommended;

	/**
	 * @var SkinDto[]
	 */
	protected $_skins;

	/**
	 * @var ChampionSpellDto[]
	 */
	protected $_spells;

	/**
	 * @var StatsDto
	 */
	protected $_stats;

	/**
	 * @var string[]
	 */
	protected $_tags;

	/**
	 * @var string
	 */
	protected $_title;

	public function __construct($champion) {
		if (!empty($champion->allytips)) {
			foreach ($champion->allytips as $allyTip) {
				$this->_allyTips[] = $allyTip;
			}
		}
		$this->_blurb = $champion->blurb;
		if (!empty($champion->enemytips)) {
			foreach ($champion->enemytips as $enemyTip) {
				$this->_enemytips[] = $enemyTip;
			}
		}
		$this->_id      = $champion->id;
		$this->_image   = new ImageDto($champion->image);
		$this->_info    = new InfoDto($champion->info);
		$this->_key     = $champion->key;
		$this->_lore    = $champion->lore;
		$this->_name    = $champion->name;
		$this->_partype = $champion->partype;
		$this->_passive = new PassiveDto($champion->passive);
		if (!empty($champion->recommended)) {
			foreach ($champion->recommended as $recommended) {
				$this->_recommended[] = new RecommendedDto($recommended);
			}
		}
		if (!empty($champion->skins)) {
			foreach ($champion->skins as $skin) {
				$this->_skins[] = new SkinDto($skin);
			}
		}
		if (!empty($champion->spells)) {
			foreach ($champion->spells as $spell) {
				$this->_spells[] = new ChampionSpellDto($spell);
			}
		}
		$this->_stats = new StatsDto($champion->stats);
		if (!empty($champion->tags)) {
			foreach ($champion->tags as $tag) {
				$this->_tags[] = $tag;
			}
		}
		$this->_title = $champion->title;
	}

	/**
	 * @return \string[]
	 */
	public function allyTips() {
		return $this->_allyTips;
	}

	/**
	 * @return string
	 */
	public function blurb() {
		return $this->_blurb;
	}

	/**
	 * @return \string[]
	 */
	public function enemyTips() {
		return $this->_enemytips;
	}

	/**
	 * @return int
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
	 * @return InfoDto
	 */
	public function info() {
		return $this->_info;
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
	public function lore() {
		return $this->_lore;
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
	public function parType() {
		return $this->_partype;
	}

	/**
	 * @return PassiveDto
	 */
	public function passive() {
		return $this->_passive;
	}

	/**
	 * @param int $num
	 * @return RecommendedDto[]|RecommendedDto|false
	 */
	public function recommended($num = null) {
		if ($num !== null) {
			$num = (int) $num;

			return isset($this->_recommended[$num]) ? $this->_recommended[$num] : false;
		}

		return $this->_recommended;
	}

	/**
	 * @return SkinDto[]
	 */
	public function skins() {
		return $this->_skins;
	}

	/**
	 * @return ChampionSpellDto[]
	 */
	public function spells() {
		return $this->_spells;
	}

	/**
	 * @return StatsDto
	 */
	public function stats() {
		return $this->_stats;
	}

	/**
	 * @return \string[]
	 */
	public function tags() {
		return $this->_tags;
	}

	/**
	 * @return string
	 */
	public function title() {
		return $this->_title;
	}

} 