<?php

namespace BMM\Dotypos\Order;

use BMM\Dotypos\Infrastructure\HttpClient\ValueObject\PaginationVO;
use BMM\Dotypos\Infrastructure\HttpClient\ValueObject\RequestVO;
use BMM\Dotypos\Order\DTO\OrdersDTO;
use BMM\Dotypos\Order\DTO\OrderDTO;

trait OrderTrait
{
    public function getOrder(int $id)
    {
        $request = new RequestVO(
            uri: $this->getEndpoint()->getOrder()->getUrl(),
            path: $this->getEndpoint()->getOrder()->getPath() . '/' . $id,
            requestsMethod: $this->getEndpoint()->getOrder()->getRequestsMethod(),
        );
        $response = $this->getHttpClient()->sendRequest($request);
        $order = $this->deserialize($response->data, OrderDTO::class);
        $order->eTag = $response->etag;

        return $order;
    }

    public function getOrders(?PaginationVO $pagination): OrdersDTO
    {
        $request = new RequestVO(
            uri: $this->getEndpoint()->getOrders()->getUrl(),
            path: $this->getEndpoint()->getOrders()->getPath(),
            requestsMethod: $this->getEndpoint()->getOrders()->getRequestsMethod(),
            pagination: $pagination
        );
        $response = $this->getHttpClient()->sendRequest($request);
        $orders = $this->deserialize($response->data, OrdersDTO::class);
        $orders->eTag = $response->etag;

//        TODO add support for page, limit, filter, sor
        return $orders;
    }
}