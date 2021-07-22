<?php
include_once(dirname(__FILE__) . '/Database.php');
include_once(dirname(__FILE__) . '/Booking.php');
include_once(dirname(__FILE__) . '/Districts.php');

function dd($data) {
    var_dump($data);
    exit();
}

function redirect($url) {
    $string = '<script type="text/javascript">';
    $string .= 'window.location = "' . $url . '"';
    $string .= '</script>';
    echo $string;
    exit();
}
