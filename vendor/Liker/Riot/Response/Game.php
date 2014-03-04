<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 04.03.14
 * Time: 11:27
 */

namespace vendor\Liker\Riot\Response;


use vendor\Liker\Riot\Types\GameDto;

class Game {

	/** @var string */
	public $summonerId;

	/** @var GameDto[] */
	public $games;

} 