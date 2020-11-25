<?php
use RealRashid\SweetAlert\Facades\Alert;

namespace App\Http\Controllers;
use App\LoaiSanPham;

use Illuminate\Http\Request;
use App\Http\Requests\RequestLoaiSanPham;

class LoaiSanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds = LoaiSanPham::all();
        return view('admin.loaisanpham.index', compact('ds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.loaisanpham.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestLoaiSanPham $request)
    { 
        $fileimg = $request->file('icon_loaisp'); // tạo biến lấy dữ liệu từ input
        $filename = $fileimg->getClientOriginalName(); // lấy tên theo tên gốc của file
        $pathimg = $fileimg->move(public_path().'/iconweb/', $filename); //chỗ chứa file
        $lsp = new LoaiSanPham([
            'slug_loaisp' =>\Str::slug($request->name_loaisp),
            'icon_loaisp' => $filename,
            'id_nhomsp' => $request->get('id_nhomsp'),
            'name_loaisp' => $request->get('name_loaisp'),
            'hinh_loaisp' => $request->get('hinh_loaisp'),
            'Anhien' => $request->get('Anhien'),
        ]);
        toast('Thêm Loại Sản Phẩm Mới Thành Công!','success');
        $lsp->save();
        return redirect ()->route('loai-san-pham.index');
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
        $row =LoaiSanPham::find($id);
        return view('admin.loaisanpham.edit',compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestLoaiSanPham $request, $id)
    {
        $lsp = LoaiSanPham::find($id);
        $fileimg = $request->file('icon_loaisp'); // tạo biến lấy dữ liệu từ input
        if ($fileimg){
            $fileimg = $request->file('icon_loaisp'); // tạo biến lấy dữ liệu từ input
            $filename = $fileimg->getClientOriginalName(); // lấy tên theo tên gốc của file
            $pathimg = $fileimg->move(public_path().'/iconweb/', $filename); //chỗ chứa file
            $lsp->icon_loaisp = $filename;
            $lsp->slug_loaisp =\Str::slug($request->name_loaisp);
            $lsp->name_loaisp = $request->get('name_loaisp');
            $lsp->id_nhomsp = $request->get('id_nhomsp');
            $lsp->hinh_loaisp = $request->get('hinh_loaisp');
            $lsp->Anhien = $request->get('Anhien');
        }
        else{

        $lsp->slug_loaisp =\Str::slug($request->name_loaisp);
        $lsp->name_loaisp = $request->get('name_loaisp');
        $lsp->Anhien = $request->get('Anhien');
        $lsp->hinh_loaisp = $request->get('hinh_loaisp');
        $lsp->id_nhomsp = $request->get('id_nhomsp');
    }
       
          $lsp->save();
          toast('Cập Nhật Tên Loại Sản Phẩm Thành Công!','success');

        return redirect('/loai-san-pham');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lsp = LoaiSanPham::find($id);
        if ($lsp->ktsp()->get()->toArray()==null) {
            $lsp->delete();
            toast('Xóa Sản Phẩm Thành Công!','success');
            return redirect()->route('loai-san-pham.index');
        }else{
            toast('Không Thể Xóa Do Đang Chứa Sản Phẩm!','error');
            return redirect()->route('loai-san-pham.index');
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
            \App\LoaiSanPham::where('id_loaisp',$request->id)->update(['Anhien'=>$request->status]);
            // trả về status hiện tại để xử lý front end
            return $request->status;
        }
    }
}
