<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 13.02.14
 * Time: 16:14
 */

namespace vendor\Liker\Riot\Constants\Map;


class Info {

	const SUMMONERS_RIFT_SUMMER = 1;

	const SUMMONERS_RIFT_AUTUMN = 2;

	const PROVING_GROUNDS = 3;

	const TWISTED_TREELINE_ORIGINAL = 4;

	const CRYSTAL_SCAR = 8;

	const TWISTED_TREELINE_CURRENT = 10;

	const ARAM = 12;

	protected $_id = null;

	protected $_name  = 'Unknown';

	protected $_notes = 'Map';

	protected $_loose = 'Unknown Map';

	public function __construct($id) {
		$mapInfo = $this->init($id);

		$this->_id    = $id;
		$this->_name  = $mapInfo['name'];
		$this->_notes = $mapInfo['notes'];
		$this->_loose = $mapInfo['loose'];
	}

	protected function init($id) {
		switch ($id) {
			case Info::SUMMONERS_RIFT_SUMMER: {
				$map = $this->make('Summoner\'s Rift', 'Summer Variant', 'Summoner\'s Rift Summer');
				break;
			}
			case Info::SUMMONERS_RIFT_AUTUMN: {
				$map = $this->make('Summoner\'s Rift', 'Autumn Variant', 'Summoner\'s Rift Autumn');
				break;
			}
			case Info::PROVING_GROUNDS: {
				$map = $this->make('The Proving Grounds', 'Tutorial Map', 'Tutorial');
				break;
			}
			case Info::TWISTED_TREELINE_ORIGINAL: {
				$map = $this->make('Twisted Treeline', 'Original Version', 'Twisted Treeline Original');
				break;
			}
			case Info::CRYSTAL_SCAR: {
				$map = $this->make('The Crystal Scar', 'Dominion Map', 'Dominion');
				break;
			}
			case Info::TWISTED_TREELINE_CURRENT: {
				$map = $this->make('Twisted Treeline', 'Current Version', 'Twisted Treeline Current');
				break;
			}
			case Info::ARAM: {
				$map = $this->make('Howling Abyss', 'ARAM Map', 'ARAM');
				break;
			}
			default: {
				$map = $this->make($this->_name, $this->_notes, $this->_loose);
			}
		}

		return $map;
	}

	protected function make($name, $notes, $loose) {
		return array(
			'name'  => $name,
			'notes' => $notes,
			'loose' => $loose,
		);
	}

} 