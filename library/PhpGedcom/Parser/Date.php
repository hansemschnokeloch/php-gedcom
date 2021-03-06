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

namespace PhpGedcom\Parser;

/**
 *
 *
 */
class Date extends \PhpGedcom\Parser\Component {

	/**
	 *
	 *
	 */
	public static function parse(\PhpGedcom\Parser $parser) {
		$record = $parser->getCurrentLineRecord();
		$depth = (int) $record[0];
		if (isset($record[1])) {
			$dat = new \PhpGedcom\Record\Date();
			if (!empty($record[2])) {
				$dat->setDate($record[2]);
			}
		} else {
			$parser->skipToNextLevel($depth);
			return null;
		}

		return $dat;
	}
}