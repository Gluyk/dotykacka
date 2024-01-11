<?php

namespace BMM\Dotypos\Webhook\DTO;

final class WebhookDTO
{
    public int $id;
    public int $_cloudId;
    public ?int $_warehouseId;
    public string $url;
    public string $method;
    public string $payloadEntity;
    public string $payloadVersion;
    public string $versionDate;
}
