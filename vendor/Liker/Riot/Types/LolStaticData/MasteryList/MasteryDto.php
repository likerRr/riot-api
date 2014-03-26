<?php
/**
 * Created by PhpStorm.
 * User: Alexey Lizurchik
 * Date: 26.03.14
 * Time: 14:56
 */

namespace vendor\Liker\Riot\Types\LolStaticData\MasteryList;
use vendor\Liker\Riot\Types\LolStaticData\Champion\ImageDto;

/**
 * Class MasteryDto
 * @package vendor\Liker\Riot\Types\LolStaticData\MasteryList
 */
class MasteryDto {

	/**
	 * @var string[]
	 */
	protected $_description;

	/**
	 * @var int
	 */
	protected $_id;

	/**
	 * @var ImageDto
	 */
	protected $_image;

	/**
	 * @var string
	 */
	protected $_name;

	/**
	 * @var string
	 */
	protected $_prereq;

	/**
	 * @var int
	 */
	protected $_ranks;

	/**
	 * @param $mastery
	 */
	function __construct($mastery) {
		$this->_description = $mastery->description;
		$this->_id          = $mastery->id;
		$this->_image       = new ImageDto($mastery->image);
		$this->_name        = $mastery->name;
		$this->_prereq      = $mastery->prereq;
		$this->_ranks       = $mastery->ranks;
	}

	/**
	 * @return \string[]
	 */
	public function description() {
		return $this->_description;
	}

	/**
	 * @return int
	 */
	public function id() {
		return $this->_id;
	}

	/**
	 * @return \vendor\Liker\Riot\Types\LolStaticData\Champion\ImageDto
	 */
	public function image() {
		return $this->_image;
	}

	/**
	 * @return string
	 */
	public function name() {
		return $this->_name;
	}

	/**
	 * @return string
	 */
	public function prereq() {
		return $this->_prereq;
	}

	/**
	 * @return int
	 */
	public function ranks() {
		return $this->_ranks;
	}

} 