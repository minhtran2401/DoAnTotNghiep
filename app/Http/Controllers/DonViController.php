<?php
use RealRashid\SweetAlert\Facades\Alert;

namespace App\Http\Controllers;
use App\DonVi;

use Illuminate\Http\Request;
use App\Http\Requests\RequestDonViTinh;

class DonViController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds = donvi::all();
        return view('admin.donvitinh.index', compact('ds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.donvitinh.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestDonViTinh $request)
    { 
       
        $dv = new donvi([
            'name_donvi' => $request->get('name_donvi')
        ]);
        toast('Thêm Đơn Vị Thành Công!','success');
        $dv->save();
        return redirect ()->route('donvitinh.index');
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
        $row =donvi::find($id);
        return view('admin.donvitinh.edit',compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestDonViTinh $request, $id)
    {
        $dv = Donvi ::find($id);
        $dv->name_donvi = $request->get('name_donvi');
        $dv->save();
        toast('Cập Nhật Đơn Vị Thành Công!','success');
        return redirect()->route('donvitinh.index');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dv = donvi::find($id);
        $dv->delete($id);
        toast('Xóa Thành Công!','success');
        return redirect()->route('donvitinh.index');
    }
}
