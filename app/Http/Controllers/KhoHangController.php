<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\KhoHang;
use App\DonVi;
use Illuminate\Http\Request;
use App\Http\Requests\rqKhoHang;
use Carbon\Carbon;
use DB;
use App\ChiTietHD;
class KhoHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timenow = Carbon::now('Asia/Ho_Chi_Minh');
        $totals = ChiTietHD::select("chitiethd.id_sanpham", DB::Raw("SUM(chitietdonhang_soluong) AS tongsoluong"))
        ->groupBy('id_sanpham')
        ->join('sanpham','sanpham.id_sanpham','chitiethd.id_sanpham')
        ->get();
        // dd($totals);
        $ds = KhoHang::get();
     
        return view('admin.khohang.index', compact('ds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $data['dvt']    = DonVi::select("id_donvitinh", "name_donvi")->get();
        return view('admin.khohang.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(rqKhoHang $request)
    
    { 
        
        $number = mt_rand(1000000000, 9999999999);
        $lh = new KhoHang([
            'sku' => $number,
            'khohang_name' => $request->get('khohang_name'),
            'khohang_soluong' => $request->get('khohang_soluong'),
            'khohang_donvi' => $request->get('khohang_donvi'),
            'khohang_ngaynhap' => $request->get('khohang_ngaynhap'),
            'khohang_hsd' => $request->get('khohang_hsd'),
        ]);
        toast('Đã Thêm Kho Hàng Mới','success');
        $lh->save();
        return redirect()->route('nhap-kho-hang.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
       
        $row =KhoHang::find($id);
        $dvt = DonVi::select("id_donvitinh", "name_donvi")->get();
        return view('admin.khohang.edit',compact('row','dvt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(rqKhoHang $request, $id)
    {
        
        $lh = KhoHang ::find($id);
        $lh->khohang_name = $request->get('khohang_name');
        $lh->khohang_soluong = $request->get('khohang_soluong');
        $lh->khohang_donvi = $request->get('khohang_donvi');
        $lh->khohang_ngaynhap = $request->get('khohang_ngaynhap');
        $lh->khohang_hsd = $request->get('khohang_hsd');
       
          $lh->save();
          toast('Cập Nhật Kho Hàng Thành Công!','success');
        return redirect()->route('nhap-kho-hang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lh = KhoHang::find($id);
        DB::delete("delete from sanpham where sku  = $lh->sku ");
        $lh->delete($id);
       
      
            toast('Xóa Kho Hàng Thành Công!','success');
            return redirect()->route('nhap-kho-hang.index');

    }

    function changeStatus(Request $request){
        //kiểm tra xem có phải ajax gửi request k
        if($request->ajax()){
            // không nhận được id thì báo lỗi
            if(!$request->sku){
                return "error";
            }
    
            // hien 1 _____ an 0
            //lấy nhóm sản phảm dựa theo id và update lai trạng thái
            \App\KhoHang::where('sku',$request->sku)->update(['khohang_trangthai'=>$request->status]);
            // trả về status hiện tại để xử lý front end
            return $request->status;
        }
    }
}
