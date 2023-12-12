<?php

namespace BMM\Dotypos\Reservation\DTO;

use BMM\Dotypos\Infrastructure\DTO\DTO;
use BMM\Dotypos\Infrastructure\Trait\PaginationTraitDTO;

final class ReservationsDTO extends DTO
{
    use PaginationTraitDTO;

    /** @var ReservationDTO[] */
    public array $data;
}
