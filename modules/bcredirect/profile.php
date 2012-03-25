<?php
/**
 * File containing the bcredirect/profile module view.
 *
 * @copyright Copyright (C) 1999 - 2012 Brookins Consulting. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2 (or any later version)
 * @version //autogentag//
 * @package bcredirect
 */

/**
 * Default module parameters
 */
$Module = $Params['Module'];

/**
 * Default class instances
 */
$user = eZUser::currentUser();

/**
 * Test for logged in user
 */
if ( !$user->isLoggedIn() )
{
    return $Module->handleError( eZError::KERNEL_ACCESS_DENIED, 'kernel' );
}
else
{
    /**
     * Prepare and redirect user to user object main node url alias
     */
    $userObject = $user->contentObject();
    $mainNode = $userObject->mainNode();

    return $Module->redirectTo( $mainNode->attribute( 'url_alias' ) );
}

?>