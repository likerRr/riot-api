<?php
/**
 * Created by PhpStorm.
 * User: Alexey Lizurchik
 * Date: 17.03.14
 * Time: 14:30
 */

namespace vendor\Liker\Riot\Types\LolStaticData\Champion;


class PassiveDto {

	/**
	 * @var string
	 */
	protected $_name;

	/**
	 * @var string
	 */
	protected $_description;

	/**
	 * @var \vendor\Liker\Riot\Types\LolStaticData\Champion\ImageDto
	 */
	protected $_image;

	public function __construct($passive) {
		$this->_name        = $passive->name;
		$this->_description = $passive->description;
		$this->_image       = new ImageDto($passive->image);
	}

	/**
	 * @return string
	 */
	public function description() {
		return $this->_description;
	}

	/**
	 * @return ImageDto
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

} 