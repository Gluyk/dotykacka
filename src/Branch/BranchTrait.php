<?php

namespace BMM\Dotypos\Branch;

use BMM\Dotypos\Branch\DTO\BranchesDTO;
use BMM\Dotypos\Infrastructure\HttpClient\ValueObject\PaginationVO;
use BMM\Dotypos\Infrastructure\HttpClient\ValueObject\RequestVO;

trait BranchTrait
{
    public function getBranches(?PaginationVO $pagination): BranchesDTO
    {
        $request = new RequestVO(
            uri: $this->getEndpoint()->getBranches()->getUrl(),
            path: $this->getEndpoint()->getBranches()->getPath(),
            requestsMethod: $this->getEndpoint()->getBranches()->getRequestsMethod(),
            pagination: $pagination
        );
        $response = $this->getHttpClient()->sendRequest($request);
        $branches = $this->deserialize($response->data, BranchesDTO::class);
        $branches->eTag = $response->etag;

//        TODO add support for page, limit, filter, sor
        return $branches;
    }
}