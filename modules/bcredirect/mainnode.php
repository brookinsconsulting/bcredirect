<?php

    $Module = $Params['Module'];
    $ObjectID = $Params['ObjectID'];
    $userParams = $Params['UserParameters'];

    $object = eZContentObject::fetch( $ObjectID );

    if ( $object )
    {
        $mainNodeID = $object->attribute( 'main_node_id' );

        $userParamsString = '';

        if ( count( $userParams ) > 0 )
        {
            foreach( $userParams as $key => $value )
            {
                $userParamsString = $userParamsString . '(' . $key . ')' . '/' . $value . '/';
            }
        }

        return $Module->redirectTo( 'content/view/full/' . $mainNodeID . '/' . $userParamsString );
    }
    else
    {
        return $Module->handleError( eZError::KERNEL_NOT_AVAILABLE, 'kernel' );
    }

?>
