<?php
use RealRashid\SweetAlert\Facades\Alert;

namespace App\Http\Controllers;
use App\SanPham;
use App\HinhSanPham;
use App\LoaiSanPham;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\File; 
use App\KhoHang;





use Illuminate\Http\Request;
use App\Http\Requests\RequestSanPham;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $now = Carbon::now('Asia/Ho_Chi_Minh');  
        $ds = SanPham::all();
        return view('admin.sanpham.index', compact('ds','now'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $data['loaisp'] = DB::table("loaisp")->select("id_loaisp", "name_loaisp")->get();
        $data['nhomsp'] = DB::table("nhomsp")->select("id_nhomsp", "name_nhomsp")->get();
        $data['dvt']    = DB::table("donvitinh")->select("id_donvitinh", "name_donvi")->get();
        $data['ncc']    = DB::table("nhacungcap")->select("id_thuonghieu", "name_thuonghieu")->get();
        $data['kho'] = DB::table("khohang")->select("sku", "khohang_name")->where('khohang_trangthai',0)->get();

                             
        return view('admin.sanpham.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestSanPham $request)
    
    { 
        
        $fileimg = $request->file('img_sp'); // tạo biến lấy dữ liệu từ input
        $filename = $fileimg->getClientOriginalName(); // lấy tên theo tên gốc của file
        $pathimg = $fileimg->move(public_path().'/hinhsp/', $filename); //chỗ chứa file

            $sp = new SanPham;
            $sp->img_sp = $filename;
            $sp->slug_sp =\Str::slug($request->name_sp);
            $sp->name_sp = $request->get('name_sp');
            $sp->id_nhomsp = $request->get('id_nhomsp');
            $sp->id_loaisp = $request->get('id_loaisp');
            $sp->price_sp = $request->get('price_sp');
            $sp->old_price_sp = $request->get('old_price_sp');
            $sp->Anhien = $request->get('Anhien');
            $sp->id_donvitinh = $request->get('id_donvitinh');
            $sp->sp_khuyenmai = $request->get('sp_khuyenmai');   
            $sp->id_thuonghieu = $request->get('id_thuonghieu');
            $sp->motadai_sp = $request->get('motadai_sp');
            $sp->motangan_sp = $request->get('motangan_sp');
            $sp->time_discount = $request->get('time_discount');
            $sp->sku = $request->get('sku');
        
        $sp->save();

        DB::update("update khohang set khohang_trangthai = 1 where khohang.sku =  $sp->sku ");

    
        $files =[];
        if ($request->file('txtSPImage1')) {
            $files[] = $request->file('txtSPImage1');
        }
        if ($request->file('txtSPImage2')) {
            $files[] = $request->file('txtSPImage2');
        } 
        if ($request->file('txtSPImage3')) {
            $files[] = $request->file('txtSPImage3');
        }
        if ($request->file('txtSPImage4')) {
            $files[] = $request->file('txtSPImage4');
        } 
        if ($request->file('txtSPImage5')) {
            $files[] = $request->file('txtSPImage5');
        }

        $names =[];   

        foreach ($files as $file) {
            if(!empty($file)){
                $imgdt=$file->getClientOriginalName();
                $file->move(public_path().'/hinhchitiet/', $imgdt);

                $hinh = new HinhSanPham; 
                $hinh->name_img = $imgdt;
                $hinh->id_sanpham = $sp->id_sanpham;
                $hinh->save();
            }
        }
        toast('Thêm Sản Phẩm Thành Công!','success');
        return redirect ()->route('san-pham.index');
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
        $data['kho'] = DB::table("khohang")->select("sku", "khohang_name")->where('khohang_trangthai',1)->get();
        $data['images'] =DB::table('imgchitiet')->where('id_sanpham',$id)->get();
        $data['loaisp'] = DB::table("loaisp")->select("id_loaisp", "name_loaisp")->get();
        $data['nhomsp'] = DB::table("nhomsp")->select("id_nhomsp", "name_nhomsp")->get();
        $data['dvt']    = DB::table("donvitinh")->select("id_donvitinh", "name_donvi")->get();
        $data['ncc']    = DB::table("nhacungcap")->select("id_thuonghieu", "name_thuonghieu")->get();
        $row = SanPham::find($id);
        return view('admin.sanpham.edit',compact('row'),$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestSanPham $request, $id)
    {
        $sp = SanPham ::find($id);
        $fileimg = $request->file('img_sp'); // tạo biến lấy dữ liệu từ input
        if ($fileimg){
            $fileimg = $request->file('img_sp'); // tạo biến lấy dữ liệu từ input
            $filename = $fileimg->getClientOriginalName(); // lấy tên theo tên gốc của file
            $pathimg = $fileimg->move(public_path().'/hinhsp/', $filename); //chỗ chứa file
            $sp->img_sp = $filename;
            $sp->slug_sp =\Str::slug($request->name_sp);
            $sp->name_sp = $request->get('name_sp');
            $sp->id_nhomsp = $request->get('id_nhomsp');
            $sp->id_loaisp = $request->get('id_loaisp');
            $sp->id_donvitinh = $request->get('id_donvitinh');
            $sp->id_thuonghieu = $request->get('id_thuonghieu');
            $sp->price_sp = $request->get('price_sp');
            $sp->old_price_sp = $request->get('old_price_sp');
            $sp->Anhien = $request->get('Anhien');
            $sp->motadai_sp = $request->get('motadai_sp');
            $sp->motangan_sp = $request->get('motangan_sp');
            $sp->sp_khuyenmai = $request->get('sp_khuyenmai');   
            $sp->time_discount = $request->get('time_discount');
            $sp->sku = $request->get('sku');


        }
        else{

            $sp->slug_sp =\Str::slug($request->name_sp);
            $sp->id_donvitinh = $request->get('id_donvitinh');
            $sp->name_sp = $request->get('name_sp');
            $sp->id_nhomsp = $request->get('id_nhomsp');
            $sp->id_loaisp = $request->get('id_loaisp');
            $sp->id_thuonghieu = $request->get('id_thuonghieu');
            $sp->price_sp = $request->get('price_sp');
            $sp->old_price_sp = $request->get('old_price_sp');
            $sp->Anhien = $request->get('Anhien');
            $sp->motadai_sp = $request->get('motadai_sp');
            $sp->motangan_sp = $request->get('motangan_sp');
            $sp->sp_khuyenmai = $request->get('sp_khuyenmai'); 
            $sp->time_discount = $request->get('time_discount');  
            $sp->sku = $request->get('sku');


        }
        if(!empty($request->file('fEditImage'))) {
            foreach ($request->file('fEditImage') as $file) {
                $detail_img = new HinhSanpham();
                if (isset($file)) {
                    $detail_img->name_img = $file->getClientOriginalName();
                    $detail_img->id_sanpham = $id;
                    $file->move(public_path().'/hinhchitiet/', $file->getClientOriginalName());
                    $detail_img->save();
                } 
          }
        }
       
          $sp->save();
          toast('Cập Nhật Sản Phẩm Thành Công!','success');

        return redirect()->route('san-pham.index');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sp = SanPham::find($id);

        if ($sp->sku()->get()->toArray()==null) {
           
         $image_path = public_path().'/hinhsp/'.$sp->img_sp;
        if(file_exists($image_path))
        unlink($image_path);
        $sp->delete();
        toast('Xóa Sản Phẩm Thành Công!','success');
        return redirect()->route('san-pham.index');
        }else{
            toast('Không thể xóa sản phẩm này vì còn số lượng trong kho !','error');
            return redirect()->route('san-pham.index');
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
            \App\SanPham::where('id_sanpham',$request->id)->update(['Anhien'=>$request->status]);
            // trả về status hiện tại để xử lý front end
            return $request->status;
        }
    }

    function changeSale(Request $request){
        if($request->ajax()){
             if(!$request->id){
                return "error";
            }
            \App\SanPham::where('id_sanpham',$request->id)->update(['old_price_sp'=>$request->status,'sp_khuyenmai'=>$request->km,'time_discount'=>$request->time]);
            // trả về status hiện tại để xử lý front end
            return
            $request->km;
          
           
        }
    }

    
    public function delImage(Request $request){
        if ($request->ajax()) {
            $image_detail = HinhSanPham::find($request->idHinh);
            if(!empty($image_detail)) {
                $img = public_path().'/hinhchitiet/'.$image_detail->name_img;
                if(file_exists($img))
                unlink($img);
                $image_detail->delete();
            }
            return $request->idHinh;
        }
    }

    function get_type_pro($id){
        $kq = DB::select("SELECT id_loaisp, name_loaisp FROM loaisp WHERE id_nhomsp=$id");
        foreach($kq as $row)  
        if($row != null){
        echo "<option value={$row->id_loaisp}> {$row->name_loaisp} </option>";
        }
        else
        {
        echo "<option value='0'> --None-- </option>";
        };
    }


    
//     //tìm kiếm và lọc
//     public function indexSorting()
//     {
//         $productsort = SanPham::sortable()->paginate(8);
//         // dd($productsort);
        
//         return view('FE.products.sort_product')->with('productsort', $productsort);
//     }

//     public function indexFiltering(Request $request)
// {
//     $filter = $request->query('filter');

//     if (!empty($filter)) {
//         $products = SanPham::sortable()
//             ->where('sanpham.name_sp', 'like', '%'.$filter.'%')
//             ->paginate(5);
//     } else {
//         $products = SanPham::sortable()
//             ->paginate(5);
//     }
//     dd($filter);
//     return view('products.index-filtering')->with('products', $products)->with('filter', $filter);
// }

}
