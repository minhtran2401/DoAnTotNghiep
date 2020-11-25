<?php

namespace App\Http\Controllers;
use App\LoaiSanPham;
use App\NhomSanPham;
use App\DonHang;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;

class ChartController extends Controller
{
    public function thong_ke_san_pham()
    {
        $parents = NhomSanPham::all();
        $data = array();
        $children = array();
     
        foreach ($parents as $key=>$parent)
        {
            $parents_children = $parent->ktloaisp()->get();
          
            foreach ($parents_children as $child)
            {
                // dd($child);
             $children[] =  ['name' => $child->name_loaisp, 'value' => LoaiSanPham::withCount('ktsp')->value('ktsp_count')];
                          
            }
            $data[] = array('name' => $parent->name_nhomsp, 'children' => $children);
            $children = array();

        }
        return response()->json($data);
    }

    public function thong_ke_so_luong_san_pham()
    {
        $quanty =  LoaiSanPham::withCount('ktsp')->get();
        $data = array();
        foreach ($quanty as $qt)
        {
            $name = $qt->name_loaisp;
            $value =  $qt->ktsp_count;
            $data[] = array('name' => $name, 'quanty' => $value);
        }
        return response()->json($data);
    }

    public function thong_ke_don_hang(){
        $data = array();
       $quanty = DonHang::selectRaw("COUNT(*) value, DATE_FORMAT(created_at, '%Y %m %e') date")
        ->groupBy('date')
        ->get();
        foreach($quanty as $q){
            $date = $q->date;
            $value = $q->value;
            $data[] = array('date' => $date, 'value' => $value);
        }
        return response()->json($data);
    }

    public function thong_ke_thu_nhap()
    {
        $data = array();
       $quanty = DonHang::selectRaw("COUNT(*) value, DATE_FORMAT(created_at, '%Y-%m-%e') date")->where('id_tinhtrang',5)
       ->groupBy(DB::raw('date'))
       ->select( DB::raw('DATE(created_at) as date'),
                DB::raw('SUM(tongtien_donhang) as total'))
        ->get();
        foreach($quanty as $q){
            $date = $q->date;
            $value = $q->total;
            // dd($value);
            $data[] = array('date' => $date, 'steps' => json_decode($value));
          

        }
        return response()->json($data);
    }



} //!!!!!!!!!!
