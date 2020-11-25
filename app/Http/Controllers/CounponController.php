<?php
namespace App\Http\Controllers;
use App\Counpon;

use Illuminate\Http\Request;
use App\Http\Requests\checkmgg;

class CounponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds = Counpon::all();
        return view('admin.counpon.index', compact('ds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.counpon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(checkmgg $request)
    {
        // $this->validate($request, [
        //     'counpon_code'=>'required|max:50|unique:counpon,counpon_code',
        // ]);
        $ma = new Counpon([
            'counpon_name' => $request->get('counpon_name'),
            'counpon_type' => $request->get('counpon_type'),
            'counpon_number' => $request->get('counpon_number'),
            'counpon_quanty' => $request->get('counpon_quanty'),
            'counpon_code' => $request->get('counpon_code'),
            'counpon_time' => $request->get('counpon_time'),
            'Anhien' => $request->get('Anhien'),
        ]);
        toast('Đã Thêm Mã Khuyến Mãi Mới','success');
        $ma->save();
       
        return redirect()->route('counpon.index');
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
        $row = Counpon::find($id);
        return view('admin.counpon.edit', compact('row'));
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
        $cp = Counpon::find($id);
        $cp->counpon_name = $request->get('counpon_name');
        $cp->counpon_type = $request->get('counpon_type');
        $cp->counpon_number = $request->get('counpon_number');
        $cp->counpon_quanty = $request->get('counpon_quanty');
        $cp->counpon_code = $request->get('counpon_code');
        $cp->counpon_time = $request->get('counpon_time');
        $cp->Anhien = $request->get('Anhien');
        $cp->save();
        toast('Cập Nhật Thành Công!','success');
        return redirect('/counpon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cp = Counpon::find($id);
        $cp->delete($id);
        toast('Đã xóa xong mã giảm giá vừa chọn !','success');
        return redirect()->route('counpon.index');
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
            \App\Counpon::where('counpon_id',$request->id)->update(['Anhien'=>$request->status]);
            // trả về status hiện tại để xử lý front end
            return $request->status;
        }
    }
}
