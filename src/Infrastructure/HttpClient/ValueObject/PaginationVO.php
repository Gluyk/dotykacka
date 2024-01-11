<?php

namespace BMM\Dotypos\Infrastructure\HttpClient\ValueObject;

use BMM\Dotypos\Infrastructure\ValueObject\ValueObject;
use Symfony\Component\Validator\Constraints as Assert;

class PaginationVO extends ValueObject
{
    public function __construct(
        #[Assert\GreaterThan(0)]
        private ?int $page = 1,
        #[Assert\Range(min: 1, max: 100)]
        private ?int $limit = 20
    ) {
        $this->validate($this);
    }

    public function getPage(): ?int
    {
        return $this->page;
    }

    public function getLimit(): ?int
    {
        return $this->limit;
    }
}