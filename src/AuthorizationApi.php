<?php

namespace BMM\Dotypos;

use BMM\Dotypos\Authorization\AuthorizationTrait;
use BMM\Dotypos\Infrastructure\HttpClient\HttpClient;

final class AuthorizationApi
{
    use AuthorizationTrait;

    private function getEndpoint(): Endpoint
    {
        return new Endpoint();
    }

    private function getHttpClient(): HttpClient
    {
        return new HttpClient();
    }
}