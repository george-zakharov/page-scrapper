<?php
/**
 * Link parser.
 * Parse links from the URL given.
 *
 * @package: pageScrapper
 * @version: 1.0
 * @author: wildwind | George Zakharov <george_zakharov@mail.ru>
 */

namespace core\controllers;

use core\helpers\GetPageLayoutTrait;
use DOMDocument;

class LinkParser extends ParserAbstract
{
    use GetPageLayoutTrait;

    public static $resultData = [];

    public static function parseDataFromUrl($url)
    {
        $rawHtml = GetPageLayoutTrait::getHtml($url);

        $dom = new DOMDocument;
        $dom->loadHTML($rawHtml);
        $node = $dom->getElementsByTagName('a');

        for ($i = 0; $i < $node->length; $i++) {
            $hrefText[] = $node->item($i)->getAttribute('href');
        }

        foreach ($hrefText as $hrefTextItem) {
            if ($hrefTextItem != '') {
                $clearedHrefs[] = $hrefTextItem;
            }
        }

        self::$resultData = array_unique($clearedHrefs); //Delete duplicates and set result array
    }
}