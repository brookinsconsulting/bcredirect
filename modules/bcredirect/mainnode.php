<?php
/**
 * File containing the bcredirect/profile module view.
 *
 * @copyright Copyright (C) 1999 - 2012 Brookins Consulting. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2 (or any later version)
 * @version //autogentag//
 * @package bcimagealias
 */

/**
 * Default module parameters
 */
$Module = $Params['Module'];

/**
 * Default Module View Parameters
 */
$ObjectID = $Params['ObjectID'];

$userParams = $Params['UserParameters'];

/**
 * Fetch object
 */
$object = eZContentObject::fetch( $ObjectID );

if( $object )
{
    /**
     * Fetch object main node and preapare url view parameters for redirect uri string
     */
    $mainNodeID = $object->attribute( 'main_node_id' );

    $userParamsString = '';

    if( count( $userParams ) > 0 )
    {
        foreach( $userParams as $key => $value )
        {
            $userParamsString = $userParamsString . '(' . $key . ')' . '/' . $value . '/';
        }
    }

    /**
     * Redirect user to content view full module view with user parameters
     */
    return $Module->redirectTo( 'content/view/full/' . $mainNodeID . '/' . $userParamsString );
}
else
{
    return $Module->handleError( eZError::KERNEL_NOT_AVAILABLE, 'kernel' );
}

?>