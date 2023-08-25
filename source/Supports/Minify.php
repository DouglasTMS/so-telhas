<?php

use MatthiasMullie\Minify\CSS;
use MatthiasMullie\Minify\JS;

/**
 * CSS
 */
$minifyCSS = new CSS();
$minifyCSS->add(dirname(__DIR__, 2) . "/web/assets/css/style.css");
$minifyCSS->minify(dirname(__DIR__, 2) . "/web/assets/css/style.css");


/**
 * JS
 */
$minifyJS = new JS();
$minifyJS->add(dirname(__DIR__, 2) . "/cdn/js/jquery.js");
$minifyJS->add(dirname(__DIR__, 2) . "/cdn/js/jmask.js");
$minifyJS->add(dirname(__DIR__, 2) . "/web/assets/js/app.js");
$minifyJS->minify(dirname(__DIR__, 2) . "/web/assets/js/scripts.js");
