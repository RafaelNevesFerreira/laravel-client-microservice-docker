<?php

namespace App\Repository\Eloquent;

use App\Models\Client;
use App\Repository\Contracts\ClientRepositoryInterface;

class ClientRepository extends AbstractRepository implements ClientRepositoryInterface
{
    public function __construct(Client $model)
    {
    }
}
