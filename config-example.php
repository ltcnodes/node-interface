<?php

defined( 'NODEMON_RUNNING') || die( 'Access denied.' );

// See https://github.com/xblau/node-interface/wiki/Configuration
// for more info about these options.

$nodeconfig = array(
    'pagetitle' => 'LTCNodes.com Node Interface',
    'pagedesc' => '',
    'autorefresh' => 120,
    'serverurl' => 'http://127.0.0.1:9332/',
    'username' => 'rpcuser',
    'password' => 'rpcpass',
    'broadcast' => false,
);

?>
