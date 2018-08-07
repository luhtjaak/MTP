<?php

/**
 * Utility class
 *
 * @link       http://www.greentreelabs.net
 * @since      1.0.0
 *
 * @package    Photoblocks
 * @subpackage Photoblocks/includes
 */

class Photoblocks_Utils 
{
    /**
	 * Slugify text
	 *
	 * @since     1.0.0
	 * @return    string    The text to be slugified
	 */
    static public function slugify($text)
    {
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

        $text = trim($text, '-');
        if(function_exists("iconv"))
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = strtolower($text);
        $text = preg_replace('~[^-\w]+~', '', $text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }
}