<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function generate_key($length = NULL) {
    if ($length == NULL) {
        $length = '5';
    }
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopgrqstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
