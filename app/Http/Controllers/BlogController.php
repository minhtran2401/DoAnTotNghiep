<?php

namespace App\Http\Controllers;
use App\Blog;
use DB;
use Illuminate\Http\Request;
use App\ThongBao;
use Spatie\Activitylog\Models\Activity;
use App\Http\Requests\rqBlog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds = Blog::all();
        return view('admin.blog.index', compact('ds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(rqBlog $request)
    {  $fileimg = $request->file('img_blog'); // tạo biến lấy dữ liệu từ input
        $filename = $fileimg->getClientOriginalName(); // lấy tên theo tên gốc của file
        $pathimg = $fileimg->move(public_path().'/imgblog/', $filename); //chỗ chứa file
        $lt = new Blog([
          
            'img_blog' => $filename,
            'name_blog' => $request->get('name_blog'),
            'slug_blog'=>\Str::slug($request->name_blog),
            'id_loaiblog' => $request->get('id_loaiblog'),
            'tomtat_blog' => $request->get('tomtat_blog'),
            'time_blog' => $request->get('time_blog'),
            'noidung_blog' => $request->get('noidung_blog'),
            'id' => $request->get('id'),
            'luotxem' => $request->get('luotxem'),
            'tag_blog' => $request->get('tag_blog'),
            'Anhien' => $request->get('Anhien'),
            'noibat' => $request->get('noibat'),
        ]);
        $lt->save();
        
        toast('Đăng Bài Thành Công!','success');
        return redirect ()->route('blog.index');
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
        $data['kq'] = DB::table('loaiblog')->select("id_loaiblog", "name_loaiblog")->get();  
        $row =Blog::find($id);
        return view('admin.blog.edit',compact('row',$data));
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
        $lt = Blog ::find($id);
        $fileimg = $request->file('hinh_blog'); // tạo biến lấy dữ liệu từ input
        if ($fileimg){
          $fileimg = $request->file('hinh_blog'); // tạo biến lấy dữ liệu từ input
          $filename = $fileimg->getClientOriginalName(); // lấy tên theo tên gốc của file
          $pathimg = $fileimg->move(public_path().'/imgblog/', $filename); //chỗ chứa file
         
          $lt->id_loaiblog = $request->get('id_loaiblog');
          $lt->tomtat_blog = $request->get('tomtat_blog');
          $lt->time_blog = $request->get('time_blog');
          $lt->noidung_blog = $request->get('noidung_blog');
          $lt->name_blog = $request->get('name_blog');
          $lt->luotxem = $request->get('luotxem');
          $lt->id = $request->get('id');
          $lt->tag_blog = $request->get('tag_blog');
          $lt->img_blog = $filename;
          $lt->slug_blog =\Str::slug($request->name_blog);
          $lt->Anhien = $request->get('Anhien');
          $lt->noibat = $request->get('noibat');
        }
        else{
           
            $lt->id_loaiblog = $request->get('id_loaiblog');
            $lt->tomtat_blog = $request->get('tomtat_blog');
            $lt->time_blog = $request->get('time_blog');
            $lt->noidung_blog = $request->get('noidung_blog');
            $lt->name_blog = $request->get('name_blog');
            $lt->luotxem = $request->get('luotxem');
            $lt->id = $request->get('id');
            $lt->tag_blog = $request->get('tag_blog');           
            $lt->slug_blog =\Str::slug($request->name_blog);
            $lt->Anhien = $request->get('Anhien');}
            $lt->noibat = $request->get('noibat');
          $lt->save();
          toast('Cập Nhật Thành Công!','success');
        return redirect()->route('blog.index');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        toast('Đã Xóa Blog!','success');
        return redirect()->route('blog.index');
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
            \App\Blog::where('id_blog',$request->id)->update(['Anhien'=>$request->status]);
            // trả về status hiện tại để xử lý front end
            return $request->status;
        }
    }

    function changeNoiBat(Request $request){
        //kiểm tra xem có phải ajax gửi request k
        if($request->ajax()){
            // không nhận được id thì báo lỗi
            if(!$request->id){
                return "error";
            }
    
            // hien 1 _____ an 0
            //lấy nhóm sản phảm dựa theo id và update lai trạng thái
            \App\Blog::where('id_blog',$request->id)->update(['noibat'=>$request->status]);
            // trả về status hiện tại để xử lý front end
            return $request->status;
        }
    }
}
