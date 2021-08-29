<?php
   
    $url = array(
        'https://leish0n6.com/cyberpunk',
        'https://leish0n6.com/desert',
        'https://leish0n6.com/forest',
        'https://leish0n6.com/newyork',
        'https://leish0n6.com/losangeles',
        'https://leish0n6.com/deathvalley'
    );
    
   
    $key = array_rand( $url );
    
   
    header( 'Location: ' . $url[$key] );
?>