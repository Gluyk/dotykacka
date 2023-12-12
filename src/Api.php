<?php

namespace BMM\Dotypos;

use BMM\Dotypos\Branch\BranchTrait;
use BMM\Dotypos\Customer\CustomerTrait;
use BMM\Dotypos\DiscountGroup\DiscountGroupTrait;
use BMM\Dotypos\Infrastructure\DataTransformer\DeserializerTrait;
use BMM\Dotypos\Infrastructure\DataTransformer\SerializerTrait;
use BMM\Dotypos\Infrastructure\HttpClient\HttpClient;
use BMM\Dotypos\Order\OrderTrait;
use BMM\Dotypos\OrderItem\OrderItemTrait;
use BMM\Dotypos\Reservation\ReservationTrait;
use BMM\Dotypos\Table\TableTrait;
use BMM\Dotypos\Warehouse\WarehouseTrait;
use BMM\Dotypos\Webhook\WebhookTrait;

final class Api
{
    use DeserializerTrait;
    use SerializerTrait;
    use CustomerTrait;
    use DiscountGroupTrait;
    use OrderTrait;
    use OrderItemTrait;
    use ReservationTrait;
    use TableTrait;
    use BranchTrait;
    use WebhookTrait;
    use WarehouseTrait;

    public function __construct(
        private int $cloudId,
        private string $accessToken,
    ) {
        //TODO think about it
        $_SESSION['cloudId'] = $cloudId;
        $_SESSION['accessToken'] = $accessToken;
    }

    private function getEndpoint(): Endpoint
    {
        return new Endpoint();
    }

    private function getHttpClient(): HttpClient
    {
        return new HttpClient();
    }
}
