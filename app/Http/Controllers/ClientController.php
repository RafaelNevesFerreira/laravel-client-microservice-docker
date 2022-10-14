<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Http\Requests\DeleteClient;
use App\Jobs\UpdateClientNotifyMailJob;
use App\Jobs\WelcomeNewClient;
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
        $client = $this->client->store($request->all());

        WelcomeNewClient::dispatch($client->email, $client->name);

        return $client;
    }

    public function destroy($id)
    {
        $this->get($id);

        $this->client->delete($id);

        return response()->json([
            "message" => "client deleted successfuly",
            "status" => 200
        ]);
    }

    public function update(ClientRequest $request)
    {
        $this->client->update($request->all());

        $client = $this->get($request->id);

        UpdateClientNotifyMailJob::dispatch($client->toArray())->delay(now());
        UpdateClientNotifyMailJob::dispatch($client->toArray())->delay(now());
        UpdateClientNotifyMailJob::dispatch($client->toArray())->delay(now());
        UpdateClientNotifyMailJob::dispatch($client->toArray())->delay(now());
        UpdateClientNotifyMailJob::dispatch($client->toArray())->delay(now());
        UpdateClientNotifyMailJob::dispatch($client->toArray())->delay(now());
        UpdateClientNotifyMailJob::dispatch($client->toArray())->delay(now());
        UpdateClientNotifyMailJob::dispatch($client->toArray())->delay(now());
        UpdateClientNotifyMailJob::dispatch($client->toArray())->delay(now());
        UpdateClientNotifyMailJob::dispatch($client->toArray())->delay(now());
        UpdateClientNotifyMailJob::dispatch($client->toArray())->delay(now());

        return response()->json([
            "message" => "client updated successfuly",
            "data" => $client,
            "status" => 200
        ]);
    }
}
