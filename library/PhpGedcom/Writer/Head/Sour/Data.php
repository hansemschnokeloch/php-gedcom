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

namespace PhpGedcom\Writer\Head\Sour;

/**
 *
 */
class Data
{
    /**
     * @param \PhpGedcom\Record\Head\Sour\Data $data
     * @param string $format
     * @param int $level
     * @return string
     */
    public static function convert(\PhpGedcom\Record\Head\Sour\Data &$data, $level)
    {
        $output = "";
        $_data = $data->getData();
        if($_data){
            $output.=$level." DATA ".$_data."\n";
        }else{
            return $output;
        }

        // level up
        $level++;

        // DATE
        $date = $corp->getDate();
        if($date){
            $output.=$level." DATE ".$date."\n";
        }

        // COPR
        $corp = $corp->getCorp();
        if($corp){
            $output.=$level." COPR ".$corp."\n";
        }

        return $output;
    }
}
