<?php
/**
 * Created by PhpStorm.
 * User: Lizurchik Alexey
 * Date: 14.02.14
 * Time: 14:54
 */

namespace vendor\Liker\Riot\Types;

class MiniSeriesDto {

	/**
	 * @var int
	 */
	protected $_losses;

	/**
	 * @var string
	 */
	protected $_progress;

	/**
	 * @var int
	 */
	protected $_target;

	/**
	 * @var int
	 */
	protected $_timeLeftToPlayMillis;

	/**
	 * @var int
	 */
	protected $_wins;

	public function __construct($miniSeries) {
		$this->_losses               = $miniSeries->losses;
		$this->_progress             = $miniSeries->progress;
		$this->_target               = $miniSeries->target;
		$this->_timeLeftToPlayMillis = $miniSeries->timeLeftToPlayMillis;
		$this->_wins                 = $miniSeries->wins;
	}

	/**
	 * @return int
	 */
	public function losses() {
		return $this->_losses;
	}

	/**
	 * @return string
	 */
	public function progress() {
		return $this->_progress;
	}

	/**
	 * @return int
	 */
	public function target() {
		return $this->_target;
	}

	/**
	 * @return int
	 */
	public function timeLeftToPlayMillis() {
		return $this->_timeLeftToPlayMillis;
	}

	/**
	 * @return int
	 */
	public function wins() {
		return $this->_wins;
	}

} 