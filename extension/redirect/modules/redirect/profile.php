<?php

$Module =& $Params['Module'];

$user = eZUser::currentUser();
if ( !$user->isLoggedIn() )
{
    return $Module->handleError( EZ_ERROR_KERNEL_ACCESS_DENIED, 'kernel' );
}
else
{
    $userObject =& $user->contentObject();
    $mainNode =& $userObject->mainNode();

    return $Module->redirectTo( $mainNode->attribute( 'url_alias' ) );
}

?>