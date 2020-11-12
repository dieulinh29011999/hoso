<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoSo extends Model
{
    protected $table='hoso';
    public $timestamp = false;
    protected $fillable=['mahoso','tenhoso','ngaybanhanh','thoihanhoso','thoihanluutru','ngaytao',
    'tinhtrang','filedinhkem','noiluutrubandau','noinhan','noinhan','mucdo','nguoitao','id_vitri','id_loai'];
    public function user(){
        return $this->belongsTo('App\User','nguoitao','id');
    }
    public function vitri(){
        return $this->hasOne('App\ViTri','id_vitri','id');
    }
    public function loaihoso(){
        return $this->belongsTo('App\LoaiHoSo','id_loai','id');
    }
}
