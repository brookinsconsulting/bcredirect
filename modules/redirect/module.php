<?php

$Module = array( 'name' => 'Redirect' );

// Define module views.
$ViewList = array();
$ViewList['mainnode'] = array(
    'script' => 'mainnode.php',
    'functions' => array( 'redirect' ),
    'params' => array( 'ObjectID' )
);
$ViewList['profile'] = array(
    'script' => 'profile.php',
    'functions' => array( 'redirect' ),
    'params' => array()
);

// Define module functions (used by permission system).
$FunctionList['redirect'] = array();

?>
