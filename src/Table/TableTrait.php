<?php

namespace BMM\Dotypos\Table;

use BMM\Dotypos\Infrastructure\HttpClient\ValueObject\PaginationVO;
use BMM\Dotypos\Infrastructure\HttpClient\ValueObject\RequestVO;
use BMM\Dotypos\Table\DTO\TablesDTO;

trait TableTrait
{
    public function getTables(?PaginationVO $pagination): TablesDTO
    {
        $request = new RequestVO(
            uri: $this->getEndpoint()->getTables()->getUrl(),
            path: $this->getEndpoint()->getTables()->getPath(),
            requestsMethod: $this->getEndpoint()->getTables()->getRequestsMethod(),
            pagination: $pagination
        );
        $response = $this->getHttpClient()->sendRequest($request);
        $tables = $this->deserialize($response->data, TablesDTO::class);
        $tables->eTag = $response->etag;

//        TODO add support for page, limit, filter, sor
        return $tables;
    }
}
