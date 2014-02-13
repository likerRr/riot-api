<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 13.02.14
 * Time: 18:22
 */

namespace vendor\Liker\Riot\Api;


interface Provider {

	const API_URL = 'https://prod.api.pvp.net/api/lol/';

	public function makeUri();

} 