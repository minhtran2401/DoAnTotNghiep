<?php

namespace App\Http\Controllers;
use App\TuyenDung;
use Illuminate\Http\Request;
use App\Http\Requests\rqTuyenDung;

class TuyenDungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ds = TuyenDung::all();
        return view('admin.tuyendung.index', compact('ds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tuyendung.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(rqTuyenDung $request)
    {
        $tuyendung = new TuyenDung();
        $tuyendung->name_tuyendung = $request->name_tuyendung;
        $tuyendung->noidung_tuyendung = $request->noidung_tuyendung;
        $tuyendung->Anhien = $request->Anhien;

        $tuyendung->save();
        toast('Đăng Tin Tuyển Dụng Thành Công!','success');
        return redirect()->route('tuyendung.index');
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
        $row =TuyenDung::find($id);
        return view('admin.tuyendung.edit',compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(rqTuyenDung $request, $id)
    {
        $tuyendung = TuyenDung::find($id);
        $tuyendung->name_tuyendung = $request->name_tuyendung;
        $tuyendung->noidung_tuyendung = $request->noidung_tuyendung;
        $tuyendung->Anhien = $request->Anhien;

        $tuyendung->save();
        toast('Đã sửa tin tuyển dụng!','success');
        return redirect()->route('tuyendung.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $td = TuyenDung::find($id);
        $td->delete($id);
        toast('Xóa Tin Thành Công!','success');
        return redirect()->route('tuyendung.index');
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
            \App\TuyenDung::where('id_tuyendung',$request->id)->update(['Anhien'=>$request->status]);
            // trả về status hiện tại để xử lý front end
            return $request->status;
        }
    }
}
