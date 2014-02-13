<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 13.02.14
 * Time: 18:40
 */

namespace vendor\Liker\Riot\Api;


class Request {

	public static function make($uri) {
		$ch = curl_init($uri);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		return curl_exec($ch);
	}

} 