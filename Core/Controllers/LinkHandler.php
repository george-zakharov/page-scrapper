<?php
/**
 * Handle links parsing.
 * Generate resulting output
 *
 * @author: WildWind
 */

namespace Core\Controllers;

use DOMDocument;

class LinkHandler
{
    private $allLinks = [];
    private $inputFlag = false;

    public function __construct($basicUrl)
    {
        if ($basicUrl) {
            $this->setAllLinks($basicUrl);
            $this->inputFlag = true;
        }
    }

    /**
     * Generate result html
     *
     * @return string
     */
    public function getResultHtml()
    {
        $htmlOutput = '';
        if ($this->inputFlag) {
            $htmlOutput = '
                <h1 class="text-center">Your resulting links</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Link</th>
                        </tr>
                    </thead>
                    <tbody>';

            foreach ($this->allLinks as $linkNumber => $link) {
                $htmlOutput .= "
                    <tr>
                        <th scope=\"row\">$linkNumber</th>
                        <td>$link</td>
                    </tr>";
            }

            $htmlOutput .= '
                    </tbody>
                </table>';
        } else {
            $htmlOutput = '
            <h1 class="text-center">...but, wait a second. Give me your link to parse!</h1>
            <h3 class="text-center">For now you gave me nothing =/</h3>
        ';
        }

        return $htmlOutput;
    }

    /**
     * Set links array
     *
     * @param $basicUrl
     */
    private function setAllLinks($basicUrl)
    {
        $output = curl_init();
        curl_setopt($output, CURLOPT_URL, $basicUrl);
        curl_setopt($output, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($output, CURLOPT_HEADER, 0);
        $resultHtml = curl_exec($output);

        // print_r($resultHtml);
        $rawHtml = $resultHtml;

        $dom = new DOMDocument;
        $dom->loadHTML($rawHtml);
        $node = $dom->getElementsByTagName('a');

        $hrefText = [];
        for ($item = 0; $item < $node->length; $item++) {
            $hrefText[] = $node->item($item)->getAttribute('href');
        }

        $clearedLinks = [];
        foreach ($hrefText as $hrefTextItem) {
            if ($hrefTextItem !== '') {
                $clearedLinks[] = $hrefTextItem;
            }
        }

        $this->allLinks = array_unique($clearedLinks);
    }
}