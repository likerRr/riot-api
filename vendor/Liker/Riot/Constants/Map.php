<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 13.02.14
 * Time: 14:33
 */

namespace vendor\Liker\Riot\Constants;


use vendor\Liker\Riot\Constants\Map\Info;

class Map {

	public static function name($id) {
		return new Info($id);
	}

} 