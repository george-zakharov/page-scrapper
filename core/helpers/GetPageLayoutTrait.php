<?php
/**
 * Request to given URL.
 * Goes to given page and return HTML.
 *
 * @package: pageScrapper
 * @version: 1.0
 * @author: wildwind | George Zakharov <george_zakharov@mail.ru>
 */

namespace core\helpers;


trait GetPageLayoutTrait
{
    public static function getHtml ($url) {
        $output = curl_init();
        curl_setopt($output, CURLOPT_URL, $url);
        curl_setopt($output, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($output, CURLOPT_HEADER, 0);
        $resultHtml = curl_exec($output);

        return $resultHtml;
    }
}