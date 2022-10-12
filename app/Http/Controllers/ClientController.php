<?php

namespace App\Http\Controllers;

use App\Repository\Contracts\ClientRepositoryInterface;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct(ClientRepositoryInterface $client)
    {
    }

    public function index()
    {
        return $this->client->paginate(15);
    }
}
