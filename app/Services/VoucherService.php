<?php

namespace App\Services;

use App\Helpers\TextSystemConst;
use App\Http\Requests\Admin\StoreVoucherRequest;
use App\Http\Requests\Admin\UpdateVoucherRequest;
use App\Models\Voucher;
use App\Repository\Eloquent\VoucherRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class VoucherService
{
    /**
     * @var VoucherRepository
     */
    private $voucherRepository;

    /**
     * VoucherService constructor.
     *
     * @param VoucherRepository $voucherRepository
     */
    public function __construct(VoucherRepository $voucherRepository)
    {
        $this->voucherRepository = $voucherRepository;
    }

    public function index()
    {
        $list = Voucher::all();

        $tableCrud = [
            'headers' => [
                ['text' => 'Mã Code', 'key' => 'code'],
                ['text' => 'Ngày Bắt Đầu', 'key' => 'start_date'],
                ['text' => 'Ngày Hết Hạn', 'key' => 'end_date'],
                ['text' => 'Số Lượng', 'key' => 'quantity'],
                ['text' => 'Đã Sử Dụng', 'key' => 'used'],
                ['text' => 'Giảm (%)', 'key' => 'discount_percentage'],
                ['text' => 'Giảm Tối Đa (VNĐ)', 'key' => 'max_discount_amount'],
            ],
            'actions' => [
                'text' => 'Thao Tác',
                'create' => true,
                'edit' => true,
                'delete' => true,
                'createExcel' => false,
                'deleteAll' => false,
                'viewDetail' => false,
            ],
            'routes' => [
                'create' => 'admin.vouchers_create',
                'edit' => 'admin.vouchers_edit',
                'delete' => 'admin.vouchers_delete',
            ],
            'list' => $list,
        ];

        return [
            'title' => TextLayoutTitle("voucher"),
            'tableCrud' => $tableCrud,
        ];
    }

    public function create()
    {
        $fields = [
            ['attribute' => 'code', 'label' => 'Mã code', 'type' => 'text'],
            ['attribute' => 'start_date', 'label' => 'Ngày bắt đầu', 'type' => 'date'],
            ['attribute' => 'end_date', 'label' => 'Ngày kết thúc', 'type' => 'date'],
            ['attribute' => 'quantity', 'label' => 'Số lượng', 'type' => 'number'],
            ['attribute' => 'discount_percentage', 'label' => 'Giảm (%)', 'type' => 'number'],
            ['attribute' => 'max_discount_amount', 'label' => 'Số tiền giảm tối đa', 'type' => 'number'],
        ];

        $rules = [
            'code' => ['required' => true],
            'start_date' => ['required' => true],
            'end_date' => ['required' => true],
            'quantity' => ['required' => true],
            'discount_percentage' => ['required' => true],
            'max_discount_amount' => ['required' => true],
        ];

        $messages = [
            'code' => ['required' => __('message.required', ['attribute' => 'mã code'])],
            'start_date' => ['required' => __('message.required', ['attribute' => 'ngày bắt đầu'])],
            'end_date' => ['required' => __('message.required', ['attribute' => 'ngày kết thúc'])],
            'quantity' => ['required' => __('message.required', ['attribute' => 'số lượng'])],
            'discount_percentage' => ['required' => __('message.required', ['attribute' => 'giảm (%)'])],
            'max_discount_amount' => ['required' => __('message.required', ['attribute' => 'số tiền giảm tối đa'])],
        ];
        return [
            'title' => TextLayoutTitle("create_voucher"),
            'fields' => $fields,
            'rules' => $rules,
            'messages' => $messages,
        ];
    }

    public function store(StoreVoucherRequest $request)
    {
        try {
            $data = $request->validated();
            $this->voucherRepository->create($data);
            return redirect()->route('admin.vouchers_index')->with('success', TextSystemConst::CREATE_SUCCESS);
        } catch (Exception $e) {
            Log::error($e);
            return redirect()->route('admin.vouchers_index')->with('error', TextSystemConst::CREATE_FAILED);
        }
    }

    public function edit(Voucher $voucher)
    {
        $fields = [
            ['attribute' => 'code', 'label' => 'Mã Code', 'type' => 'text', 'value' => $voucher->code],
            ['attribute' => 'start_date', 'label' => 'Ngày bắt đầu', 'type' => 'date', 'value' => $voucher->start_date],
            ['attribute' => 'end_date', 'label' => 'Ngày hết hạn', 'type' => 'date', 'value' => $voucher->end_date],
            ['attribute' => 'quantity', 'label' => 'Số lượng', 'type' => 'number', 'value' => $voucher->quantity],
            ['attribute' => 'used', 'label' => 'Đã sử dụng', 'type' => 'number', 'value' => $voucher->used],
            ['attribute' => 'discount_percentage', 'label' => 'Giảm giá (%)', 'type' => 'number', 'value' => $voucher->discount_percentage],
            ['attribute' => 'max_discount_amount', 'label' => 'Giảm tối đa (VNĐ)', 'type' => 'number', 'value' => $voucher->max_discount_amount],
        ];

        $rules = [
            'code' => ['required' => true],
            'start_date' => ['required' => true],
            'end_date' => ['required' => true],
            'quantity' => ['required' => true],
            'discount_percentage' => ['required' => true],
            'max_discount_amount' => ['required' => true],
        ];

        $messages = [
            'code' => ['required' => __('message.required', ['attribute' => 'mã code'])],
            'start_date' => ['required' => __('message.required', ['attribute' => 'ngày bắt đầu'])],
            'end_date' => ['required' => __('message.required', ['attribute' => 'ngày hết hạn'])],
            'quantity' => ['required' => __('message.required', ['attribute' => 'số lượng'])],
            'discount_percentage' => ['required' => __('message.required', ['attribute' => 'phần trăm giảm'])],
            'max_discount_amount' => ['required' => __('message.required', ['attribute' => 'số tiền giảm tối đa'])],
        ];

        return [
            'title' => TextLayoutTitle("edit_voucher"),
            'fields' => $fields,
            'rules' => $rules,
            'messages' => $messages,
            'voucher' => $voucher,
        ];
    }

    public function update(UpdateVoucherRequest $request, Voucher $voucher)
    {
        try {
            $data = $request->validated();
            $this->voucherRepository->update($voucher, $data);
            return redirect()->route('admin.vouchers_index')->with('success', TextSystemConst::UPDATE_SUCCESS);
        } catch (Exception $e) {
            Log::error($e);
            return redirect()->route('admin.vouchers_index')->with('error', TextSystemConst::UPDATE_FAILED);
        }
    }

    public function delete(Request $request)
    {
        try {
            $voucher = $this->voucherRepository->find($request->id);
            if ($this->voucherRepository->delete($voucher)) {
                return response()->json(['status' => 'success', 'message' => TextSystemConst::DELETE_SUCCESS]);
            }
            return response()->json(['status' => 'failed', 'message' => TextSystemConst::DELETE_FAILED]);
        } catch (Exception $e) {
            Log::error($e);
            return response()->json(['status' => 'error', 'message' => TextSystemConst::SYSTEM_ERROR]);
        }
    }
}
