<?php

/*
 * This file is a part of the PHP-Ascii-Gen project.
 *
 * Copyright (c) 2022-present Be Wilson <be.wilson@benjamin-wilson.co.uk>
 *
 * This file is subject to the MIT license that is bundled
 * with this source code in the LICENSE.md file.
 */

namespace AsciiGen;

use Exception;

class Ascii
{
    private string $asciiText;

    public function __construct(string $text = null, string $font = null)
    {
        if (!empty($text) && !empty($font)) {
            return $this->makeText($text, $font);
        }
    }

    public function makeText(string $text, string $font)
    {
        $text = strtolower($text);

        $fontPath = __DIR__.DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.$font.'.php';
        if (!file_exists($fontPath)) {
            throw new Exception('Font file '.$font.' is missing!', 1);
        }

        include_once $fontPath;
        $output = null;

        for ($c = 0; $c < strlen($text); ++$c) {
            $symbol[$c] = explode("\n", $arr[$text[$c]]);
        }

        for ($c = 0; $c < sizeof($symbol[0]); ++$c) {
            for ($k = 0; $k < strlen($text); ++$k) {
                if (isset($break) && true == $break) {
                    $output .= str_replace("\r", '', $symbol[$k][$c]);
                } else {
                    $output .= '&nbsp;'.str_replace("\r", '', $symbol[$k][$c]);
                }
            }
            $output .= "\n";
        }

        $this->asciiText = $output;

        return $output;
    }
}
