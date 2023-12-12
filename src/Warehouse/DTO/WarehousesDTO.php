<?php

namespace BMM\Dotypos\Warehouse\DTO;

use BMM\Dotypos\Infrastructure\DTO\DTO;
use BMM\Dotypos\Infrastructure\Trait\PaginationTraitDTO;

final class WarehousesDTO extends DTO
{
    use PaginationTraitDTO;

    /** @var WarehouseDTO[] */
    public array $data;
}
