<?php

/*
 * This file is a part of the PHP-Ascii-Gen project.
 *
 * Copyright (c) 2022-present Be Wilson <be.wilson@benjamin-wilson.co.uk>
 *
 * This file is subject to the MIT license that is bundled
 * with this source code in the LICENSE.md file.
 */

use AsciiGen\Ascii;

 require_once __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

 $text = 'Be';
 $font = 'myfont';

 $gen = new Ascii($text, $font);

 var_dump($gen);
