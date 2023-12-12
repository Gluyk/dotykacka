<?php

namespace BMM\Dotypos\DiscountGroup\DTO;

use BMM\Dotypos\Infrastructure\DTO\DTO;
use BMM\Dotypos\Infrastructure\Trait\PaginationTraitDTO;

final class DiscountGroupsDTO extends DTO
{
    use PaginationTraitDTO;

    /** @var DiscountGroupDTO[] */
    public array $data;
}