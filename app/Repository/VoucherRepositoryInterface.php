<?php

namespace App\Repository;

interface VoucherRepositoryInterface
{
    public function getAll();
    public function find($id);
    public function create(array $data);
    public function update($model, array $data);
    public function delete($model);
}
