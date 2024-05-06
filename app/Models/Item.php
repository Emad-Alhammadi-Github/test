<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;


    // protected $casts = [];

    // protected $dates = [""];
    // protected $appends = [""];
    
    // protected $fillable = [
    //     'item_name',
    //     // يمكنك إضافة المزيد من الحقول الأخرى هنا
    // ];
    protected $guarded=["id"];

    // public function Cat(){
    //     return $this->belongsTo(Cat::class);
    // }

    //    public function users(){
    //     return $this->belongsToMany(User::class);
    // }
    
    public function cart(){
        return $this->hasMany(carditems::class);
    }

}
