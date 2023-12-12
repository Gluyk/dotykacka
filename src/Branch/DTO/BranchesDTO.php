<?php

namespace BMM\Dotypos\Branch\DTO;

use BMM\Dotypos\Infrastructure\DTO\DTO;
use BMM\Dotypos\Infrastructure\Trait\PaginationTraitDTO;

final class BranchesDTO extends DTO
{
    use PaginationTraitDTO;

    /** @var BranchDTO[] */
    public array $data;
}