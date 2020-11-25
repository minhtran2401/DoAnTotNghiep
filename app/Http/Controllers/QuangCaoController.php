<?php

namespace App\Http\Controllers;
use App\QuangCao;
use Illuminate\Http\Request;

class QuangCaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qc = QuangCao::all();
        return view('admin.quangcao.index', compact('qc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.quangcao.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileimg = $request->file('banner_quangcao'); // tạo biến lấy dữ liệu từ input
        $filename = $fileimg->getClientOriginalName(); // lấy tên theo tên gốc của file
        $pathimg = $fileimg->move(public_path().'/bannerquangcao/', $filename); //chỗ chứa file
        $qc = new QuangCao([
            "banner_quangcao" => $filename,
            "id_sanpham" => $request->get('id_sanpham'),
            "id_blog" => $request->get('id_blog'),
            "loai_quangcao" => $request->get('loai_quangcao'),
            "name_quangcao" => $request->get('name_quangcao'),
            "mota_quangcao" => $request->get('mota_quangcao'),
            "Anhien" => $request->get('Anhien')
        ]);
        toast('Thêm Quảng Cáo Thành Công', 'success');
        $qc->save();
        return redirect()->route('quang-cao.index');
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
        $row =QuangCao::find($id);
        return view('admin.quangcao.edit',compact('row'));
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
        $qc = QuangCao::find($id);
        $fileimg = $request->file('banner_quangcao'); // tạo biến lấy dữ liệu từ input
        if ($fileimg){
            $fileimg = $request->file('banner_quangcao'); // tạo biến lấy dữ liệu từ input
            $filename = $fileimg->getClientOriginalName(); // lấy tên theo tên gốc của file
            $pathimg = $fileimg->move(public_path().'/bannerquangcao/', $filename); //chỗ chứa file
            $qc->banner_quangcao = $filename;
            $qc->id_sanpham = $request->get('id_sanpham');
            $qc->id_blog = $request->get('id_blog');
            $qc->loai_quangcao = $request->get('loai_quangcao');
            $qc->name_quangcao = $request->get('name_quangcao');
            $qc->mota_quangcao = $request->get('mota_quangcao');
            $qc->Anhien = $request->get('Anhien');
        }
        else{  
            $qc->id_sanpham = $request->get('id_sanpham');
            $qc->id_blog = $request->get('id_blog');
            $qc->loai_quangcao = $request->get('loai_quangcao');
            $qc->name_quangcao = $request->get('name_quangcao');
            $qc->mota_quangcao = $request->get('mota_quangcao');
            $qc->Anhien = $request->get('Anhien');
    }
       
          $qc->save();
          toast('Cập Nhật Thành Công!','success');

        return redirect('/quang-cao');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $qc = QuangCao::find($id);
        if ($qc->ktsp()->get()->toArray()==null) {
            $qc->delete();
            toast('Xóa Sản Phẩm Thành Công!','success');
            return redirect()->route('quang-cao.index');
        }else{
            toast('Không Thể Xóa Do Đang Chứa Sản Phẩm!','error');
            return redirect()->route('quang-cao.index');
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
            \App\QuangCao::where('id_quangcao',$request->id)->update(['Anhien'=>$request->status]);
            // trả về status hiện tại để xử lý front end
            return $request->status;
        }
    }
}
