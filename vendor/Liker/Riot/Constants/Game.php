<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 13.02.14
 * Time: 15:26
 */

namespace vendor\Liker\Riot\Constants;


use vendor\Liker\Riot\Constants\Game\Mode;
use vendor\Liker\Riot\Constants\Game\Type;

class Game {

	public static function mode($mode) {
		return new Mode($mode);
	}

	public static function type($type) {
		return new Type($type);
	}

} 