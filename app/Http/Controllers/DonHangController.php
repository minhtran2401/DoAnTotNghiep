<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\DonHang;
use App\ChiTietHD;
class DonHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds = DonHang::all();
       
        return view('admin.donhang.index', compact('ds'));
        
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        $data['chitiet'] = DB::table('chitiethd')->where('id_donhang',$id)->get();
        $data['tinhtrang'] = DB::table("tinhtranghd")->select("id_tinhtrang", "name_tinhtrang")->get();
        $row = DonHang::find($id);
        return view('admin.donhang.edit', compact('row') ,$data);
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
        $ds = DonHang::find($id);
        $ds->id_tinhtrang = $request->get('id_tinhtrang');

        $ds->update();
        toast('Cập nhật đơn hàng thành công!', "success");
        return redirect()->route('don-hang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ds = DonHang::find($id);
        $chitiet = ChiTietHD::where('id_donhang',$id);
        $chitiet->delete();
        $ds->delete($id);
        toast('Xóa Đơn Hàng Thành Công!','success');
        return redirect()->route('don-hang.index');
    }

    
    function check_all_bill(Request $request){
        if($request->ajax()){
            if(!$request->status){
                return "error";
            } 
            \App\DonHang::where('id_tinhtrang',1)->update(['id_tinhtrang' => $request->status]);

            return $request->status;
        }
    }
}
