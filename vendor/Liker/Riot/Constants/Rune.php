<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 13.02.14
 * Time: 17:16
 */

namespace vendor\Liker\Riot\Constants;


use vendor\Liker\Riot\Constants\Rune\Slot;

class Rune {

	public static function slot($id) {
		return new Slot($id);
	}

} 