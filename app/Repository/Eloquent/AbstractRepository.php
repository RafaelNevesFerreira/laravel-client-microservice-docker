<?php

namespace App\Repository\Eloquent;

class AbstractRepository
{
    public function get()
    {
        return $this->model::all();
    }

    public function paginate($per_page)
    {
        return $this->model::paginate($per_page);
    }
}
