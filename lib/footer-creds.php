<?php

add_filter('genesis_footer_creds_text', 'bsg_footer_creds_filter');

function bsg_footer_creds_filter( $creds ) {
    $creds = '<a title="Bootstra.386 Bootstrap Genesis Theme" href="https://github.com/salcode/bootstra.386-genesis">Bootstra.386 Genesis Theme</a>';
    return $creds;
}
