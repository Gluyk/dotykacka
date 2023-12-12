<?php

namespace BMM\Dotypos\Infrastructure\HttpClient\DTO;

class ConnectExceptionDTO
{
    public string $timestamp;
    public string $status;
    public string $error;
    public string $reason;
    public string $message;
}
