<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Repository\Contracts\ClientRepositoryInterface;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct(public ClientRepositoryInterface $client)
    {
    }

    public function index()
    {
        return response()->json($this->client->paginate(15));
    }

    public function get($id)
    {
        return $this->client->get($id);
    }

    public function store(ClientRequest $request)
    {
        return $this->client->store($request->all());
    }
}
