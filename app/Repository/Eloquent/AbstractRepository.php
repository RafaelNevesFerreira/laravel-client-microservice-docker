<?php

namespace App\Repository\Eloquent;

class AbstractRepository
{
    public function get($id)
    {
        return $this->model::findOrFail($id);
    }

    public function paginate($per_page)
    {
        return $this->model::paginate($per_page);
    }

    public function store($data)
    {
        return $this->model::create($data);
    }

    public function delete($id)
    {
        $this->model::destroy($id);
    }

    public function update($data)
    {
        return $this->model::findOrFail($data["id"])->update($data);
    }
}
