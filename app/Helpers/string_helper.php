<?php

if ( ! function_exists('string_prettier'))
{
    function string_prettier($string) {
        return ucfirst(str_replace(['_', '/', '-'], ' ', trim($string)));
    }
}