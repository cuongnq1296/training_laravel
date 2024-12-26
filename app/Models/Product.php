<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    // use SoftDeletes;
    use HasFactory;

    // protected $timestamps = false;
    // const CREATED_AT = 'created_on';
    // const UPDATED_AT = 'modified_at';
    // const DE = 'modified_at';



    protected $table = "products";
    protected $primaryKey = "id";
    protected $fillable = [
        "name",
        "price",
        "quantity",
        "image",
        "category",
        "is_available",
    ];

    // // $casts: chuyển đổi dữ liệu trong DB ra kiểu dữ liệu mong muốn

    // protected $casts = [
    //     'is_available' => 'boolean',
    // ];

    // $guarded: các cột không được gán giá trị
    // $hidden: tên các cột ẩn khỏi kết quả trả về

}
