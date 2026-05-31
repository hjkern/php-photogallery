<?php

// simple photo gallery
// Version 1.5    
// 2026    
// www.raffia.ch, hjke   
// PHP-Version >= 5.3

// config type of lightbox
// 1 == fancybox
// 0 == lightbox

$fancybox = 1; // 0

error_reporting(0);

// build gallery items
$gallery = '';

foreach (image_files() as $file) {
    $gallery .= <<< HTML
<a data-fancybox="1" data-lightbox="1" 
href="{$file}" target="_blank" title="{$file}"><img src="{$file}" alt="{$file}"></a>
HTML;
}

// this script's code
$code = highlight_string(file_get_contents(__FILE__), true);

// html template type
if ($fancybox) include "template_fancybox.html";
else include "template_lightbox.html";

// filter image types
function image_files() {
    
    $galfiles = array_filter((array) glob("images/*"), function ($file) {
        return (bool) preg_match("/\.(?:jpe?g|png|gif|webp|svg)$/i", $file); });
    
    natcasesort($galfiles);
    return $galfiles;
}

// end