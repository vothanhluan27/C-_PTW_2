<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Voucher;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

//Unknow
class VoucherController extends Controller
{


    public function addVoucher()
    {
        return view('admin.voucher.addvoucher');
    }

    public function customVoucher(Request $request)
    {
        $request->validate([
            'code_voucher' => ['required', 'max:100', Rule::unique('vouchers', 'code_voucher')],
            'createddate' => 'required',
            'expireddate' => 'required|after:createddate',
            'reduce' => 'required|numeric',
        ], [
            'expireddate.after' => 'Ngày hết hạn sau ngày đăng ký.',
            'reduce.numeric' => 'Giá trị giảm giá là một số.',
            'code_voucher.required' => 'Mã giảm giá là bắt buộc.',
            'code_voucher.max' => 'Không được vượt quá 100 ký tự.',
            'code_voucher.unique' => 'Mã giảm giá đã tồn tại.',
        ]);

        $createdDate = $request->createddate;
        $newCreatedDate = date("Y-m-d", strtotime($createdDate));
        $expiredDate = $request->expireddate;
        $newExpiredDate = date("Y-m-d", strtotime($expiredDate));
        if (strtotime($newExpiredDate) <= strtotime('today')) {
            return redirect()->back()->withErrors(['expireddate' => 'Ngày hết hạn phải sau ngày hiện tại.']);
        }
        if (strtotime($newCreatedDate) <= strtotime('today')) {
            return redirect()->back()->withErrors(['createddate' => 'Ngày bắt đầu phải sau ngày hiện tại.']);
        }
        $voucher = new Voucher($request->all());
        $voucher->createddate = $newCreatedDate;
        $voucher->expireddate = $newExpiredDate;
        $voucher->save();

        return redirect("/listVoucher")->withErrors(['expireddate' => 'Ngày hết hạn sau ngày đăng ký.']);
    }

    public function createVoucher(array $data)
    {
        return Voucher::create([
            'code_voucher' => $data['code_voucher'],
            'createddate' => $data['createddate'],
            'expireddate' => $data['expireddate'],
            'reduce' => $data['reduce'],
        ]);
    }

    public function getDataEditVoucher($id)
    {

        $getData = DB::table('vouchers')->select('*')->where('id', $id)->get();
        return view('admin.voucher.editvoucher')->with('getDataVoucherById', $getData);
    }

    public function updateVoucher(Request $request)
    {
        $request->validate([
            'code_voucher' => ['required', 'max:100', Rule::unique('vouchers', 'code_voucher')],
            'createddate' => 'required',
            'expireddate' => 'required|after:createddate',
            'reduce' => 'required|numeric',
        ], [
            'expireddate.after' => 'Ngày hết hạn phải sau ngày đăng ký.',
            'reduce.numeric' => 'Giá trị giảm giá phải là số.',
            'code_voucher.required' => 'Không được bỏ trống mã giảm giá.',
            'code_voucher.max' => 'Không được vượt quá 100 ký tự.',
            'code_voucher.unique' => 'Đã tồn tại mã vui lòng nhập mã khác.',
        ]);
        $createdDate = $request->createddate;
        $newCreatedDate = date("Y-m-d", strtotime($createdDate));
        $expiredDate = $request->expireddate;
        $newExpiredDate = date("Y-m-d", strtotime($expiredDate));
        if (strtotime($newExpiredDate) <= strtotime('today')) {
            return redirect()->back()->withErrors(['expireddate' => 'Ngày hết hạn phải sau ngày hiện tại.']);
        }
        if (strtotime($newCreatedDate) <= strtotime('today')) {
            return redirect()->back()->withErrors(['createddate' => 'Ngày bắt đầu phải sau ngày hiện tại.']);
        }
        $updateData = DB::table('vouchers')->where('id', $request->id)->update([
            'code_voucher' => $request->code_voucher,
            'createddate' => $newCreatedDate,
            'expireddate' => $newExpiredDate,
            'reduce' => $request->reduce,
        ]);
        //Thực hiện chuyển trang
        return redirect('listVoucher');
    }


    public function deleteVoucher($id)
    {

        $deleteData = DB::table('vouchers')->where('id', '=', $id)->delete();
        return redirect('listVoucher');
    }


    public function listVoucher()
    {

        $vouchers = DB::table('vouchers')->orderBy('vouchers.id', 'desc')->paginate(4);
        return view('admin.voucher.listvoucher', compact('vouchers'));
    }

    public function searchVoucher(Request $request)
    {
        $keyword = $request->keyword;
        $vouchers = Voucher::where('code_voucher', 'LIKE', '%' . $keyword . '%')->paginate(4);
        return view('admin.voucher.listsearchvoucher', compact('vouchers'));
    }
}
