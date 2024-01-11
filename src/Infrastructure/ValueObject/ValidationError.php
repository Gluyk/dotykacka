<?php

namespace BMM\Dotypos\Infrastructure\ValueObject;

use Symfony\Component\Validator\ConstraintViolationInterface;

final class ValidationError
{
    public function __construct(
        private string $parameter,
        private string $errorMessage,
        private ConstraintViolationInterface $originalError
    ) {
    }

    public function getParameter(): string
    {
        return $this->parameter;
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    public function getOriginalErrorObject(): ConstraintViolationInterface
    {
        return $this->originalError;
    }
}