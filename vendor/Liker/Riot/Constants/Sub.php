<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 13.02.14
 * Time: 15:11
 */

namespace vendor\Liker\Riot\Constants;


use vendor\Liker\Riot\Constants\Sub\Type;

class Sub {

	public static function type($type) {
		return new Type($type);
	}

} 