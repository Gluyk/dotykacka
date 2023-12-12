<?php

namespace BMM\Dotypos\Customer\DTO;

use BMM\Dotypos\Infrastructure\DTO\DTO;
use BMM\Dotypos\Infrastructure\Trait\PaginationTraitDTO;

final class CustomersDTO extends DTO
{
    use PaginationTraitDTO;

    /** @var CustomerDTO[] */
    public array $data;
}