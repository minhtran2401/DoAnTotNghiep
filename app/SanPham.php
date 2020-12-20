<?php

namespace App;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model {
    use Sortable;
    protected $table='sanpham';
    protected $primaryKey='id_sanpham';
    protected $dates = ['time_discount']; //Khai báo các field kiểu ngày
    public $sortable = ['name_sp',
    'sku',
    'id_loaisp',
    'price_sp'];

    protected $fillable = [
        'id_sanpham',
        'id_nhomsp',
        'id_loaisp',
        'name_sp',
        'motadai_sp',
        'motangan_sp',
        'img_sp',
        'price_sp',
        'id_donvitinh',
        'sp_khuyenmai',
        'old_price_sp',
        'id_thuonghieu',
        'Anhien',
        'slug_sp',
        'time_discount',
        'sku'
    ];

    public function ktsp() {
        return $this->belongsToMany('App\LoaiSanPham','id_loaisp','id_loaisp');
    }
    public function hinhsp(){
        return $this->hasMany('App\HinhSanPham','id_sanpham','id_sanpham');
    }

    public function sku()
    {
        return $this->hasOne('App\KhoHang','sku','sku');
    }

    // filter 
    public function scopebrand($query, $request)
{
    if ($request->has('brand[]')) {
        $query->where('id_thuonghieu', $request->brand[]);
    }
    return $query;
}
public function scopegroup($query, $request)
{
    if ($request->has('group[]')) {
        $query->where('id_nhomsp', $request->group[]);
    }
    return $query;
}
public function scopetype($query, $request)
{
    if ($request->has('type[]')) {
        $query->where('id_loaisp', $request->type[]);
    }
    return $query;
}
public function scopeprice($query, $request)
{
    if ($request->has('minimum_price') && $request->has('maximum_price') ) {
        $query->whereBetween('price_sp', [$request->minimum_price, $request->maximum_price]);

    }
    return $query;
}

}
