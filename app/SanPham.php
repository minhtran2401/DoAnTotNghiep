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

}
