<?php

namespace App\Http\Controllers;
use App\ChiTietHD;
use App\LoaiSanPham;
use App\NhomSanPham;
use App\DonHang;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\SanPham;
use DB;
use App\Users;
use Illuminate\Support\Str;

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

    public function san_pham_ban_chay(){
        $data = array();
        $quanty =  ChiTietHD::select('id_sanpham', DB::raw('SUM(chitietdonhang_soluong) as count'))
        ->groupBy('id_sanpham')
        ->orderBy('count', 'desc')
        ->limit(20)->get();
            foreach($quanty as $t){
                $name = $t->id_sanpham;
                $namesp = SanPham::where('id_sanpham',$name)->value('name_sp');
                $soluong = $t->count;
                $data[] = array('name' => Str::limit($namesp,10,$end='..'), 'value' => json_decode($soluong));
            }
            return response()->json($data);
    }

    public function khach_hang_tiem_nang(){
        $data = array();
        $quanty =  DonHang::select('id', DB::raw('sum(tongtien_donhang) as count'))
        ->groupBy('id')
        ->orderBy('count', 'desc')
        ->limit(10)->get();
      
            foreach($quanty as $t){
                
                $name = $t->id;
                $namesp = Users::where('id',$name)->value('name');
                if($name == 0){

                    $namesp = 'Khách vãng lai';
                }
                elseif($name =! 0){
                    $namesp = $namesp;
                }
                $soluong = $t->count ;
                $data[] = array('name' => $namesp, 'value' => json_decode($soluong));
            }
            return response()->json($data);
    }


} //!!!!!!!!!!
