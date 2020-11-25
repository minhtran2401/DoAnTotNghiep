<?php
use RealRashid\SweetAlert\Facades\Alert;

namespace App\Http\Controllers;
use App\NhomSanPham;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\RequestNhomSanPham;

class NhomSanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds = NhomSanPham::all();
        return view('admin.nhomsanpham.index', compact('ds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.nhomsanpham.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestNhomSanPham $request)
    { 
        $fileimg = $request->file('icon_nhomsp'); // tạo biến lấy dữ liệu từ input
        $filename = $fileimg->getClientOriginalName(); // lấy tên theo tên gốc của file
        $pathimg = $fileimg->move(public_path().'/iconweb/', $filename); //chỗ chứa file
        $nsp = new NhomSanPham([
            'slug_nhomsp' =>\Str::slug($request->name_nhomsp),
            'icon_nhomsp' => $filename,
            'name_nhomsp' => $request->get('name_nhomsp'),
            'hinh_nhomsp' =>$request->get('hinh_nhomsp'),
            'Anhien' => $request->get('Anhien'),
        ]);
        toast('Thêm Tên Nhóm Sản Phẩm Thành Công!','success');
        $nsp->save();
        return redirect ()->route('nhom-san-pham.index')->with('ok','Đã thêm nhóm mới !');
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
        $row =NhomSanPham::find($id);
        return view('admin.nhomsanpham.edit',compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestNhomSanPham $request, $id)
    {
        $nsp = NhomSanPham ::find($id);
        $fileimg = $request->file('icon_nhomsp'); // tạo biến lấy dữ liệu từ input
        if ($fileimg){
            $fileimg = $request->file('icon_nhomsp'); // tạo biến lấy dữ liệu từ input
            $filename = $fileimg->getClientOriginalName(); // lấy tên theo tên gốc của file
            $pathimg = $fileimg->move(public_path().'/iconweb/', $filename); //chỗ chứa file
            $nsp->icon_nhomsp = $filename;
            $nsp->slug_nhomsp =\Str::slug($request->name_nhomsp);
            $nsp->name_nhomsp = $request->get('name_nhomsp');
            $nsp->hinh_nhomsp = $request->get('hinh_nhomsp');
            $nsp->Anhien = $request->get('Anhien');
        }
        else
        {
        $nsp->slug_nhomsp =\Str::slug($request->name_nhomsp);
        $nsp->name_nhomsp = $request->get('name_nhomsp');
        $nsp->hinh_nhomsp = $request->get('hinh_nhomsp');
        $nsp->Anhien = $request->get('Anhien');
        }
       
          $nsp->save();
          toast('Cập Nhật Tên Nhóm Sản Phẩm Thành Công!','success');

        return redirect()->route('nhom-san-pham.index');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nsp = NhomSanPham::find($id);
        if ($nsp->ktloaisp()->get()->toArray()==null) {
            $nsp->delete();
            toast('Đã Xóa Tên Nhóm Sản Phẩm Thành Công!','success');
            return redirect()->route('nhom-san-pham.index');
        }else{
            toast('Không Thể Xóa Do Đang Chứa Danh Mục !','error');
            return redirect()->route('nhom-san-pham.index');
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
        \App\NhomSanPham::where('id_nhomsp',$request->id)->update(['Anhien'=>$request->status]);
        // trả về status hiện tại để xử lý front end
        return $request->status;
    }
}
}
