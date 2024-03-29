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

interface ClientManagerInterface
{
    function createClient();

    function getClass();

    function findClientBy(array $criteria);

    function findClientByPublicId($publicId);

    function updateClient(ClientInterface $client);

    function deleteClient(ClientInterface $client);
}
