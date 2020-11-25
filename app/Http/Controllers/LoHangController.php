<?php
use RealRashid\SweetAlert\Facades\Alert;

namespace App\Http\Controllers;
use App\LoHang;

use Illuminate\Http\Request;

class LoHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds = LoHang::all();
        return view('admin.lohang.index', compact('ds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lohang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $lh = new LoHang([
            'lohang_hsd' => $request->get('lohang_hsd'),
            'lohang_giamua' => $request->get('lohang_giamua'),
            'lohang_giaban' => $request->get('lohang_giaban'),
            'lohang_slnhap' => $request->get('lohang_slnhap'),
            'lohang_slbanra' => $request->get('lohang_slbanra'),
            'lohang_sltrahang' => $request->get('lohang_sltrahang'),
            'lohang_slhientai' => $request->get('lohang_slhientai'),
            'id_sanpham' => $request->get('id_sanpham'),
            'id_thuonghieu' => $request->get('id_thuonghieu'),
            'Anhien' => $request->get('Anhien'),
        ]);
        toast('Đã Thêm Lô Hàng Mới','success');
        $lh->save();
        return redirect()->route('lo-hang.index');
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
        $row =LoHang::find($id);
        return view('admin.lohang.edit',compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lh = LoHang ::find($id);
        $lh->lohang_hsd = $request->get('lohang_hsd');
        $lh->lohang_giamua = $request->get('lohang_giamua');
        $lh->lohang_giaban = $request->get('lohang_giaban');
        $lh->lohang_slnhap = $request->get('lohang_slnhap');
        $lh->lohang_slbanra = $request->get('lohang_slbanra');
        $lh->lohang_sltrahang = $request->get('lohang_sltrahang');
        $lh->lohang_slhientai = $request->get('lohang_slhientai');
        $lh->id_sanpham = $request->get('id_sanpham');
        $lh->id_thuonghieu = $request->get('id_thuonghieu');
        $lh->Anhien = $request->get('Anhien');
       
          $lh->save();
          toast('Cập Nhật Lô Hàng Thành Công!','success');
        return redirect()->route('lo-hang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lh = LoHang::find($id);
            $lh->delete($id);
            toast('Xóa Lô Hàng Thành Công!','success');
            return redirect()->route('lo-hang.index');

    }

    function changeStatus(Request $request){
        //kiểm tra xem có phải ajax gửi request k
        if($request->ajax()){
            // không nhận được id thì báo lỗi
            if(!$request->id){
                return "error";
            }
    
            // hien 1 _____ an 0
            //lấy nhóm sản phảm dựa theo id và update lai trạng thái
            \App\LoHang::where('id_lohang',$request->id)->update(['Anhien'=>$request->status]);
            // trả về status hiện tại để xử lý front end
            return $request->status;
        }
    }
}
