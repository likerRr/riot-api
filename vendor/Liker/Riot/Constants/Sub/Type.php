<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 13.02.14
 * Time: 16:53
 */

namespace vendor\Liker\Riot\Constants\Sub;


class Type {

	const NONE              = 'NONE';
	const NORMAL            = 'NORMAL';
	const NORMAL_3x3        = 'NORMAL_3x3';
	const ODIN_UNRANKED     = 'ODIN_UNRANKED';
	const ARAM_UNRANKED_5x5 = 'ARAM_UNRANKED_5x5';
	const BOT               = 'BOT';
	const BOT_3x3           = 'BOT_3x3';
	const RANKED_SOLO_5x5   = 'RANKED_SOLO_5x5';
	const RANKED_TEAM_3x3   = 'RANKED_TEAM_3x3';
	const RANKED_TEAM_5x5   = 'RANKED_TEAM_5x5';
	const ONEFORALL_5x5     = 'ONEFORALL_5x5';
	const FIRSTBLOOD_1x1    = 'FIRSTBLOOD_1x1';
	const FIRSTBLOOD_2x2    = 'FIRSTBLOOD_2x2';

	protected $_type = 'Unknown';
	protected $_description = 'Type';
	protected $_loose = 'Unknown Type';

	public function __construct($type) {
		$this->init($type);
	}

	protected function init($type) {
		switch ($type) {
			case Type::NONE: {
				$this->make($type, 'Custom games', 'Custom');
				break;
			}
			case Type::NORMAL: {
				$this->make($type, 'Summoner\'s Rift unranked games', 'Summoner\'s Rift Normal');
				break;
			}
			case Type::NORMAL_3x3: {
				$this->make($type, 'Twisted Treeline unranked games', 'Twisted Treeline Normal');
				break;
			}
			case Type::ODIN_UNRANKED: {
				$this->make($type, 'Dominion/Crystal Scar games', 'Dominion');
				break;
			}
			case Type::ARAM_UNRANKED_5x5: {
				$this->make($type, 'ARAM / Howling Abyss games', 'ARAM');
				break;
			}
			case Type::BOT: {
				$this->make($type, 'Summoner\'s Rift and Crystal Scar games played against AI', 'Summoner\'s Rift\Dominion against AI');
				break;
			}
			case Type::BOT_3x3: {
				$this->make($type, 'Twisted Treeline games played against AI', 'Twisted Treeline against AI');
				break;
			}
			case Type::RANKED_SOLO_5x5: {
				$this->make($type, 'Summoner\'s Rift ranked solo queue games', 'Summoner\'s Rift Ranked');
				break;
			}
			case Type::RANKED_TEAM_3x3: {
				$this->make($type, 'Twisted Treeline ranked team games', 'Twisted Treeline Ranked');
				break;
			}
			case Type::RANKED_TEAM_5x5: {
				$this->make($type, 'Summoner\'s Rift ranked team games', 'Summoner\'s Rift Ranked');
				break;
			}
			case Type::ONEFORALL_5x5: {
				$this->make($type, 'One for All games', 'One for All');
				break;
			}
			case Type::FIRSTBLOOD_1x1: {
				$this->make($type, 'Snowdown Showdown 1x1 games', 'Snowdown Showdown 1x1');
				break;
			}
			case Type::FIRSTBLOOD_2x2: {
				$this->make($type, 'Snowdown Showdown 2x2 games', 'Snowdown Showdown 2x2');
				break;
			}
			default: {
				$this->make($this->_type, $this->_description, $this->_loose);
			}
		}
	}

	protected static function make($type, $description, $loose) {
		return array(
			'type'         => $type,
			'description' => $description,
			'loose'       => $loose,
		);
	}

} 