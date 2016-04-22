<?php
namespace tuoiteen\transmission\models;

use tuoiteen\transmission\core\AbstractModel;

/**
 * @author Ramon Kleiss <ramon@cubilon.nl>
 */
class File extends AbstractModel {

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var integer
	 */
	protected $size;

	/**
	 * @var integer
	 */
	protected $completed;

	/**
	 * @param string $name
	 */
	public function setName($name) {
		$this->name = (string) $name;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param integer $size
	 */
	public function setSize($size) {
		$this->size = (integer) $size;
	}

	/**
	 * @return integer
	 */
	public function getSize() {
		return $this->size;
	}

	/**
	 * @param $completed
	 *
	 * @internal param int $size
	 */
	public function setCompleted($completed) {
		$this->completed = (integer) $completed;
	}

	/**
	 * @return integer
	 */
	public function getCompleted() {
		return $this->completed;
	}

	/**
	 * @return boolean
	 */
	public function isDone() {
		return $this->getSize() == $this->getCompleted();
	}

	/**
	 * @return array
	 */
	public static function getMapping() {
		return array(
			'name'           => 'name',
			'length'         => 'size',
			'bytesCompleted' => 'completed',
		);
	}

	public function __toString() {
		return $this->name;
	}
}
