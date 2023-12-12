<?php

namespace BMM\Dotypos\Order\DTO;

use BMM\Dotypos\Infrastructure\DTO\DTO;
use BMM\Dotypos\Infrastructure\Trait\PaginationTraitDTO;

final class OrdersDTO extends DTO
{
    use PaginationTraitDTO;

    /** @var OrderDTO[] */
    public array $data;
}