<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 13.02.14
 * Time: 17:16
 */

namespace vendor\Liker\Riot\Constants\Rune;


class Slot {

	const MARK_1 = 1;
	const MARK_2 = 2;
	const MARK_3 = 3;
	const MARK_4 = 4;
	const MARK_5 = 5;
	const MARK_6 = 6;
	const MARK_7 = 7;
	const MARK_8 = 8;
	const MARK_9 = 9;

	const SEAL_1 = 10;
	const SEAL_2 = 11;
	const SEAL_3 = 12;
	const SEAL_4 = 13;
	const SEAL_5 = 14;
	const SEAL_6 = 15;
	const SEAL_7 = 16;
	const SEAL_8 = 17;
	const SEAL_9 = 18;

	const GLYPH_1 = 19;
	const GLYPH_2 = 20;
	const GLYPH_3 = 21;
	const GLYPH_4 = 22;
	const GLYPH_5 = 23;
	const GLYPH_6 = 24;
	const GLYPH_7 = 25;
	const GLYPH_8 = 26;
	const GLYPH_9 = 27;

	const QUINT_1 = 28;
	const QUINT_2 = 29;
	const QUINT_3 = 30;

	protected $_slot = 0;
	protected $_type = 'Unknown';

	public function __construct($id) {
		$this->init($id);
	}

	protected function init($id) {
		switch ($id) {
			case Slot::MARK_1: {
				$this->make(1, 'Mark');
				break;
			}
			case Slot::MARK_2: {
				$this->make(2, 'Mark');
				break;
			}
			case Slot::MARK_3: {
				$this->make(3, 'Mark');
				break;
			}
			case Slot::MARK_4: {
				$this->make(4, 'Mark');
				break;
			}
			case Slot::MARK_5: {
				$this->make(5, 'Mark');
				break;
			}
			case Slot::MARK_6: {
				$this->make(6, 'Mark');
				break;
			}
			case Slot::MARK_7: {
				$this->make(7, 'Mark');
				break;
			}
			case Slot::MARK_8: {
				$this->make(8, 'Mark');
				break;
			}
			case Slot::MARK_9: {
				$this->make(9, 'Mark');
				break;
			}
			case Slot::SEAL_1: {
				$this->make(1, 'Seal');
				break;
			}
			case Slot::SEAL_2: {
				$this->make(2, 'Seal');
				break;
			}
			case Slot::SEAL_3: {
				$this->make(3, 'Seal');
				break;
			}
			case Slot::SEAL_4: {
				$this->make(4, 'Seal');
				break;
			}
			case Slot::SEAL_5: {
				$this->make(5, 'Seal');
				break;
			}
			case Slot::SEAL_6: {
				$this->make(6, 'Seal');
				break;
			}
			case Slot::SEAL_7: {
				$this->make(7, 'Seal');
				break;
			}
			case Slot::SEAL_8: {
				$this->make(8, 'Seal');
				break;
			}
			case Slot::SEAL_9: {
				$this->make(9, 'Seal');
				break;
			}
			case Slot::GLYPH_1: {
				$this->make(1, 'Glyph');
				break;
			}
			case Slot::GLYPH_2: {
				$this->make(2, 'Glyph');
				break;
			}
			case Slot::GLYPH_3: {
				$this->make(3, 'Glyph');
				break;
			}
			case Slot::GLYPH_4: {
				$this->make(4, 'Glyph');
				break;
			}
			case Slot::GLYPH_5: {
				$this->make(5, 'Glyph');
				break;
			}
			case Slot::GLYPH_6: {
				$this->make(6, 'Glyph');
				break;
			}
			case Slot::GLYPH_7: {
				$this->make(7, 'Glyph');
				break;
			}
			case Slot::GLYPH_8: {
				$this->make(8, 'Glyph');
				break;
			}
			case Slot::GLYPH_9: {
				$this->make(9, 'Glyph');
				break;
			}
			case Slot::QUINT_1: {
				$this->make(1, 'Quintessence');
				break;
			}
			case Slot::QUINT_2: {
				$this->make(2, 'Quintessence');
				break;
			}
			case Slot::QUINT_3: {
				$this->make(3, 'Quintessence');
				break;
			}
			default: {
				$this->make($this->_slot, $this->_type);
			}
		}
	}

	protected function make($slot, $type) {
		$this->_slot = $slot;
		$this->_type = $type;
	}

}