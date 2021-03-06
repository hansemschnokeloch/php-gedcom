<?php
/**
 * php-gedcom
 *
 * php-gedcom is a library for parsing, manipulating, importing and exporting
 * GEDCOM 5.5 files in PHP 5.3+.
 *
 * @author          Kristopher Wilson <kristopherwilson@gmail.com>
 * @copyright       Copyright (c) 2010-2013, Kristopher Wilson
 * @package         php-gedcom
 * @license         GPL-3.0
 * @link            http://github.com/mrkrstphr/php-gedcom
 */

namespace PhpGedcom\Record\Head;

/**
 *
 */
class Gedc extends \PhpGedcom\Record {
	/**
	 *
	 */
	protected $_vers = null;

	/**
	 *
	 */
	protected $_form = null;

	/**
	 *
	 * @return Gedc/version
	 */
	public function getVersion() {
		return $this->_vers;
	}

	/**
	 *
	 * @param Gedc/version
	 */
	public function setVersion($vers = []) {
		$this->_vers = $vers;
	}

	/**
	 *
	 * @return Gedc/form
	 */
	public function getForm() {
		return $this->_form;
	}

	/**
	 *
	 * @param Gedc/version
	 */
	public function setForm($form = []) {
		$this->_form = $form;
	}
}
