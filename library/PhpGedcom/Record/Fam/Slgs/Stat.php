<?php
/**
 * php-gedcom
 *
 * php-gedcom is a library for parsing, manipulating, importing and exporting
 * GEDCOM 5.5 files in PHP 5.3+.
 *
 * @author          Xiang Ming wenqiangliu344@gmail.com
 * @copyright       Copyright (c) 2010-2013, Kristopher Wilson
 * @package         php-gedcom
 * @license         GPL-3.0
 * @link            http://github.com/mrkrstphr/php-gedcom
 */

namespace PhpGedcom\Record\Fam\Slgs;

/**
 *
 */
class Stat extends \PhpGedcom\Record
{
    /**
     * string lds_spouse_sealing_date_status
     * 2020/06/27 blue
     */
    protected $_stat = null;

    /**
     * string change_date
     */
    protected $_date = null;
}
