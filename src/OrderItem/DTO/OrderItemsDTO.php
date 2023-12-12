<?php

namespace BMM\Dotypos\OrderItem\DTO;


use BMM\Dotypos\Infrastructure\Trait\PaginationTraitDTO;

final class OrderItemsDTO
{
    use PaginationTraitDTO;

    /** @var OrderItemDTO[] */
    public array $data;
}