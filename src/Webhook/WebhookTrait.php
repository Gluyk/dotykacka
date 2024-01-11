<?php

namespace BMM\Dotypos\Webhook;

use BMM\Dotypos\Infrastructure\HttpClient\ValueObject\RequestVO;
use BMM\Dotypos\Webhook\DTO\WebhookDTO;
use BMM\Dotypos\Webhook\ValueObject\WebhookVO;

trait WebhookTrait
{
    public function registerWebhooks(WebhookVO $payload): WebhookDTO
    {
        $request = new RequestVO(
            uri: $this->getEndpoint()->registerWebhooks()->getUrl(),
            path: $this->getEndpoint()->registerWebhooks()->getPath(),
            requestsMethod: $this->getEndpoint()->registerWebhooks()->getRequestsMethod(),
            data: $this->serialize($payload)
        );
        $response = $this->getHttpClient()->sendRequest($request);

        return $this->deserialize($response->data, WebhookDTO::class);
    }

    /**
     * @return WebhookDTO[]
     * @throws \Exception
     */
    public function getWebhooks(): array
    {
        $request = new RequestVO(
            uri: $this->getEndpoint()->getWebhooks()->getUrl(),
            path: $this->getEndpoint()->getWebhooks()->getPath(),
            requestsMethod: $this->getEndpoint()->getWebhooks()->getRequestsMethod(),
        );
        $response = $this->getHttpClient()->sendRequest($request);

        return $this->deserialize($response->data, WebhookDTO::class . '[]');
    }

    public function deleteWebhook(int $id)
    {
        $request = new RequestVO(
            uri: $this->getEndpoint()->deleteWebhook()->getUrl(),
            path: $this->getEndpoint()->deleteWebhook()->getPath()  . '/' . $id,
            requestsMethod: $this->getEndpoint()->deleteWebhook()->getRequestsMethod(),
        );
        $response = $this->getHttpClient()->sendRequest($request);

        return $this->deserialize($response->data, WebhookDTO::class);
    }
}
