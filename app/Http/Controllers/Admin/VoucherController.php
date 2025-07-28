<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreVoucherRequest;
use App\Http\Requests\Admin\UpdateVoucherRequest;

use App\Models\Voucher;
use App\Services\VoucherService;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    /**
     * @var VoucherService
     */
    protected $voucherService;

    public function __construct(VoucherService $voucherService)
    {
        $this->voucherService = $voucherService;
    }

    public function index()
    {
        return view('admin.vouchers.index', $this->voucherService->index());
    }

    public function create()
    {
        return view('admin.vouchers.create');
    }

    public function store(StoreVoucherRequest $request)
    {
        return $this->voucherService->store($request);
    }

    public function edit(Voucher $voucher)
    {
        return view('admin.vouchers.edit', $this->voucherService->edit($voucher));
    }

    public function update(UpdateVoucherRequest $request, Voucher $voucher)
    {
        return $this->voucherService->update($request, $voucher);
    }

    public function delete(Request $request)
    {
        return $this->voucherService->delete($request);
    }
}
