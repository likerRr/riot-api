<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 14.02.14
 * Time: 14:54
 */

namespace vendor\Liker\Riot\Types\LolStaticData;


class StaticChampionDto {

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
		$this->id = $champion->id;
		$this->_image = new ImageDto($champion->image);
	}


} 