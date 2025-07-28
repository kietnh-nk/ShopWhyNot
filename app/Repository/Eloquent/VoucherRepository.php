<?php

namespace App\Repository\Eloquent;

use App\Models\Voucher;
use App\Repository\VoucherRepositoryInterface;

class VoucherRepository implements VoucherRepositoryInterface
{
    public function getAll()
    {
        return Voucher::all();
    }

    public function find($id)
    {
        return Voucher::findOrFail($id);
    }

    public function create(array $data)
    {
        return Voucher::create($data);
    }

    public function update($voucher, array $data)
    {
        return $voucher->update($data);
    }

    public function delete($voucher)
    {
        return $voucher->delete();
    }
}
