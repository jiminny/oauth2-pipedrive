<?php

namespace Daniti\OAuth2\Client\Provider\Exceptions;

use Psr\Http\Message\ResponseInterface;
use League\OAuth2\Client\Provider\Exceptions\IdentityProviderException;

class PipedriveIdentityProviderException extends IdentityProviderException
{
    public static function fromResponse(ResponseInterface $response, $message = null)
    {
        return new static($message, $response->getStatusCode(), (string)$response->getBody());
    }
}
