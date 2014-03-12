<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 04.03.14
 * Time: 11:27
 */

namespace vendor\Liker\Riot\Response\Game;


use vendor\Liker\Riot\Types\GameDto;

class Game {

	/** @var string */
	private $_summonerId;

	/** @var GameDto[] */
	private $_games;

	/**
	 * @param $apiResult
	 * @see https://developer.riotgames.com/api/methods#!/546/1727
	 */
	public function __construct($apiResult) {
		$this->_summonerId = $apiResult->summonerId;
		if (!empty($apiResult->games)) {
			foreach ($apiResult->games as $game) {
				$this->_games[] = new GameDto($game);
			}
		}
	}

	/**
	 * Get summoner id
	 * @return string
	 */
	public function summonerId() {
		return $this->_summonerId;
	}

	/**
	 * Get all games as array of GameDto objects or single game
	 * @param null|int $num
	 * @return false|GameDto|GameDto[]
	 */
	public function games($num = null) {
		if ($num !== null) {
			$num = (int) $num;
			if (isset($this->_games[$num])) {
				return $this->_games[$num];
			}

			return false;
		}
		else {
			return $this->_games;
		}
	}

} 