<?php
/**
 * File containing the bcredirect module configuration file, module.php
 *
 * @copyright Copyright (C) 1999 - 2012 Brookins Consulting. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2 (or any later version)
 * @version //autogentag//
 * @package bcredirect
 */

// Define module name
$Module = array( 'name' => 'BC Redirect - Redirector of Users' );

// Define module view and parameters
$ViewList = array();

// Define mainnode module view parameters
$ViewList['mainnode'] = array( 'script' => 'mainnode.php',
                               'functions' => array( 'redirect' ),
                               'params' => array( 'ObjectID' ),
                               'unordered_params' => array() );

$ViewList['profile'] = array( 'script' => 'profile.php',
                              'functions' => array( 'redirect' ),
                              'params' => array(),
                              'unordered_params' => array() );

// Define module functions

// Define functin redirect (used by permission system).
$FunctionList['redirect'] = array();

?>