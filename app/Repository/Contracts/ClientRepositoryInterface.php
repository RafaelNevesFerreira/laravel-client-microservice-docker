<?php

namespace App\Repository\Contracts;

interface ClientRepositoryInterface
{
    public function paginate($per_page);
}
