<?php

namespace BMM\Dotypos\Authorization\ValueObject;

use BMM\Dotypos\Infrastructure\ValueObject\ValueObject;
use Symfony\Component\Validator\Constraints as Assert;

final class AccessTokenVO extends ValueObject
{
    public function __construct(
        #[Assert\NotBlank]
        private string $user,
        #[Assert\GreaterThan(0)]
        private int $cloudId,
    ) {
        $this->validate($this);
    }

    public function getUser(): string
    {
        return $this->user;
    }

    public function getCloudId(): int
    {
        return $this->cloudId;
    }
}