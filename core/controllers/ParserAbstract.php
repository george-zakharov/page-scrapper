<?php
/**
 * Parser abstraction.
 * Parse data from the URL given.
 *
 * @package: pageScrapper
 * @version: 1.0
 * @author: wildwind | George Zakharov <george_zakharov@mail.ru>
 */

namespace core\controllers;


abstract class ParserAbstract
{
    public static $resultData = [];

    /**
     * @param mixed $url
     */
    public static function parseDataFromUrl($url)
    {
    }
}