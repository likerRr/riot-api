<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 14.02.14
 * Time: 18:14
 */

namespace vendor\Liker\Riot\Response;

use vendor\Liker\Riot\Types\StaticChampionDto;

class StaticChampion {

	/** @var StaticChampionDto[] */
	public $data;

	/**
	 * @var string
	 */
	public $format;

	/**
	 * @var string
	 */
	public $keys;

	/**
	 * @var string
	 */
	public $type;

	/**
	 * @var string
	 */
	public $version;

} 