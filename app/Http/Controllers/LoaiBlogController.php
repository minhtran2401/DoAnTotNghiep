<?php

namespace App\Http\Controllers;
use App\LoaiBlog;

use Illuminate\Http\Request;
use App\Http\Requests\rqLoaiBlog;

class LoaiBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds = LoaiBlog::all();
        return view('admin.loaiblog.index', compact('ds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.loaiblog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(rqLoaiBlog $request)
    { 
        $lt = new LoaiBlog([
            'name_loaiblog' => $request->get('name_loaiblog'),
            'slug_loaiblog' =>\Str::slug($request->name_loaiblog),
            'Anhien' => $request->get('Anhien'),
        ]);
        toast('Đã Thêm Loại Blog Mới','success');
        $lt->save();
        return redirect()->route('loai-blog.index');
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
        $row =LoaiBlog::find($id);
        return view('admin.loaiblog.edit',compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(rqLoaiBlog $request, $id)
    {
        $lt = LoaiBlog ::find($id);
        $lt->slug_loaiblog =\Str::slug($request->name_loaiblog);
        $lt->name_loaiblog = $request->get('name_loaiblog');
        $lt->Anhien = $request->get('Anhien');
       
          $lt->save();
          toast('Cập Nhật Loại Blog Thành Công!','success');
        return redirect()->route('loai-blog.index');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lt = LoaiBlog::find($id);
        if ($lt->ktblog()->get()->toArray()==null) {
            $lt->delete();
            toast('Đã xóa xong loại blog vừa chọn !','success');
            return redirect()->route('loai-blog.index');
        }else{
            toast('Không thể xóa loại blog vừa chọn do chứa blog!','error');
            return redirect()->route('loai-blog.index');
        }
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
            \App\LoaiBlog::where('id_loaiblog',$request->id)->update(['Anhien'=>$request->status]);
            // trả về status hiện tại để xử lý front end
            return $request->status;
        }
    }
}
