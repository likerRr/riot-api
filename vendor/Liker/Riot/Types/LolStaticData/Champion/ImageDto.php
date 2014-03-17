<?php
/**
 * Created by PhpStorm.
 * User: Alexey Lizurchik
 * Date: 17.03.14
 * Time: 14:09
 */

namespace vendor\Liker\Riot\Types\LolStaticData\Champion;


class ImageDto {

	/**
	 * @var string
	 */
	protected $_full;

	/**
	 * @var string
	 */
	protected $_group;

	/**
	 * @var int
	 */
	protected $_h;

	/**
	 * @var string
	 */
	protected $_sprite;

	/**
	 * @var int
	 */
	protected $_w;

	/**
	 * @var int
	 */
	protected $_x;

	/**
	 * @var int
	 */
	protected $_y;

	function __construct($image) {
		$this->_full   = $image->full;
		$this->_group  = $image->group;
		$this->_h      = $image->h;
		$this->_sprite = $image->sprite;
		$this->_w      = $image->w;
		$this->_x      = $image->x;
		$this->_y      = $image->y;
	}

	/**
	 * @return string
	 */
	public function full() {
		return $this->_full;
	}

	/**
	 * @return string
	 */
	public function group() {
		return $this->_group;
	}

	/**
	 * @return int
	 */
	public function h() {
		return $this->_h;
	}

	/**
	 * @return string
	 */
	public function sprite() {
		return $this->_sprite;
	}

	/**
	 * @return int
	 */
	public function w() {
		return $this->_w;
	}

	/**
	 * @return int
	 */
	public function x() {
		return $this->_x;
	}

	/**
	 * @return int
	 */
	public function y() {
		return $this->_y;
	}

} 