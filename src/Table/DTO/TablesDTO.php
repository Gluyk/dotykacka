<?php

namespace BMM\Dotypos\Table\DTO;

use BMM\Dotypos\Infrastructure\DTO\DTO;
use BMM\Dotypos\Infrastructure\Trait\PaginationTraitDTO;

final class TablesDTO extends DTO
{
    use PaginationTraitDTO;

    /** @var TableDTO[] */
    public array $data;
}
