<?php

/*
 * This file is part of the FOSOAuthServerBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\OAuthServerBundle\Model;

abstract class ClientManager implements ClientManagerInterface
{
    public function createClient()
    {
        $class = $this->getClass();

        return new $class;
    }

    public function findClientByPublicId($publicId)
    {
        if (false === $pos = strpos($publicId, '_')) {
            return null;
        }

        $id       = substr($publicId, 0, $pos);
        $randomId = substr($publicId, $pos+1);

        return $this->findClientBy(array(
            'id'        => $id,
            'randomId'  => $randomId,
        ));
    }
}
