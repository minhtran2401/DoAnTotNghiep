<?php
use RealRashid\SweetAlert\Facades\Alert;

namespace App\Http\Controllers;
use App\ThuongHieu;

use Illuminate\Http\Request;
use App\Http\Requests\RequestThuongHieu;
class ThuongHieuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds = ThuongHieu::all();
        return view('admin.thuonghieu.index', compact('ds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.thuonghieu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestThuongHieu $request)
    { 
        $fileimg = $request->file('img_thuonghieu'); // tạo biến lấy dữ liệu từ input
        $filename = $fileimg->getClientOriginalName(); // lấy tên theo tên gốc của file
        $pathimg = $fileimg->move(public_path().'/hinhthuonghieu/', $filename); //chỗ chứa file
        $th = new ThuongHieu([
            'img_thuonghieu' => $filename,
            'name_thuonghieu' => $request->get('name_thuonghieu'),
            'link_thuonghieu' => $request->get('link_thuonghieu'),
            'sdt_thuonghieu' => $request->get('sdt_thuonghieu'),
            'slug_thuonghieu' =>\Str::slug($request->name_thuonghieu),
            'Anhien' => $request->get('Anhien'),
        ]);
        toast('Thêm Thương Hiệu Mới Thành Công!','success');
        $th->save();
        return redirect ()->route('thuong-hieu.index');
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
        $row =ThuongHieu::find($id);
        return view('admin.thuonghieu.edit',compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestThuongHieu $request, $id)
    {
        $th = ThuongHieu ::find($id);
        $fileimg = $request->file('img_thuonghieu'); // tạo biến lấy dữ liệu từ input
        if ($fileimg){
            $fileimg = $request->file('img_thuonghieu'); // tạo biến lấy dữ liệu từ input
            $filename = $fileimg->getClientOriginalName(); // lấy tên theo tên gốc của file
            $pathimg = $fileimg->move(public_path().'/hinhthuonghieu/', $filename); //chỗ chứa file
            $th->img_thuonghieu = $filename;
            $th->slug_thuonghieu =\Str::slug($request->name_thuonghieu);
            $th->name_thuonghieu = $request->get('name_thuonghieu');
            $th->sdt_thuonghieu = $request->get('sdt_thuonghieu');
            $th->link_thuonghieu = $request->get('link_thuonghieu');
            $th->Anhien = $request->get('Anhien');
        }
        else{

            $th->slug_thuonghieu =\Str::slug($request->name_thuonghieu);
            $th->name_thuonghieu = $request->get('name_thuonghieu');
            $th->sdt_thuonghieu = $request->get('sdt_thuonghieu');
            $th->link_thuonghieu = $request->get('link_thuonghieu');
            $th->Anhien = $request->get('Anhien');
        }
       
          $th->save();
          toast('Cập Nhật Thương Hiệu Thành Công!','success');

        return redirect('/thuong-hieu');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $th = ThuongHieu::find($id);
        $th->delete($id);
        toast('Xóa Thương Hiệu Thành Công!','success');
        return redirect()->route('thuong-hieu.index');
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
            \App\ThuongHieu::where('id_thuonghieu',$request->id)->update(['Anhien'=>$request->status]);
            // trả về status hiện tại để xử lý front end
            return $request->status;
        }
    }
}
